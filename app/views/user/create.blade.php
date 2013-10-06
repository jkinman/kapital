@extends('layout')

@section('content')

		
<h1>Add a new singer or band</h1>

{{ Form::open(array('url' => 'user', 'files' => true)) }}

	{{Form::label('email', 'E-Mail Address');}}
	{{ Form::email( 'email' );}}
	
	{{Form::label('password', 'password');}}
	{{Form::password('password');}}

	{{Form::label('name', 'name');}}
	{{ Form::text( 'name' );}}
	
	{{Form::label('bio', 'artist info');}}
	{{ Form::textarea( 'bio' );}}

	{{Form::label('artist_id', 'What band does this person belong to?');}}
	{{ Form::select( 'artist_id', $artists );}}

	{{ Form::submit('add'); }}

{{ Form::close() }}

@stop