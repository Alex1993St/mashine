@extends('layouts.app')
@section('content')
	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
				   				<div class="slider-text-inner text-center">
				   					<h1>Blog</h1>
										<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-blog">
			<div class="row">
                @forelse ($blog as $item)
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="{{ route('more', ['id' => $item->slug]) }}" class="blog-bg" style="background-image: url(uploads/{{ $item->img }});"></a>
						<div class="blog-text">
							<span class="posted_on">{{ $item->updated_at }}</span>
							<h3><a href="{{ route('more', ['id' => $item->slug]) }}">{{ $item->title }}</a></h3>
							<p>{{ $item->short_text }}</p>
						</div>
					</div>
				</div>
                @empty
                    <div class="col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#" class="blog-bg" style="background-image: url(images/blog-1.jpg);"></a>
                            <div class="blog-text">
                                <span class="posted_on">Empty</span>
                            </div>
                        </div>
                    </div>
                @endforelse
			</div>
		</div>
	</div>
@endsection
