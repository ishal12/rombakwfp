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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', 'PageController@getAbout');

Route::get('/contact', 'PageController@getContact');

Route::auth();

Route::get('/setUser', 'PageController@getSetUser', function(){
	
})->middleware('auth');

Route::get('/home', 'HomeController@index');
