@extends('layouts.app')

@include('layouts.meta', [
    'title' => 'Work',
    'description' => 'description',
    'keywords' => 'keywords'
])

@section('content')
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

