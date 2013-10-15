@extends('layout')
@section('content')

	<div class="span12">
		<h1>{{{$artist->name}}}</h1>
	</div>

	<div class="span9">
		<p>{{ $artist['summary'] }}</p>
	</div>

@stop