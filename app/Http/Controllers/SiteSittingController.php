<?php

namespace App\Http\Controllers;

use App\SiteSitting;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class SiteSittingController extends Controller
{
    public function index(SiteSitting $sitesetting){
        $sitesetting = $sitesetting->all();
        return view('admin.sitesetting.index',compact('sitesetting'));
    }

    public function store(Request $request,SiteSitting $sitting){

        foreach (array_except($request->toArray() , ['_token' , 'submit']) as $key => $req){
            $sittingupdate = $sitting->where('namesitting' , $key)->get()->first();
            $sittingupdate->fill( [ 'value' => $req ] )->save();
        }
        return Redirect::back();
    }
}
