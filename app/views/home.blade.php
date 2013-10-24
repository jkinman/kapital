@extends('layout')

@section('content')
    <h1>Kapital Entertainment</h1>
    <?//php echo( $users) ;?>

    	  <!-- Main hero unit for a primary marketing message or call to action -->
	  <div class="row">
		<div class="span12 hidden-phone">
		  <div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				@foreach( $assets as $asset )
				  <div class="item">
					<img src="{{{$asset->url . '/convert?w=1280&h=400&fit=crop'}}}" alt="">
				  </div>
				@endforeach
<!-- 			  <div class="item">
				<img src="img/front2.jpg" alt="">
			  </div>
			  <div class="item active">
				<img src="img/front3.jpg" alt="">
			  </div>
 --><!-- 			  <div class="item">
				<img src="img/front1.jpg" alt="">
			  </div>
 -->			</div>
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
		  <h3>Management</h3>
		  <p>Kapital Entertainment provides management services to local Vancouver singer / songwriters that are looking to further their music careers to a higher level of exposure and experience. We provide the tools to help in the process of bookings, recordings, press, social media assistance and overall development of the artists craft. Contact us for more detailed information on becoming a part of the Kapital roster.
		</div>
		<div class="span1">
		  <img src="img/icon-custom.png">
		</div>
		<div class="span3">
		  <h3>Booking</h3>
		  <p>Kapital Entertainment provides it’s rosters acts and other local talent from around the city with live music shows on Vancouver’s best stages. Branching from smaller pubs to clubs on the Granville strip and the downtown core, Kapital strives to secure booking opportunities that showcases the act’s talent in the best possible spaces to the best possible crowds. For information regarding how you can become a part of a Kapital Entertainment booking around town, contact us.</p>
		</div>
		<div class="span1">
		  <img src="img/icon-support.png">
		</div>
		<div class="span3">
		  <h3>Hosting</h3>
		  <p>Kapital Entertainment now offers hosting opportunities. Owner/President, Kate Dunn-Roy commits time to building full live music bills for venues around town using acts from the Kapital roster and acts around town to create live music events for the masses. Some past successes have included shows at Vancouver FanClub, Joe’s Apartment, The Railway Club, The Backstage Lounge, and the Media Club. Only the most reputable venues are used in the building of shows for Kapital acts, because only the best venues are worth putting a Kapital act on stage for. All shows are built with 110% commitment to being successful in the eyes of the artists, attendees and venue’s staff. All shows also commit to bringing a level of talent from outside the Kapital roster that not only compliments but elevates the level of talent seen on our roster. Contact us for questions/concerns in regard to Kapital Entertainment hosting a live music event for you or your venue.</p>
		</div>
	</div>

@stop