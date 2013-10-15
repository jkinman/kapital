@extends('layout')
@section('content')

	<div class="span12">
		<h1>Media Library</h1>
		@if( Auth::check())
			<img src="img/icon-custom.png">
		@endif
	</div>

	<!-- <div class="row" id="portfolio"> -->
		<div class="span9">
			@foreach( $assets as $asset )
				{{{ $asset->url }}}
			@endforeach
		</div>
	<!-- </div> -->

@stop