<html>
	<head>

		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/responsive.css') }}
		{{ HTML::style('css/animate.css') }}
		{{ HTML::style('css/custom.css') }}
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>

	</head>
	<body>

		<div class="navbar nav-pills nav-right">
		  <div class="navbar-inner">
			<div class="container">
			  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </a>
			  <a class="brand" href="home"><img src="img/kapitalLogo.jpg" alt="your slogan here"></a>
			  <h1 class="brand">Kapital Entertainment</h1>
			  <div class="nav-collapse in" style="height:auto;">
				<ul class="nav">
					<li><a href="home">Kapital</a></li>
				<!--	<li class="dropdown"> -->
						<li><a href="artists" >Artists</a></li>
				<!--		<ul class="dropdown-menu" >
							<li><a tabindex="-1" href="#">Miss Virginia Rose</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li class="divider"></li>
							<li><a tabindex="-1" href="artists">artist page</a></li>
						</ul>
					</li>
				-->
					<li><a href="portfolio.htm">Schedule</a></li>
					<li><a href="blogs">Blog</a></li>
					<li><a href="about.htm">Media</a></li>
					<!-- <li><a href="contact.htm">Contact</a></li> -->
				</ul>
			  </div><!--/.nav-collapse -->
			</div>
		  </div>
		</div>
		<div class="container">

			@yield('content')

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
			<h3>Contact Kapial</h3>
				<p>Make music or want music? wanna chat? Get at us.</p>
				<br><a href='tel:1-604-808-7110'>+1-604-808-7110</a> 
				<br><a href='mailto:kate@kapitalentertainment.ca'>kate@kapitalentertainment.ca</a>
		  </div>
		  <div class="span3">
			<h3>Get on the list</h3>
			<p>Subscribe to our newsletter and get the scoop on events.</p>
			<form action="mail.php" id="subscribe-form" method="post">
			  <input type="text" name="email" id="email" placeholder="Your Email Address">
			  <button type="submit" class="button">Sign Up</button>
			</form>
		  </div>
		</div>
	  </div>
	  </footer>


<!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	{{ HTML::script("js/jquery.js") }}
	{{ HTML::script("js/bootstrap-transition.js" ) }}
	{{ HTML::script("js/bootstrap-alert.js") }}
	{{ HTML::script("js/bootstrap-modal.js") }}
	{{ HTML::script("js/bootstrap-dropdown.js") }}
	{{ HTML::script("js/bootstrap-scrollspy.js") }}
	{{ HTML::script("js/bootstrap-tab.js") }}
	{{ HTML::script("js/bootstrap-tooltip.js") }}
	{{ HTML::script("js/bootstrap-popover.js") }}
	{{ HTML::script("js/bootstrap-button.js") }}
	{{ HTML::script("js/bootstrap-collapse.js") }}
	{{ HTML::script("js/bootstrap-carousel.js") }}
	{{ HTML::script("js/bootstrap-typeahead.js") }}
	{{ HTML::script("js/anchor.js") }}
	{{ HTML::script("js/twitter.js") }}
	</body>
</html>