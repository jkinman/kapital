@extends('layout')
@section('content')

	<div class="span12">
		<h1>Kapital Entertainment Updates</h1>
	</div>

	<div class="span9">
		@foreach( $blogs as $blog )
			<h2><a href="/blog/{{$blog->id}}">{{  $blog->title }}</a></h2>
			<h5>Author <a href="/users/{{$blog->user_id}}">{{  $blog->user->name }}</a></h5>
			<h5>on {{ $blog->created_at }}</h5>
			<p>{{ $blog->body }}</p>
		@endforeach
	</div>

@stop