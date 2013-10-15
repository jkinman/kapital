@extends('layout')

@section('content')

<h1>Add Media (pics / vids / etc)</h1>

<input type="filepicker" name="pictures"/>

filepicker.setKey('A8yAqYzKpTycXyMc5hrYCz');
undefined
filepicker.pickAndStore({},{},function(InkBlobs){
   console.log(JSON.stringify(InkBlobs));
});

{{ Form::model( $assets, [ 'route' => ['assets.store'], 'method' => 'POST' ] ) }}
	
	{{ Form::label('title', 'title'); }}
	{{ Form::text( 'title' );}}
	
	{{ Form::label('body', 'body'); }}
	{{ Form::textArea( 'body' );}}
	<br>
	{{ Form::submit('POST IT!'); }}

{{ Form::close() }}

@stop
