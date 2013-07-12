@extends('layout')

@section('content')
    <h1>Kapital Entertainmant</h1>
    <?php echo( $users) ;?>

    	  <!-- Main hero unit for a primary marketing message or call to action -->
	  <div class="row">
		<div class="span12 hidden-phone">
		  <div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item">
				<img src="img/slide1.jpg" alt="">
			  </div>
			  <div class="item">
				<img src="img/slide2.jpg" alt="">
			  </div>
			  <div class="item active">
				<img src="img/slide3.jpg" alt="">
			  </div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
		  </div>
		</div>
		
	 </div>
	 <!-- <div class="row landingSlogan">
		<div class="span12">
		  <h2>Put your slogan here. This is the perfect place to put some eye catching text. It is also great for SEO!</h2>
		</div>
	 </div> -->
	  <!-- Portfolio row of columns -->
	  <div class="row">
	   <div class="span1">
		  <img src="img/icon-response.png">
	   </div>
	   <div class="span3">
		  <h3>Responsive Grid Layout</h3>
		  <p>No matter what screen you are viewing this template on it will adjust. You can add videos, images and forms, they are all responsive.</p>
		</div>
		<div class="span1">
		  <img src="img/icon-custom.png">
		</div>
		<div class="span3">
		  <h3>Customization</h3>
		  <p>It's a breeze to customize anything on this template. We made the code clean and simple so you can tweak to your hearts content.</p>
		</div>
		<div class="span1">
		  <img src="img/icon-support.png">
		</div>
		<div class="span3">
		  <h3>Continued Support</h3>
		  <p>We are here for you. Have a question? Go ahead and ask us and we will help you find the answer.</p>
		</div>
	</div>

@stop