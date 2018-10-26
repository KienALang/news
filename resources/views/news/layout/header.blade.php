<header>
	<div class="logo-wrap">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
					<a href="/">
						<img class="img-fluid" src="/templates/img/logo.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container main-menu" id="main-menu">
		<div class="row align-items-center justify-content-between">
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="/">Home</a></li>
					@foreach ($categories as $index => $item)
						<li><a href="{{ route('category.news', $item->id) }}">{{ $item->name }}</a></li>
					@endforeach
			</ul>
			</nav><!-- #nav-menu-container -->
			<div class="navbar-right">
				<form method="get" class="Search" action="{{ route('news.search') }}">
					<input type="text" class="form-control Search-box" name="key-words" id="Search-box" placeholder="Search">
					<label for="Search-box" class="Search-box-label">
						<span class="lnr lnr-magnifier"></span>
					</label>
					<span class="Search-close">
						<span class="lnr lnr-cross"></span>
					</span>
				</form>
			</div>
		</div>
	</div>
</header>
