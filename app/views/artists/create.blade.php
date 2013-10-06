@extends('layout')

@section('content')

		
<h1>Add a new band to the Kapital Roster!</h1>

{{ Form::open(array('url' => 'artists', 'files' => true)) }}

	{{Form::label('name', 'name');}}
	{{ Form::text( 'name' );}}
	
	{{Form::label('summary', 'band summary');}}
	{{ Form::textarea( 'summary' );}}

	{{ Form::submit('add'); }}

{{ Form::close() }}

@stop