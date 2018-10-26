<div class="col-lg-4">
	<div class="sidebars-area">
		<div class="single-sidebar-widget editors-pick-widget">
			<h6 class="title">Most Popular</h6>
			<div class="editors-pick-post">
				<div class="feature-img-wrap relative">
					<div class="feature-img relative">
						<div class="overlay overlay-bg"></div>
						<img class="img-fluid" src="{{ $newsPopulars->first()->path }}" alt="">
					</div>
					<ul class="tags">
						<li><a href="{{ route('news.detail', $newsPopulars->first()->id) }}">{{ $newsPopulars->first()->title }}</a></li>
					</ul>
				</div>
				<div class="details">

					<a href="{{ route('news.detail', $newsPopulars->first()->id) }}">
						<h4 class="mt-20"><a href="#">{{ $newsPopulars->first()->title }}</a></h4>
					</a>
					<ul class="meta">
						<li><a href="{{ route('news.detail', $newsPopulars->first()->id) }}"><span class="lnr lnr-calendar-full"></span>{{ $newsPopulars->first()->created_at }}</a></li>
					</ul>
					<p class="excert">{{ str_limit($newsPopulars->first()->preview, 40) }}</p>
				</div>
				<div class="post-lists">
					@foreach($newsPopulars as $news)
						<div class="single-post d-flex flex-row">
							<div class="thumb">
								<img src="{{ $news->path }}" alt="" style="width: 100px; height: auto">
							</div>
							<div class="detail">
								<a href="{{ route('news.detail', $news->id) }}"><h6>{{ $news->title }}</h6></a>
								<ul class="meta">
									<li><a href="{{ route('news.detail', $news->id) }}"><span class="lnr lnr-calendar-full"></span>{{ $news->created_at }}</a></li>
								</ul>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
