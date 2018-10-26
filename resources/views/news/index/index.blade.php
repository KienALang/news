@extends('news.layout.master')
@section('title')
	Home
@stop
@section('content')
<!-- Start top-post Area -->
	<section class="top-post-area pt-10">
		<div class="container no-padding">

            @if(isset($isSearchView))
            <div class="col-lg-12">
                <!-- Start latest-post Area -->
                <section class="latest-post-area pb-120">
                    <!-- Start latest-post Area -->
                    <div class="latest-post-wrap">
                        <h4 class="cat-title">Searching Result:</h4>
                        @foreach ( $news as $n )
                        <div class="single-latest-post row align-items-center">
                            <div class="col-lg-5 post-left">
                                <div class="feature-img relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{$n->path}}" alt="">
                                </div>
                                <ul class="tags">
                                    <li><a href="#">{{ $n->category->name }}</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-7 post-right">
                                <a href="{{ route('news.detail', $n->id) }}">
                                    <h4>{{$n->title}}</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $n->created_at }}</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                </ul>
                                <p class="excert">
                                    {{ $n->preview }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @if(sizeof($news) == 0)
                        <p>Result not found</p>
                        @endif
                    </div>
                    <!-- End latest-post Area -->
                </section>
            </div>
            @endif
            @if(!isset($isSearchView))
			<div class="row small-gutters">
				@php
					$itemNew1 = $listNews[0];
					$itemNew2 = $listNews[1];
					$itemNew3 = $listNews[2];
				@endphp
				<div class="col-lg-8 top-post-left">
					<div class="feature-image-thumb relative">
						<div class="overlay overlay-bg"></div>
						<img class="img-fluid" src="{{ $itemNew1->path }}" alt="">
					</div>
					<div class="top-post-details">
						<ul class="tags">
							<li><a href="#">{{ $itemNew1->name }}</a></li>
						</ul>
						<a href="{{ route('news.detail', $itemNew1->id) }}">
							<h3>{{ $itemNew1->title }}</h3>
						</a>
						<ul class="meta">
							<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $itemNew1->created_at }}</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 top-post-right">
					<div class="single-top-post">
						<div class="feature-image-thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="{{ $itemNew2->path }}" alt="">
						</div>
						<div class="top-post-details">
							<ul class="tags">
								<li><a href="#">{{ $itemNew2->name }}</a></li>
							</ul>
							<a href="{{ route('news.detail', $itemNew2->id) }}">
								<h4>{{ $itemNew2->title }}</h4>
							</a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $itemNew2->created_at }}</a></li>
							</ul>
						</div>
					</div>
					<div class="single-top-post mt-10">
						<div class="feature-image-thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="{{ $itemNew3->path }}" alt="">
						</div>
						<div class="top-post-details">
							<ul class="tags">
								<li><a href="#">{{ $itemNew3->name }}</a></li>
							</ul>
							<a href="{{ route('news.detail', $itemNew3->id) }}">
								<h4>{{ $itemNew3->title }}</h4>
							</a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $itemNew3->created_at }}</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
            @endif
		</div>
	</section>
	<!-- End top-post Area -->
    @if(!isset($isSearchView))
	<!-- Start latest-post Area -->
	<section class="latest-post-area pb-120">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start latest-post Area -->
					<div class="latest-post-wrap">
						<h4 class="cat-title">Latest News</h4>
						@foreach ($latestNews as $item)
						<div class="single-latest-post row align-items-center">
							<div class="col-lg-5 post-left">
								<div class="feature-img relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="{{ $item->path }}" alt="">
								</div>
								<ul class="tags">
									<li><a href="#">{{ $item->name }}</a></li>
								</ul>
							</div>
							<div class="col-lg-7 post-right">
								<a href="{{ route('news.detail', $item->id) }}">
									<h4>{{ $item->title }}</h4>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $item->created_at }}</a></li>
								</ul>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
								</p>
							</div>
						</div>
						@endforeach
					</div>
					<!-- End latest-post Area -->

					<!-- Start banner-ads Area -->
					<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
						<img class="img-fluid" src="/templates/img/banner-ad.jpg" alt="">
					</div>
					<!-- End banner-ads Area -->
					<!-- Start popular-post Area -->
					<div class="popular-post-wrap">
						<h4 class="title">Popular Posts</h4>
						<div class="feature-post relative">
							<div class="feature-img relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="{{ $itemNew1->path }}" alt="">
							</div>
							<div class="details">
								<ul class="tags">
									<li><a href="#">{{ $itemNew1->name }}</a></li>
								</ul>
								<a href="{{ route('news.detail', $itemNew1->id) }}">
									<h3>{{ $itemNew1->title }}</h3>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $itemNew1->created_at }}</a></li>
								</ul>
							</div>
						</div>
						<div class="row mt-20 medium-gutters">
							<div class="col-lg-6 single-popular-post">
								<div class="feature-img-wrap relative">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="{{ $itemNew2->path }}" alt="">
									</div>
									<ul class="tags">
										<li><a href="#">{{ $itemNew2->name }}</a></li>
									</ul>
								</div>
								<div class="details">
									<a href="{{ route('news.detail', $itemNew2->id) }}">
										<h4>{{ $itemNew2->title }}</h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $itemNew2->created_at }}</a></li>
									</ul>
									<p class="excert">
										{{ $itemNew2->preview }}
									</p>
								</div>
							</div>
							<div class="col-lg-6 single-popular-post">
								<div class="feature-img-wrap relative">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="{{ $itemNew3->path }}" alt="">
									</div>
									<ul class="tags">
										<li><a href="#">{{ $itemNew3->name }}</a></li>
									</ul>
								</div>
								<div class="details">
									<a href="{{ route('news.detail', $itemNew3->id) }}">
										<h4>{{ $itemNew3->title }}</h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $itemNew3->created_at }}</a></li>
									</ul>
									<p class="excert">
										{{ $itemNew3->preview }}
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End popular-post Area -->
					<!-- Start relavent-story-post Area -->
					<div class="relavent-story-post-wrap mt-30">
						<h4 class="title">Relavent Stories</h4>
						<div class="relavent-story-list-wrap">
							<div class="single-relavent-post row align-items-center">
								<div class="col-lg-5 post-left">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="{{ $itemNew1->path }}" alt="">
									</div>
									<ul class="tags">
										<li><a href="#">{{ $itemNew1->name }}</a></li>
									</ul>
								</div>
								<div class="col-lg-7 post-right">
									<a href="{{ route('news.detail', $itemNew1->id) }}">
										<h4>{{ $itemNew1->title }}</h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $itemNew1->created_at }} </a></li>
									</ul>
									<p class="excert">
										{{ $itemNew1->preview }}
									</p>
								</div>
							</div>
							<div class="single-relavent-post row align-items-center">
								<div class="col-lg-5 post-left">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="{{ $itemNew2->path }}" alt="">
									</div>
									<ul class="tags">
										<li><a href="#">{{ $itemNew2->name }}</a></li>
									</ul>
								</div>
								<div class="col-lg-7 post-right">
									<a href="{{ route('news.detail', $itemNew2->id) }}">
										<h4>{{ $itemNew2->title }}</h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $itemNew2->created_at }}</a></li>
									</ul>
									<p class="excert">
										{{ $itemNew2->preview }}
									</p>
								</div>
							</div>
							<div class="single-relavent-post row align-items-center">
								<div class="col-lg-5 post-left">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="{{ $itemNew3->path }}" alt="">
									</div>
									<ul class="tags">
										<li><a href="#">{{ $itemNew3->name }}</a></li>
									</ul>
								</div>
								<div class="col-lg-7 post-right">
									<a href="{{ route('news.detail', $itemNew3->id) }}">
										<h4>{{ $itemNew3->title }}</h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $itemNew3->created_at }}</a></li>
									</ul>
									<p class="excert">
										{{ $itemNew3->preview }}
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End relavent-story-post Area -->
				</div>
				@include('news.layout.rightbar')
			</div>
		</div>
	</section>
	<!-- End latest-post Area -->
    @endif
@stop
