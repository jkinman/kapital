@extends('layout')

@section('content')

		
<h1>Editing {{$artist->name}}</h1>

{{ Form::open(array('url' => 'artists', 'files' => true)) }}

	{{Form::label('name', 'name');}}
	{{ Form::text( 'name' );}}
	
	{{Form::label('summary', 'band summary');}}
	{{ Form::textarea( 'summary' );}}

	{{Form::label('picture', 'picture');}}
	{{ Form::file( 'picture' );}}

	{{Form::label('facebook_url', 'facebook_url');}}
	{{ Form::text( 'facebook_url' );}}

	{{Form::label('twitter_url', 'twitter_url');}}
	{{ Form::text( 'twitter_url' );}}

	{{ Form::submit('add', array( 'class' => 'btn btn-primary')); }}

{{ Form::close() }}

@stopedit.blade


<input type="filepicker" name="myName"/>

<input type="filepicker-dragdrop" data-fp-multiple="true"/>