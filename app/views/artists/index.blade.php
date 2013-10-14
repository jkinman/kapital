@extends('layout')
@section('content')

<!-- Portfolio row of columns -->
	<div class="row" id="portfolio">
		<div class="span12">
			<h1>Kapital Artists</h1>
		</div>

	@foreach ($artists as $artist)
		<div class="span3 portthumb">
			<a href="/artists/{{$artist['id']}}" rel="popover" data-content="And here's some amazing content. It's very engaging. right?" 
			data-original-title="{{{ $artist['name'] }}}">
				<img src="img/portfolioph.jpg" alt="{{{ $artist['summary'] }}}">
			</a>
			<h5>{{{ $artist['name'] }}}</h5>
			<p> {{{ $artist['summary'] }}} </p>
		</div>
	@endforeach

@stop