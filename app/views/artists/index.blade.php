@extends('layout')
@section('content')

<!-- Portfolio row of columns -->
		<div class="span12">
			<h1>Kapital Artists</h1>
			@if( Auth::check())
				<div class="actions">
					@if( $currentUser->admin )
						<a href="/artist/create">NEW ARTIST</a>
					@endif
				</div>
			@endif
		</div>

		<div class="row" id="portfolio">
		<div class="span10">
			@foreach ($artists as $artist)
				<div class="span3 portthumb">
					<a href="/artist/{{$artist['id']}}" rel="popover" data-content="{{{ $artist['name'] }}}" 
					data-original-title="{{{ $artist['name'] }}}">
					@if( ! $artist->assets->isEmpty())
						<img src="{{{$artist->assets->first()->url . '/convert?w=300&h=250&fit=crop'}}}" alt="{{{ $artist['summary'] }}}">
					@else
						<img src="img/placeholderProfile.png" alt="{{{ $artist['summary'] }}}">
					@endif
					</a>
					<h3>{{{ $artist['name'] }}}</h3>
					<p> {{{ $artist['summary'] }}} </p>
					@foreach( $artist->user as $user )
					@endforeach
				</div>
			@endforeach
		</div>
	</div>

	<div class="span2 well">
		<h2>Latest Posts</h2>
		<ul class="unstyled">
			@foreach( $blogs as $blog )
				<li><a href="/blog/{{{$blog->id}}}">{{  $blog->title }}</a></li>
			@endforeach
		</ul>
	</div>

@stop