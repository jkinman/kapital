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

Route::get('/', 	array( 'uses' => 'HomeController@index' ));
Route::get('home', 	array( 'uses' => 'HomeController@index' ));

// Route::get('/', function()
// {
// 	return View::make('comingSoon');
// });

Route::get( 	'superSecretLogin', array( 'uses' => 'UsersController@loginForm' ));
Route::post( 	'superSecretLogin', array( 'uses' => 'UsersController@login' ));

Route::resource( 'user', 			'UsersController' );
Route::resource( 'blog', 			'BlogsController' );
Route::resource( 'artist', 			'ArtistsController');
Route::resource( 'asset', 			'AssetsController');