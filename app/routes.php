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

// user model route
Route::model( 'user', 'User' );

Route::get('/', function()
{
	return View::make('hello');
});

Route::get( 'superSecretLogin', array( 'uses' => 'UserController@loginForm' ));
Route::post( 'superSecretLogin', array( 'uses' => 'UserController@login' ));

Route::get('home', function()
{
    return View::make('home');
});

Route::resource( 'user', 			'UserController' );
Route::resource( 'artist', 			'ArtistController' );
Route::resource( 'blog', 			'BlogController' );

