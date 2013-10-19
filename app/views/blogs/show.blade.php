@extends('layout')
@section('content')
	@if( Auth::check())
		<div class="actions">
			@if( $currentUser->admin || $blog->author->user_id == $currentUser->id)
				<a href="/blog/{{{$blog->id}}}/delete">DELETE POST</a>
			@endif
		</div>
	@endif

	<div class="span12">
		<h1>{{{$blog->title}}}</h1>
	</div>

	<div class="span9">
		<p>{{ $blog->body }}</p>
		<h2>Posted by <a href="/users/{{$blog->user_id}}">{{  $blog->user->name }}</a></h2>
		<h5>on {{ $blog->created_at }}</h5>
	</div>

@stop