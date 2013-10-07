@extends('layout')

@section('content')

		
<h1>Add a new singer or band</h1>

{{ Form::open(array('url' => 'users', 'files' => true)) }}

	{{Form::label('email', 'E-Mail Address');}}
	{{ Form::email( 'email' );}}
	
	{{Form::label('password', 'password');}}
	{{Form::password('password');}}

	{{Form::label('artist_id', 'What band does this person belong to?');}}
	{{ Form::select( 'artist_id', $artists );}}

	{{Form::label('name', 'name');}}
	{{ Form::text( 'name' );}}

	{{Form::label('admin', 'administrator (user can make new users)');}}
	{{ Form::checkbox( 'admin' );}}
	
	{{Form::label('bio', 'artist info');}}
	{{ Form::textarea( 'bio' );}}
	
	{{Form::label('picture', 'picture');}}
	{{ Form::file( 'picture' );}}

	{{Form::label('facebook_url', 'facebook_url');}}
	{{ Form::text( 'facebook_url' );}}

	{{Form::label('twitter_url', 'twitter_url');}}
	{{ Form::text( 'twitter_url' );}}

	{{ Form::submit('add'); }}

{{ Form::close() }}

@stop