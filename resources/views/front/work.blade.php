@extends('layouts.app')
@section('content')
	<div class="fh5co-loader"></div>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.blade.php">Neat</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="index.blade.php">Home</a></li>
							<li class="active"><a href="work.blade.php">Work</a></li>
							<li class="has-dropdown">
								<a href="blog.blade.php">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<li><a href="about.blade.php">About</a></li>
							<li><a href="contact.blade.php">Contact</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</nav>
	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay-gradient"></div>
		   			<div class="row">
			   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
			   				<div class="slider-text-inner text-center">
			   					<h1>Work</h1>
									<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-work">
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url(images/portfolio-1.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url(images/portfolio-2.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Brading</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url(images/portfolio-3.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url(images/portfolio-4.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url(images/portfolio-5.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Brading</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url(images/portfolio-6.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
@endsection()
	{{--<div class="gototop js-top">--}}
		{{--<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>--}}
	{{--</div>--}}

	{{--<!-- jQuery -->--}}
	{{--<script src="js/jquery.min.js"></script>--}}
	{{--<!-- jQuery Easing -->--}}
	{{--<script src="js/jquery.easing.1.3.js"></script>--}}
	{{--<!-- Bootstrap -->--}}
	{{--<script src="js/bootstrap.min.js"></script>--}}
	{{--<!-- Waypoints -->--}}
	{{--<script src="js/jquery.waypoints.min.js"></script>--}}
	{{--<!-- Flexslider -->--}}
	{{--<script src="js/jquery.flexslider-min.js"></script>--}}
	{{--<!-- Magnific Popup -->--}}
	{{--<script src="js/jquery.magnific-popup.min.js"></script>--}}
	{{--<script src="js/magnific-popup-options.js"></script>--}}
	{{--<!-- Counters -->--}}
	{{--<script src="js/jquery.countTo.js"></script>--}}
	{{--<!-- Main -->--}}
	{{--<script src="js/main.js"></script>--}}

	{{--</body>--}}
{{--</html>--}}

