@extends('layout')

@section('content')

<h1>Blog posts</h1>

@foreach( $blogs as $blog )
	<h2> {{  $blog->title }} </h2>
	{{  $blog->created_at }}
	<p> {{  $blog->body }} </p>
@endforeach

@stop