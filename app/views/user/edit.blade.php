@extends('layout')

@section('content')
	<h1>Edit User </h1>
	<h2>Add media</h2>
	<p>
		<input type="filepicker" name="pics"/>
	</p>

	
	{{ Form::model( $user, array( 'route' => 'users.update', $user->id)) }}

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