@extends('layouts.app')

@include('layouts.meta', [
    'title' => 'Home',
    'description' => 'description',
    'keywords' => 'keywords'
])

@section('content')
	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
				   				<div class="slider-text-inner">
				   					<h1>Not Every Project Needs To Be Perfect</h1>
										<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Demo</a> <a class="btn btn-primary btn-learn">Learn More</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-push-3 slider-text">
				   				<div class="slider-text-inner">
				   					<h1>WordPress Theme For People Who Tell Stories</h1>
										<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Demo</a> <a class="btn btn-primary btn-learn">Learn More</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>What Would You Like To Learn?</h1>
										<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Demo</a> <a class="btn btn-primary btn-learn">Learn More</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-push-3 slider-text">
				   				<div class="slider-text-inner">
				   					<h1>I Love to Tell My Story</h1>
										<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Demo</a> <a class="btn btn-primary btn-learn">Learn More</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-services">
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-diamond"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Brand Identity</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-lab2"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Web Design &amp; UI</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-settings"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Web Development</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-work" class="fh5co-light-grey">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Work</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
                @forelse($works as $work)
                    <div class="col-md-4 text-center animate-box">
                        <a href="work-single.html" class="work"  style="background-image: url(images/portfolio-1.jpg);">
                            <div class="desc">
                                <h3>{{ $work['title'] }}</h3>
                                <span>{{ $work['price'] }}</span>
                            </div>
                        </a>
                    </div>
                @empty
                        <div class="col-md-4 text-center animate-box">
                            <a href="work-single.html" class="work"  style="background-image: url(images/portfolio-1.jpg);">
                                <div class="desc">
                                    <h3>Empty</h3>
                                    <span>Sorry</span>
                                </div>
                            </a>
                        </div>
                 @endforelse
			</div>
		</div>

		<div id="fh5co-counter" class="fh5co-counters">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center animate-box">
					<p>We have a fun facts far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="3452" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Cups of Coffee</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="234" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Client</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="6542" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Projects</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="8687" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Done Projects</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-blog" class="blog-flex">
			<div class="featured-blog" style="background-image: url(/uploads/{{ $main_blog['img'] }});">
				<div class="desc-t">
					<div class="desc-tc">
						<span class="featured-head">{{ $main_blog['title'] }}</span>
						<h3><a href="#">{{ $main_blog['short_text'] }}</a></h3>
						<span><a href="{{ route('more', ['slug' => $main_blog['slug']]) }}" class="read-button">Learn More</a></span>
					</div>
				</div>
			</div>
			<div class="blog-entry fh5co-light-grey">
				<div class="row animate-box">
					<div class="col-md-12">
						<h2>Latest Posts</h2>
					</div>
				</div>
				<div class="row">
                    @foreach($blog as $item)
                        <div class="col-md-12 animate-box">
                            <a href="{{ route('more', ['slug' => $item['slug']]) }}" class="blog-post">
                                <span class="img" style="background-image: url(/uploads/{{ $item['img']  }});"></span>
                                <div class="desc">
                                    <h3>{{ $item['title']  }}</h3>
                                    <span class="cat">More</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
@endsection
