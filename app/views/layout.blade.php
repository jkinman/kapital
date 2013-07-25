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
			  <a class="brand" href="index"><img src="img/logo.png" alt="your slogan here"></a>
			  <h1 class="brand">Kapital Entertainment</h1>
			  <div class="nav-collapse in" style="height:auto;">
				<ul class="nav">
					<li><a href="index">Kapital</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-labelledby="dLabel">Artists <i class="caret"></i></a>
						<ul class="dropdown-menu" >
							<li><a tabindex="-1" href="#">Miss Virginia Rose</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li><a tabindex="-1" href="#">Conroy Ross</a></li>
							<li class="divider"></li>
							<li><a tabindex="-1" href="#">artist page</a></li>
						</ul>
					</li>
					<li><a href="portfolio.htm">Schedule</a></li>
					<li><a href="blog.htm">Blog</a></li>
					<li><a href="about.htm">Media</a></li>
					<li><a href="contact.htm">Contact</a></li>
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