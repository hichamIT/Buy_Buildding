<?php

namespace App\Http\Controllers;

use App\Bu;
use App\Http\Requests\AddUserRequest;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\Datatables;

class UsersController extends Controller
{
    public function index()
    {

        return view('admin.user.index');
    }

    public function create()
    {
        return view('admin.user.add');
    }

    public function store(AddUserRequest $request, User $user)
    {

        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('adminpanel/users')->withFlashMessage('User added');
    }

    public function edit($id, User $user)
    {

        $user = $user->find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update($id, User $user, Request $request)
    {
        $userupdate = $user->find($id);
        $userupdate->fill($request->all())->save();
        return Redirect::back()->withFlashMessage('User added');
    }

    public function changePass(User $user, Request $request)
    {
        $userpassword = $user->find($request->user_id);
        $password = bcrypt($request->password);
        $userpassword->fill(['password' => $password])->save();
        return Redirect::back()->withFlashMessage('password updated');
    }

    public function destroy(User $user, $id)
    {
        if ($id != 1){
            $user->find($id)->delete();
            Bu::where('user_id',$id)->delete();
            return redirect('adminpanel/users')->withFlashMessage('User deleted');
        }
        return redirect('adminpanel/users')->withFlashMessage('You can\'t delete master user');

    }



    public function anyData()
    {
        $users = User::select(['id', 'name', 'email','admin','created_at', 'updated_at']);

        return Datatables::of($users)
            ->editColumn('name', function($user) {
                return \Html::link('/adminpanel/users/'.$user->id.'/edit' , $user->name);
            })
            ->editColumn('admin', function($user) {
                return $user->admin == 0 ? '<span class="badge badge-info">' . 'Subscriber' . '</span>':'<span class="badge badge-warning">' . 'Admin' . '</span>';
            })
            ->editColumn('action', function($user) {
                $all = '<a href="'.url('/adminpanel/users/'.$user->id.'/edit').'" class="btn btn_info btn-circle"><i class="fa fa-edit"></i></a>';
                if($user->id !=1) {
                    $all .= '<a href="' . url('/adminpanel/users/' . $user->id . '/delete') . '" class="btn btn_danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                }
                return $all;
            })

            ->make();
    }


}
