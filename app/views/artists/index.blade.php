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

		<div class="span9">
			@foreach ($artists as $artist)
				<div class="span3 portthumb">
					<a href="/artist/{{$artist['id']}}" rel="popover" data-content="And here's some amazing content. It's very engaging. right?" 
					data-original-title="{{{ $artist['name'] }}}">
						<img src="img/portfolioph.jpg" alt="{{{ $artist['summary'] }}}">
					</a>
					<h5>{{{ $artist['name'] }}}</h5>
					<p> {{{ $artist['summary'] }}} </p>
					@foreach( $artist->user as $user )
						{{$user}}
					@endforeach
				</div>
			@endforeach
		</div>
@stop