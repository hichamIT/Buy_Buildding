<?php

namespace App\Http\Controllers;

use App\Bu;
use App\Http\Requests\BuRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\Datatables;

class BuController extends Controller
{
    public function  index()
    {
        return view('admin.bu.index');
    }

    public function create()
    {
        return view('admin.bu.add');
    }

    public function store(BuRequest $request , Bu $build )
    {
        $user = Auth::user();
        if($request->file('bu_image')) {
            $filename = $request->file('bu_image')->getClientOriginalName();
            $request->file('bu_image')->move(
                base_path() . '/public/website/bu_image/', $filename
            );
        }else{
            $filename = '';
        }
        $data = [

            'bu_name' =>  $request->bu_name,
            'bu_price' => $request->bu_price,
            'bu_rent' =>  $request->bu_rent,
            'bu_square' =>$request->bu_square,
            'bu_type' =>  $request->bu_type,
            'bu_smal_desc' =>$request->bu_smal_desc,
            'bu_meta' =>$request->bu_meta,
            'bu_langitude' =>$request->bu_langitude,
            'bu_lantitude' =>$request->bu_lantitude,
            'bu_large_des' =>$request->bu_large_des,
            'bu_status' =>$request->bu_status,
            'bu_image' =>$request->bu_image,
            'bu_rooms' =>$request->bu_rooms,
            'user_id' => $user->id

        ];
        $build->create($data);
        return redirect('/adminpanel/bu')->withFlashMessage('building Added');
    }

    public function edit($id)
    {
        $build = Bu::find($id);
        return view('admin.bu.edit' , compact('build'));
    }

    public function update($id , BuRequest $request)
    {
        $buildupdate = Bu::find($id);
        $buildupdate->fill(array_except($request->all() , ['bu_image']))->save();
        if($request->file('bu_image')){
            $filename = $request->file('bu_image')->getClientOriginalName();
            $request->file('bu_image')->move(
                base_path().'/public/website/bu_image/' , $filename
            );
            $buildupdate->fill(['bu_image' => $filename])->save();
        }
        return Redirect::back()->withFlashMessage('Building updated');

    }

    public function destroy($id)
    {
        Bu::find($id)->delete();
        return Redirect::back()->withFlashMessage('Building deleted');

    }


    public function anyData()
    {
        $build = Bu::select(['id', 'bu_name', 'bu_price','bu_type','bu_status','created_at']);

        return Datatables::of($build)
            ->editColumn('bu_name', function($bu) {
                return \Html::link('/adminpanel/bu/'.$bu->id.'/edit' , $bu->bu_name);
            })
            ->editColumn('bu_status', function($bu) {
                $type = bu_status();
                return '<span class="badge badge-info">' . $type[$bu->bu_status] . '</span>';
            })
            ->editColumn('bu_type', function($bu) {
                $type = bu_array();
                return '<span class="badge badge-info">' . $type[$bu->bu_type] . '</span>';
            })
            ->editColumn('action', function($bu) {
                $all = '<a href="'.url('/adminpanel/bu/'.$bu->id.'/edit').'" class="btn btn_info btn-circle"><i class="fa fa-edit"></i></a>';
                $all .= '<a href="' . url('/adminpanel/bu/' . $bu->id . '/delete') . '" class="btn btn_danger btn-circle"><i class="fa fa-trash-o"></i></a>';

                return $all;
            })

            ->make();
    }

    public function showall(Bu $bu)
    {
        $build = $bu->where('bu_status','0')->orderby('id','desc')->paginate(3);
        return view('website.bu.all',compact('build'));
    }

    public function forrent($id , Bu $bu)
    {
        $build = $bu->where('bu_status','0')->where('bu_rent',$id)->orderby('id','desc')->paginate(3);
        return view('website.bu.all',compact('build'));
    }

    public function fortype($id , Bu $bu)
    {
        if(in_array($id , ['0','1','2'])){
            $build = $bu->where('bu_status','0')
                ->where('bu_type',$id)
                ->orderby('id','desc')
                ->paginate(3);
            return view('website.bu.all',compact('build'));
        }else{
            return Redirect::back();
        }


    }

    public function search(Request $request,Bu $bu)
    {
        $requestall = array_except($request->toArray(),['submit','_token','page']);
        $query =  DB::table('bu')->select('*');
        $array = [];
        foreach ($requestall as $key => $req){
            if ($req != ''){
                $query->where($key,$req);
                $array [$key] = $req;
            }

        }
        $build = $query->paginate(1);

        return view('website.bu.all',compact('build','array'));
    }


    public function singlebu($id , Bu $buinfo)
    {
        $busingle = $buinfo->find($id);
        return view('website.bu.buinfo' , compact('busingle'));
    }
}
