@extends('layout')

@section('content')
	@if( Auth::check() )
		<h4>
			<a href="/users/{{$user->id}}/edit">EDIT</a>
			<a href="/users/{{$user->id}}/delete">DELETE</a>
		</h4>
	@endif
	<h1>{{{ $user['name'] }}}</h1>
	<h2>{{{ $artistNames[ $user['artist_id']] }}}</h2>
	<h3><a href="$user['facebook_url'] ">Facebook</a></h3>
	<h3><a href="$user['twitter_url'] ">Twitter</a></h3>
	<p>{{{ $user['summary'] }}}</p>

@stop