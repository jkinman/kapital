@extends('layout')

@section('content')

<!-- Portfolio row of columns -->
		<div class="span12">
			<h1>Kapital Entertainment Users</h1>
		</div>

	@foreach ($users as $user)
		<div class="span3 portthumb">
			<a href="/user/{{ $user['id'] }}/" rel="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">
				<img src="img/portfolioph.jpg" alt="">
			</a>
			<h5>{{{ $user['name'] }}}</h5>
			<p> {{{ $user['bio'] }}} </p>
		</div>
	@endforeach

@stop
