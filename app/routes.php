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

// REST route for user
Route::resource( 'user', 'UserController' );

// user model route
Route::model( 'user', 'User' );


// Route::get('users', function()
// {
//     return 'Users!';
// });

Route::resource('blogs', 'BlogsController');