@extends('layout')

@section('content')

<h1>Post an update</h1>

{{ Form::model( $blog, [ 'route' => ['blogs.store'], 'method' => 'POST' ] ) }}
	
	{{ Form::label('title', 'title'); }}
	{{ Form::text( 'title' );}}
	
	{{ Form::label('body', 'body'); }}
	{{ Form::textArea( 'body' );}}

	{{ Form::submit('add'); }}

{{ Form::close() }}

@stop