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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('home', function()
{
    return View::make('home');
});


// user model route
Route::model( 'user', 'User' );

Route::resource( 'users', 'UserController' );

Route::get('users', 	'UserController@getIndex');
Route::get('new_user', 	'UserController@getCreate');

// Route::get('users', function()
// {
//     return 'Users!';
// });