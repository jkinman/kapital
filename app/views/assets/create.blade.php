@extends('layout')
@section('content')

<div class="span12">

	<h1>Add Media (pics / vids / etc)</h1>
	<h3>Add picture here</h3>
	<button id="addPicture" />

</div>

<div class="span9">
	{{ Form::model( $assets, [ 'route' => ['assets.store'], 'method' => 'POST' ] ) }}
		
		{{ Form::label('title', 'title'); }}
		{{ Form::text( 'title' );}}
		
		{{ Form::label('body', 'body'); }}
		{{ Form::textArea( 'body' );}}
		<br>
		{{ Form::submit('POST IT!'); }}

	{{ Form::close() }}
</div>

@stop
