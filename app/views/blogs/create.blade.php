@extends('layout')

@section('content')

<h1>Post an update</h1>

{{ Form::model( $blog, [ 'route' => ['blog.store'], 'method' => 'POST' ] ) }}
	
	{{ Form::label('title', 'title'); }}
	{{ Form::text( 'title' );}}
	
	{{ Form::label('body', 'body'); }}
	{{ Form::textArea( 'body' );}}
	<br>
	{{ Form::submit('POST IT!', array( 'class' => 'btn btn-primary')); }}

{{ Form::close() }}

@stop