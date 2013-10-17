@extends('layout')
@section('content')

	<div id="master"data-artistid="{{{$artist->id}}}" class="span12">	
		<h1>Editing Band {{$artist->name}}</h1>
	</div>

	<div class="span12">
		<h2>Add pics of this Band</h2>
		<p>To add pics, just click the button below and follow the instructions. These will be associated with the current user, and also with thier band</p>
		<img id="addArtistPicture" src="/img/icon-custom.png">

	<br>
	<hr>
	</div>
	<div class="span9">
	{{ Form::open(array('url' => 'artists', 'files' => true)) }}

		{{Form::label('name', 'name');}}
		{{ Form::text( 'name' );}}
		
		{{Form::label('summary', 'band summary');}}
		{{ Form::textarea( 'summary' );}}

		{{Form::label('facebook_url', 'facebook_url');}}
		{{ Form::text( 'facebook_url' );}}

		{{Form::label('twitter_url', 'twitter_url');}}
		{{ Form::text( 'twitter_url' );}}

		{{ Form::submit('add', array( 'class' => 'btn btn-primary')); }}

	{{ Form::close() }}
	</div>

@stop
