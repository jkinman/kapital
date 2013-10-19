@extends('layout')

@section('content')

<!-- Portfolio row of columns -->
		<div class="span12">
			<h1>The People of Kapital Entertainment</h1>
		</div>

		<div class="row" id="portfolio">
		<div class="span10">
			@foreach ($users as $user)
			@if( $user->type != 1)
				<div class="span3 portthumb">
					<a href="/user/{{$user['id']}}" rel="popover" data-content="{{{ $user['name'] }}}" 
					data-original-title="{{{ $user['name'] }}}">
					@if( ! $user->assets->isEmpty())
						<img src="{{{$user->assets->first()->url . '/convert?w=300&h=250&fit=crop'}}}" alt="{{{ $user['bio'] }}}">
					@else
						<img src="img/placeholderProfile.png" alt="{{{ $user['summary'] }}}">
					@endif
					</a>
					<h5>{{{ $user['name'] }}}</h5>
					<p> {{{ $user['bio'] }}} </p>
				</div>
			@endif
			@endforeach
		</div>
	</div>

@stop
