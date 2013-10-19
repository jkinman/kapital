@extends('layout')

@section('content')

<div class="span12">	
	<h1>Add a new user</h1>
	<h3>This is a user of the site, they will be belong to a band, and be able 
		to post blog updates on behalf of themselves, and post pics and videos of thier band. </h3>
	<h4>If you make a user an administrator, that user can make other users. Most people shouldn't be admins</h4>
<br>
<hr>
</div>
<br>
{{ Form::open(array('url' => 'user', 'files' => true)) }}
<div class="span4">

	{{Form::label('email', 'E-Mail Address');}}
	{{ Form::email( 'email' );}}
	
	{{Form::label('password', 'password');}}
	{{Form::password('password');}}

	{{Form::label('admin', 'administrator (can add other users)');}}
	{{ Form::checkbox( 'admin' );}}
	
	{{Form::label('artist_id', 'What band does this person belong to?');}}
	{{ Form::select( 'artist_id', $artists );}}
	
	{{Form::label('type', 'User\'s role (site admins are not displayed on the kapital roster)');}}
	{{ Form::select( 'type', $userTypes );}}

	{{Form::label('name', 'name');}}
	{{ Form::text( 'name' );}}
	<hr>
	
</div>
<div class="span4">

	{{Form::label('bio', 'artist info');}}
	{{ Form::textarea( 'bio' );}}

	{{Form::label('facebook_url', 'facebook_url');}}
	{{ Form::text( 'facebook_url' );}}

	{{Form::label('twitter_url', 'twitter_url');}}
	{{ Form::text( 'twitter_url' );}}
	<br>
	{{ Form::submit('add'); }}
	<hr>
</div>


{{ Form::close() }}

@stop
