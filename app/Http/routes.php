<?php

//use Auth;

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



Route::get('/login', 'LoginController@loginScreen');
Route::get('/logout', 'LoginController@logout');

Route::group(['middleware' => 'checkauth'] ,function(){
	Route::get('/', 'HomeController@dashboard');
});


Route::post('/login', 'LoginController@login');
Route::post('/newuser', 'LoginController@newuser');
Route::post('/uniquemailtest', 'LoginController@uniquemailtest');
Route::post('/uniqulogintest', 'LoginController@uniqulogintest');
