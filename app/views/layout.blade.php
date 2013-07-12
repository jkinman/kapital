<html>
	<head>

		{{ HTML::style('theme_hubble/css/bootstrap.css') }}
		{{ HTML::style('theme_hubble/css/responsive.css') }}
		{{ HTML::style('theme_hubble/css/animate.css') }}
		{{ HTML::style('theme_hubble/css/custom.css') }}
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>

	</head>
	<body>

		<div class="navbar  animated fadeIn">
		  <div class="navbar-inner">
			<div class="container">
			  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </a>
			  <a class="brand" href="index.htm"><img src="img/logo.png" alt="your slogan here"></a>
			  <div class="nav-collapse in" style="height:auto;">
				<ul class="nav">
				  <li><a href="index.htm">Kapital</a></li>
				  <li><a href="portfolio.htm">Artists</a></li>
				  <li><a href="portfolio.htm">Schedule</a></li>
				  <li><a href="pricing.htm">Blog</a></li>
				  <li><a href="about.htm">Media</a></li>
				  <li><a href="contact.htm">Contact</a></li>
				</ul>
			  </div><!--/.nav-collapse -->
			</div>
		  </div>
		</div>
		<h1>layout</h1>
	    <div class="container">

			@yield('content')

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
        </div>
<!-- FOOTER -->
      <footer>
        <div class="container">
        <div class="row">
          <div class="span3">
            <div id="jstwitter">
              <h3>Twitter Feed</h3> 
            </div>
          </div>
          <div class="span3">
            <h3>Latest Blog Posts</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit nisl ac metus porta placerat. Donec semper consectetur neque eget hendrerit. <a href="http://www.littlesparkvt.com">Read More></a></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit nisl ac metus porta placerat. Donec semper consectetur neque eget hendrerit. <a href="http://www.littlesparkvt.com">Read More></a></p>
          </div>
          <div class="span3">
            <h3>Contact Us!</h3>
                <p>Have a question or comment? We can help you!</p>
                <br>by phone: 1-(555)-555-5555 
                <br>by mail: info@littlesparkvt.com
                <br>or by our: <a href="contact.htm">Contact Page</a>
          </div>
          <div class="span3">
            <h3>Newsletter</h3>
            <p>Subscribe to our newsletter and get the latest news!</p>
            <form action="mail.php" id="subscribe-form" method="post">
              <input type="text" name="email" id="email" placeholder="Your Email Address">
              <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
      </footer>


<!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    {{ HTML::script("theme_hubble/js/jquery.js") }}
    {{ HTML::script("theme_hubble/js/bootstrap-transition.js" ) }}
    {{ HTML::script("theme_hubble/js/bootstrap-alert.js") }}
    {{ HTML::script("theme_hubble/js/bootstrap-modal.js") }}
    {{ HTML::script("theme_hubble/js/bootstrap-dropdown.js") }}
    {{ HTML::script("theme_hubble/js/bootstrap-scrollspy.js") }}
    {{ HTML::script("theme_hubble/js/bootstrap-tab.js") }}
    {{ HTML::script("theme_hubble/js/bootstrap-tooltip.js") }}
    {{ HTML::script("theme_hubble/js/bootstrap-popover.js") }}
    {{ HTML::script("theme_hubble/js/bootstrap-button.js") }}
    {{ HTML::script("theme_hubble/js/bootstrap-collapse.js") }}
    {{ HTML::script("theme_hubble/js/bootstrap-carousel.js") }}
    {{ HTML::script("theme_hubble/js/bootstrap-typeahead.js") }}
    {{ HTML::script("theme_hubble/js/anchor.js") }}
    {{ HTML::script("theme_hubble/js/twitter.js") }}
	</body>
</html>