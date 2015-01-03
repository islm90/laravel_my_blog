<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/

Route::get('/','UsersController@dashboard');

Route::resource('nerds','NerdController');

Route::get('admintheme', function()
{
	return View::make('elements.admin.sample');
});

Route::get('fonttheme', function()
{
	return View::make('elements.fontend.sample');
});

/*for User module*/

/*Route::get('login','AuthController@ShowLogin');
Route::post('login','AuthController@DoLogin');
Route::resource('AuthController');
*/
Route::get('login','UsersController@ShowLogin');
Route::Post('login','UsersController@DoLogin');
Route::get('register','UsersController@register');
Route::get('dashboard','UsersController@dashboard');
Route::get('profile','UsersController@profile');
Route::get('logout','UsersController@logout');

Route::resource('users','UsersController');

