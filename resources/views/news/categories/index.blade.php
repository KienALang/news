@extends('news.layout.master')
@section('title')
	Category
@stop
@section('content')
	
	<!-- Start latest-post Area -->
	<section class="latest-post-area pb-120">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start latest-post Area -->
					<div class="latest-post-wrap">
						<h4 class="cat-title">Latest News</h4>
						@foreach($allNewsOfCategory as $news)
							<div class="single-latest-post row align-items-center">
								<div class="col-lg-5 post-left">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="{{ $news-> path }}" alt="">
									</div>
									<ul class="tags">
										<li><a href="#">{{ $news->title }}</a></li>
									</ul>
								</div>
								<div class="col-lg-7 post-right">
									<a href="{{ route('news.detail', $news->id) }}">
										<h4>{{ $news->title }}</h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $news->created_at }}</li>
									</ul>
									<p class="excert">{{ str_limit($news->preview, 70) }}</p>
								</div>
							</div>
						@endforeach
						<div class="load-more">
							<a href="#" class="primary-btn">{{ $allNewsOfCategory->links() }}</a>
						</div>
						
					</div>
					<!-- End latest-post Area -->
				</div>
				@include('news.layout.rightbar')
			</div>
		</div>
	</section>
	<!-- End latest-post Area -->
@stop