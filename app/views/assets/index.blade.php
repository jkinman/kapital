@extends('layout')
@section('content')

	<div class="span12">
		<h1>Kapital Assets</h1>
		@if( Auth::check())
		@endif
	</div>

	<div class="row" id="portfolio">
		<div class="span10">
			@foreach ($assets as $asset)
				<div class="span3 portthumb">
					<img src="{{{$asset->url . '/convert?w=300&h=250&fit=crop'}}}" alt="{{{ $asset['title'] }}}">
				</div>
			@endforeach
		</div>
	</div>

@stop