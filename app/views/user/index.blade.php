@extends('layout')

@section('content')
{{ print_r( $users )}}
<!-- Portfolio row of columns -->
	<div class="row" id="portfolio">
		<div class="span12">
			<h1>Portfolio</h1>
		</div>

	@foreach ($users as $user)
		<div class="span3 portthumb">
			<a href="#" rel="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">
				<img src="img/portfolioph.jpg" alt="">
			</a>
			<h5>{{{ $user['name'] }}}</h5>
			<p> {{{ $user['bio'] }}} </p>
		</div>
	@endforeach

	<div class="span3 portthumb">
		<img src="img/portfolioph.jpg" alt="">
		<h5>Thumbnail label</h5>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum vulputate odio, et sodales augue commodo nec. Nunc interdum dolor.</p>
	</div>

	<div class="span3 portthumb">
		<img src="img/portfolioph.jpg" alt="">
		<h5>Thumbnail label</h5>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum vulputate odio, et sodales augue commodo nec. Nunc interdum dolor.</p>
	</div>

	<div class="span3 portthumb">
		<img src="img/portfolioph.jpg" alt="">
		<h5>Thumbnail label</h5>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum vulputate odio, et sodales augue commodo nec. Nunc interdum dolor.</p>
	</div>


@stop
