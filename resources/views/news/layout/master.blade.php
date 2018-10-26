<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="/templates/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>@yield('title', 'News')</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <base href="{{ asset('') }}">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="/templates/css/linearicons.css">
		<link rel="stylesheet" href="/templates/css/font-awesome.min.css">
		<link rel="stylesheet" href="/templates/css/bootstrap.css">
		<link rel="stylesheet" href="/templates/css/magnific-popup.css">
		<link rel="stylesheet" href="/templates/css/nice-select.css">
		<link rel="stylesheet" href="/templates/css/animate.min.css">
		<link rel="stylesheet" href="/templates/css/owl.carousel.css">
		<link rel="stylesheet" href="/templates/css/jquery-ui.css">
		<link rel="stylesheet" href="/templates/css/main.css">
	</head>
	<body>
		@include('news.layout.header')
		<div class="site-main-container">
			@yield('content')
		</div>
		@include('news.layout.footer')
		<script src="/templates/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper./templates/js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="/templates/js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="/templates/js/easing.min.js"></script>
		<script src="/templates/js/hoverIntent.js"></script>
		<script src="/templates/js/superfish.min.js"></script>
		<script src="/templates/js/jquery.ajaxchimp.min.js"></script>
		<script src="/templates/js/jquery.magnific-popup.min.js"></script>
		<script src="/templates/js/mn-accordion.js"></script>
		<script src="/templates/js/jquery-ui.js"></script>
		<script src="/templates/js/jquery.nice-select.min.js"></script>
		<script src="/templates/js/owl.carousel.min.js"></script>
		<script src="/templates/js/mail-script.js"></script>
		<script src="/templates/js/main.js"></script>
	</body>
</html>
