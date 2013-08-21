@extends('layout')

@section('content')
    <h1>Kapital Entertainment</h1>
    <?//php echo( $users) ;?>

    	  <!-- Main hero unit for a primary marketing message or call to action -->
	  <div class="row">
		<div class="span12 hidden-phone">
		  <div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item">
				<img src="img/front1.jpg" alt="">
			  </div>
			  <div class="item">
				<img src="img/front2.jpg" alt="">
			  </div>
			  <div class="item active">
				<img src="img/front3.jpg" alt="">
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
		  <h3>Section one</h3>
		  <p>Kapital does all this shit and blah blah blah blah blah blah blah blah. Katy Katy Katy.</p>
		</div>
		<div class="span1">
		  <img src="img/icon-custom.png">
		</div>
		<div class="span3">
		  <h3>Section Two</h3>
		  Food truck Pinterest 3 wolf moon yr chillwave. Etsy sriracha flannel disrupt, keffiyeh blue bottle messenger bag four loko meggings salvia +1 pour-over yr. You probably haven't heard of them art party trust fund keffiyeh Bushwick mlkshk, Schlitz whatever biodiesel food truck seitan gluten-free.</p>
		</div>
		<div class="span1">
		  <img src="img/icon-support.png">
		</div>
		<div class="span3">
		  <h3>Section Three</h3>
		  <p>Skateboard Etsy post-ironic photo booth dreamcatcher blue bottle fanny pack keytar. Locavore Tonx shoreditch food truck iPhone Austin, DIY gentrify. Odd Future synth organic, gentrify pickled tote bag tofu.</p>
		</div>
	</div>

@stop