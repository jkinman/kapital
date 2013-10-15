@extends('layout')

@section('content')

<h1>Add Media (pics / vids / etc)</h1>

<input type="filepicker" name="pictures"/>

{{ Form::model( $assets, [ 'route' => ['assets.store'], 'method' => 'POST' ] ) }}
	
	{{ Form::label('title', 'title'); }}
	{{ Form::text( 'title' );}}
	
	{{ Form::label('body', 'body'); }}
	{{ Form::textArea( 'body' );}}
	<br>
	{{ Form::submit('POST IT!'); }}

{{ Form::close() }}

@stop