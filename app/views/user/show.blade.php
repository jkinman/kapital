@extends('layout')

@section('content')
	@if( Auth::check() )
	<div class="span12">
		<h4>
			<a href="/user/{{$user->id}}/edit">EDIT</a>
			<a href="/user/{{$user->id}}/delete">DELETE</a>
		</h4>
		@endif
		<h1>{{{ $user['name'] }}}</h1>
	</div>

	<div class="span9">
		<h2>{{{ $artistNames[ $user['artist_id']] }}}</h2>
		<h3><a href="$user['facebook_url'] ">Facebook</a></h3>
		<h3><a href="$user['twitter_url'] ">Twitter</a></h3>
		<p>{{{ $user['summary'] }}}</p>
		<div class="row" id="portfolio">
			@foreach( $user->assets as $asset )
				<div class="span3 portthumb">
			        <a href="#" rel="popover" data-content="{{{$asset->summary}}}" data-original-title="{{{$asset->title}}}">
			        	<img src="{{{$asset->url}}}" alt=""></a>
		    	    <h5>{{{$asset->title}}}</h5>
		        	<p>{{{$asset->summary}}}</p>
	      		</div>
			@endforeach
		</div>
	</div>
@stop