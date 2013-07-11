
		
	<h1>Add a new person / band</h1>

{{ Form::model( $user ) }}
	{{Form::label('email', 'E-Mail Address');}}
	{{ Form::text( 'email' );}}
	
	{{Form::label('name', 'name');}}
	{{ Form::text( 'name' );}}
	
	{{Form::label('bio', 'write up');}}
	{{ Form::text( 'bio' );}}

	{{ Form::submit('add'); }}

{{ Form::close() }}
