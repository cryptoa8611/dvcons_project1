<!DOCTYPE HTML>
<html lang="vi">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="@yield('title')" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="@yield('title')" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="/frontend/images/android-icon-48x48.png">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('/frontend/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('/frontend/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('/frontend/css/bootstrap.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('/frontend/css/flexslider.css')}}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('/frontend/fonts/flaticon/font/flaticon.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('/frontend/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('/frontend/css/owl.theme.default.min.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('/frontend/css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

	<!-- Modernizr JS -->
	<script src="{{asset('/frontend/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div id="dvcons-page">
		<a href="#" class="js-dvcons-nav-toggle dvcons-nav-toggle"><i></i></a>
		<aside id="dvcons-aside" role="complementary" class="border js-fullheight">
			<a href="/" id="dvcons-logo"><img width="140px" src="/frontend/images/logo-dvcons.png" alt="Dvcons"></a>
			<nav id="dvcons-main-menu" role="navigation">
				<ul>
					<li class="{{ request()->is('trang-chu') ? 'dvcons-active' : ''}}"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
					<li class="{{ request()->is('gioi-thieu') ? 'dvcons-active' : ''}}"><a href="{{URL::to('/gioi-thieu')}}">Giới thiệu</a></li>
					<li class="{{ request()->is('dich-vu') ? 'dvcons-active' : ''}}"><a href="/dich-vu">Dịch vụ</a></li>
					<li class="{{ request()->is('san-pham') ? 'dvcons-active' : ''}}"><a href="/san-pham">Sản phẩm</a></li>
					<li class="{{ request()->is('dao-tao') ? 'dvcons-active' : ''}}"><a href="/dao-tao">Đào tạo</a></li>
					<li class="{{ request()->is('du-an') ? 'dvcons-active' : ''}}"><a href="/du-an">Dự án</a></li>
					<li class="{{ request()->is('tuyen-dung') ? 'dvcons-active' : ''}}"><a href="/tuyen-dung">Tuyển dụng</a></li>
					<li class="{{ request()->is('lien-he') ? 'dvcons-active' : ''}}"><a href="/lien-he">Liên hệ</a></li>
				</ul>
			</nav>

			<div class="dvcons-footer">
				<p><small><span>Hotline tư vấn 1: <a href="#"
								target="_blank">0909.888.999</a></span></small>
					<small><span>Hotline tư vấn 2: <a href="#"
								target="_blank">0908.888.999</a></span></small>
								<small><span>Email: <a href="#"
									target="_blank">info@dvcons.vn</a></span></small>

				</p>
				<ul>
					<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
				</ul>
			</div>

		</aside>
		<div id="dvcons-main">

			@yield('content')
			
			<div id="get-in-touch" class="dvcons-bg-green-color">
				<div class="dvcons-narrow-content">
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<h2>Get in Touch!</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="dvcons-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="#" class="btn btn-primary btn-learn">Contact me!</a></p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="{{asset('/frontend/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('/frontend/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('/frontend/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('/frontend/js/jquery.flexslider-min.js')}}"></script>
	<!-- Sticky Kit -->
	<script src="{{asset('/frontend/js/sticky-kit.min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{asset('/frontend/js/owl.carousel.min.js')}}"></script>
	<!-- Counters -->
	<script src="{{asset('/frontend/js/jquery.countTo.js')}}"></script>


	<!-- MAIN JS -->
	<script src="{{asset('/frontend/js/main.js')}}"></script>

</body>

</html>