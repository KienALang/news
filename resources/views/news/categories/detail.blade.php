@extends('news.layout.master')
@section('title')
	Details
@stop
@section('content')
	<!-- Start top-post Area -->
		<!-- End top-post Area -->
		<!-- Start latest-post Area -->
		<section class="latest-post-area pb-120">
			<div class="container no-padding">
				<div class="row">
					<div class="col-lg-8 post-list">
						<!-- Start single-post Area -->
						<div class="single-post-wrap">
							<div class="feature-img-thumb relative">
								<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="{{ $news->path }}" alt="">
							</div>
							<div class="content-wrap">
								<ul class="tags mt-10">
									<li><a href="#">{{ $news->title }}</a></li>
								</ul>
								<a href="#">
									<h3>{{ $news->preview}}</h3>
								</a>
								<ul class="meta pb-20">
									<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
									<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $news->created_at}}</a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
								</ul>
								<p>
									{{$news->detail}}. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus.
								</p>
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</blockquote>

						</div>
						<div class="comment-form">
							<h4>Post Comment</h4>
							<form>
								<div class="form-group form-inline">
									<div class="form-group col-lg-6 col-md-12 name">
										<input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
									</div>
									<div class="form-group col-lg-6 col-md-12 email">
										<input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
								</div>
								<div class="form-group">
									<textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
								</div>
								<a href="#" class="primary-btn text-uppercase">Post Comment</a>
							</form>
						</div>
					</div>
					<!-- End single-post Area -->
				</div>
				@include('news.layout.rightbar')
			</div>
		</div>
	</section>
	<!-- End latest-post Area -->
@stop
