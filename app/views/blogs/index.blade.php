@extends('layout')

@section('content')

	<div class="span12">
		<h1>Kapital Entertainment Updates</h1>
	</div>

	<div class="span9">
		@foreach( $blogs as $blog )
			<h2><a href="#">{{  $blog->title }}</a></h2>
			<h5><a href="/users/{{$blog->user_id}}">{{  $blog->user_id }}</a></h5>
			<p>{{  $blog->body }}</p>
			<h5>{{  $blog->created_at }}</h5>
		@endforeach
	</div>

@stop