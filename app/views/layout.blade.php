<html>
	<head>

		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/responsive.css') }}
		{{ HTML::style('css/animate.css') }}
		{{ HTML::style('css/custom.css') }}
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="//api.filepicker.io/v1/filepicker.js"></script>
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
			  <a class="brand" href="home"><img src="/img/kapitalLogo.jpg" alt="your slogan here"></a>
			  <!-- <h1 class="brand">Kapital Entertainment</h1> -->
			  <div class="nav-collapse in" style="height:auto;">
				<ul class="nav">
					<li><a href="home">Kapital</a></li>
				<!--	<li class="dropdown"> -->
						<li><a href="/artists" >Artists</a></li>
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
					<li><a href="/">Schedule</a></li>
					<li><a href="/blog">Blog</a></li>
					<li><a href="/asset">Media</a></li>
					<!-- only show if youre authenticated -->
					@if( Auth::check())
					<li class="dropdown">
						<a href="#" data-toggle="dropdown">Admin Menu<span class="glyphicon glyphicon-align-justify"></span></a>
						<ul class="dropdown-menu" >
							<li><a tabindex="-1" href="/blog/create">Post Update</a></li>
							<li><a tabindex="-1" href="/asset/create">Add Pic / Link / Video</a></li>
							<!-- only show if youre katy -->
							@if( $currentUser->admin )
							<li class="divider"></li>
							<li><a tabindex="-1" href="/user/create">Add new user</a></li>
							<li><a tabindex="-1" href="/artist/create">Add new band</a></li>
							@endif
							<li class="divider"></li>
							<li><a href="/user">Users</a></li>
							<li><a tabindex="-1" href="/user/logout">logout</a></li>
						</ul>
					</li>
					@else
						<li><a href="/superSecretLogin">login</a></li>
					@endif
				
					<!-- <li><a href="contact.htm">Contact</a></li> -->
				</ul>
			  </div><!--/.nav-collapse -->
			</div>
		  </div>
		</div>
		<div class="container">
			<div class="row">
				@if ( isset( $flash ))
					<h2>{{{ $flash }}}</h2>
				@endif

				<!-- TEMPLATE CONTENT INSERTED HERE -->
				@yield('content')

				<div class="span2 well">
					<h2>Latest Posts</h2>
					<ul class="unstyled">
						@foreach( $blogs as $blog )
							<a href="#">{{  $blog->title }}</a>
						@endforeach
					</ul>
				</div>
			</div>
		</div>

<!-- FOOTER -->
	  <footer>
		<div class="container">
		<div class="row">
		  <div class="span3">
			<div id="jstwitter">
			  <h3><a href="https://twitter.com/katedunnroy">Twitter Feed</a></h3>
			</div>
		  </div>
		  <div class="span3">
			<h3>Latest Blog Posts</h3>
			@if( !empty( $blogs[0] ))
				<p>{{{ $blogs[0]->body }}}</p>
			@endif
			@if( !empty( $blogs[1] ))
				<p>{{{ $blogs[1]->body }}}</p>
			@endif
		  </div>
		  <div class="span3">
			<h3>Contact Kapial</h3>
				<p>Make music? Need music? Wanna chat? Get at us.</p>
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

	{{ HTML::script("js/kapital.js")}}
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