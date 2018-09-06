<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
 * admin Route
*/
Route::group(['middleware' => ['web','admin']] , function(){

    #datatables
    Route::get('/adminpanel/users/data' , ['as' => 'adminpanel.users.data' , 'uses' => 'UsersController@anyData']);
    Route::get('/adminpanel/bu/data' , ['as' => 'adminpanel.bu.data' , 'uses' => 'BuController@anyData']);

    #admin
    Route::get('/adminpanel','AdminController@index');

    #users
    Route::resource('/adminpanel/users','UsersController');
    Route::post('/adminpanel/users/changepassword','UsersController@changePass');
    Route::get('/adminpanel/users/{id}/delete','UsersController@destroy');

    #sitesetting
    Route::get('/adminpanel/sitesetting','SiteSittingController@index');
    Route::post('/adminpanel/sitesetting','SiteSittingController@store');

    #bu
    Route::resource('/adminpanel/bu','BuController');
    Route::get('/adminpanel/bu/{id}/delete','BuController@destroy');


});


/*
 * Authentication route
 * */

Route::group(['middleware'=> 'web'] , function(){

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/Showallbuilding', 'BuController@showall');
    Route::get('/forrent/{id}', 'BuController@forrent');
    Route::get('/type/{id}', 'BuController@fortype');
    Route::get('/search', 'BuController@search');
    Route::get('/singlebu/{id}', 'BuController@singlebu');

});