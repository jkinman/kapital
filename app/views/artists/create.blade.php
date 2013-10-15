@extends('layout')
@section('content')

<div class="span12">	
	<h1>Add a new band to the Kapital Roster!</h1>
	<h3>A band contains one or more users and can have media and blog posts.</h3>
<br>
<hr>
</div>
<br>
{{ Form::open(array('url' => 'artists', 'files' => true)) }}
<div class="span4">

	{{ Form::label('name', 'Name of band' );}}
	{{ Form::text( 'name' );}}
	
	{{ Form::label('summary', 'Bands Bio' );}}
	{{ Form::textarea( 'summary' );}}

	<hr>
	
</div>
<div class="span4">

	{{ Form::label('facebook_url', 'facebook page link');}}
	{{ Form::text( 'facebook_url' );}}

	{{ Form::label('twitter_url', 'twitter page link');}}
	{{ Form::text( 'twitter_url' );}}

	<br>

	<br>

	<br>
	{{ Form::submit('add'); }}
	<hr>
</div>


{{ Form::close() }}

@stop		
