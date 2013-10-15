@extends('layout')

@section('content')

	<h1>{{{ $user['name'] }}}</h1>
	<h2>{{{ $artists[ $user['artist_id']] }}}</h2>
	<h3><a href="$user['facebook_url'] ">Facebook</a></h3>
	<h3><a href="$user['twitter_url'] ">Twitter</a></h3>
	<h3>$user['twitter_url'] </h3>
	<p>$user['summary'] </p>

@stop