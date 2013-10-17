@extends('layout')
@section('content')

	<div class="span12">
		<h1>{{{$artist->name}}}</h1>
	</div>

	<div class="span9">
		<h2>{{ $artist['summary'] }}</h2>
			<div class="row" id="portfolio">
			@foreach( $artist->assets as $asset )
				<div class="span3 portthumb">
			        <a href="#" rel="popover" data-content="{{{$asset->summary}}}" data-original-title="{{{$asset->title}}}">
			        	<img src="{{{$asset->url}}}" alt=""></a>
		    	    <h5>{{{$asset->title}}}</h5>
		        	<p>{{{$asset->summary}}}</p>
	      		</div>
			@endforeach
		</div>

	</div>
	@if( Auth::check())
		<div class="actions">
			@if( $currentUser->admin )
				<a href="/artist/create">NEW ARTIST</a>
			@endif
			@if( $currentUser->admin || $artist->id == $currentUser->artis_id )
				<a href="/artist/{{{$artist->id}}}/edit">EDIT</a>
			@endif
		</div>
	@endif

@stop