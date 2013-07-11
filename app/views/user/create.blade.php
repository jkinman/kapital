
		
<h1>Add a new singer or band</h1>

{{ Form::open(array('url' => 'user', 'files' => true)) }}

	{{Form::label('email', 'E-Mail Address');}}
	{{ Form::text( 'email' );}}
	
	{{Form::label('name', 'name');}}
	{{ Form::text( 'name' );}}
	
	{{Form::label('bio', 'write up');}}
	{{ Form::text( 'bio' );}}

	{{ Form::submit('add'); }}

{{ Form::close() }}
