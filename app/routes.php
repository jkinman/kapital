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
// Route::model( 'user', 'User' );

Route::get('/', array( 'uses' => 'HomeController@index' ));
Route::get('home', array( 'uses' => 'HomeController@index' ));

// Route::get('/', function()
// {
// 	return View::make('comingSoon');
// });

Route::get( 'superSecretLogin', array( 'uses' => 'UserController@loginForm' ));
Route::post( 'superSecretLogin', array( 'uses' => 'UserController@login' ));

Route::resource( 'users', 			'UsersController' );
Route::resource( 'blog', 			'BlogsController' );
Route::resource( 'artists', 		'ArtistsController');
Route::resource( 'assets', 			'AssetsController');