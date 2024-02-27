<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  crossorigin="anonymous" />
	<!-- Site Title -->
	<title>Job Connect</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	
	<link rel="stylesheet" href="{{ asset('assets/css/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/css/main.css') }}">
</head>
<style>
	#nav-menu-container {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	
	.nav-menu {
		list-style: none;
		margin: 0;
		padding: 0;
		display: flex;
		flex-direction: row;
	}
	
	.nav-menu li {
		margin-right: 20px;
	}
	
	.burger-menu {
		display: none;
	}
	
	.burger-icon {
		width: 30px;
		height: 20px;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		cursor: pointer;
	}
	
	.line {
		width: 100%;
		height: 3px;
		background-color: black;
		transition: all 0.3s ease;
	}
	
	@media (max-width: 768px) {
		.burger-menu {
			display: block;
		}
	
		.nav-menu {
			display: none;
			flex-direction: column;
			align-items: flex-start;
			padding: 10px;
			background-color: #f9f9f9;
			position: absolute;
			top: 60px;
			left: 0;
			width: 100%;
		}
	
		.nav-menu.active {
			display: flex;
		}
	
		.nav-menu li {
			margin-bottom: 10px;
		}
	
		.responsive-item {
			display: block;
		}
	}
	
	</style>
<body>

	<header id="header" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html" class="text-white"><img src="{{ asset('assets/images/img/logo.png') }}" alt="" title="" />Job Connect</a>
				</div>
				<nav id="nav-menu-container">
					<div class="burger-menu">
						<div class="burger-icon">
							<div class="line"></div>
							<div class="line"></div>
							<div class="line"></div>
						</div>
					</div>
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.html">Home</a></li>
						<li><a href="about-us.html">About Us</a></li>
						<li><a href="blog-home.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
						
						@guest
						<li><a class="ticker-btn" href="{{route('register')}}">Signup</a></li>
						<li><a class="ticker-btn" href="{{route('login')}}">Login</a></li>
						@else
						<li class="responsive-item">
							<a class="ticker-btn bg-warning" href="{{route('profile.index')}}">My Account</a>
						</li>
						<li class="responsive-item">
							<form method="POST" action="{{ route('logout') }}">
								@csrf
								<a href="#" class="dropdown-item bg-warning"
								   onclick="event.preventDefault(); this.closest('form').submit();">
									<i class="ri-logout-box-line fs-18 align-middle me-1"></i>
									<span>Logout</span>
								</a>
							</form>
						</li>
						@endguest
					</ul>
				</nav>
				
				<!-- #nav-menu-container -->
			</div>
		</div>
	</header>


	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						All Jobs
					</h1>
					<p class="text-white link-nav"><a href="index.html">Home </a> <span
							class="lnr lnr-arrow-right"></span> <a href="category.html"> Job category</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start post Area -->
	<section class="post-area section-gap">
		<div class="container">
			<div class="row justify-content-center d-flex">
				<div class="col-lg-8 post-list">
					<div class="single-post d-flex flex-row">
						<div class="thumb">
							<img src="{{ asset('assets/images/img/post.png') }}" alt="">
							<ul class="tags">
								<li>
									<a href="#">Art</a>
								</li>
								<li>
									<a href="#">Media</a>
								</li>
								<li>
									<a href="#">Design</a>
								</li>
							</ul>
						</div>
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									<a href="single.html">
										<h4>Creative Art Designer</h4>
									</a>
									<h6>Premium Labels Limited</h6>
								</div>
								<ul class="btns">

									<li><a href="#">Apply</a></li>
								</ul>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
								ididunt ut dolore magna aliqua.
							</p>
							<h5>Job Nature: Full time</h5>
							<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
							<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
						</div>
					</div>

				</div>
				<div class="col-lg-4 sidebar">
					<div class="single-slidebar">
						<h4>Jobs by Contrat</h4>
						<ul class="cat-list">
							<li><a class="justify-content-between d-flex" href="category.html">
									<p>CDI</p><span>37</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.html">
									<p>CDD</p><span>57</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.html">
									<p>Freelance</p><span>33</span>
								</a></li>
								<li><a class="justify-content-between d-flex" href="category.html">
									<p>Part-Time</p><span>33</span>
								</a></li>
								<li><a class="justify-content-between d-flex" href="category.html">
									<p>Full-Time</p><span>33</span>
								</a></li>
								<li><a class="justify-content-between d-flex" href="category.html">
									<p>Hybrid</p><span>33</span>
								</a></li>
						</ul>
					</div>

					<div class="single-slidebar">
						<h4>Jobs By Education level</h4>
						<ul class="cat-list">
							<li><a class="justify-content-between d-flex" href="category.html">
									<p>Bac</p><span>33</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.html">
									<p>Bac +1</p><span>33</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.html">
									<p>Bac +2</p><span>33</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.html">
									<p>Bac +3</p><span>33</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.html">
									<p>Bac +4</p><span>33</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.html">
									<p>Bac +5</p><span>33</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.html">
									<p>Bac+6 ou plus</p><span>33</span>
								</a></li>
						</ul>
					</div>


				</div>
			</div>
		</div>
	</section>
	<!-- End post Area -->

	<!-- Start callto-action Area -->
	<section class="callto-action-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content col-lg-9">
					<div class="title text-center">
						<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
							exercitation.</p>
						<a class="primary-btn" href="#">I am a Candidate</a>
						<a class="primary-btn" href="#">Request Free Demo</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End calto-action Area -->

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-12">
					<div class="single-footer-widget">
						<h6>Top Products</h6>
						<ul class="footer-nav">
							<li><a href="#">Managed Website</a></li>
							<li><a href="#">Manage Reputation</a></li>
							<li><a href="#">Power Tools</a></li>
							<li><a href="#">Marketing Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6  col-md-12">
					<div class="single-footer-widget newsletter">
						<h6>Newsletter</h6>
						<p>You can trust us. we only send promo offers, not a single spam.</p>
						<div id="mc_embed_signup">
							<form target="_blank" novalidate="true"
								action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								method="get" class="form-inline">

								<div class="form-group row" style="width: 100%">
									<div class="col-lg-8 col-md-12">
										<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
											onblur="this.placeholder = 'Enter Email '" required="" type="email">
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
												type="text">
										</div>
									</div>

									<div class="col-lg-4 col-md-12">
										<button class="nw-btn primary-btn">Subscribe<span
												class="lnr lnr-arrow-right"></span></button>
									</div>
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-12">

				</div>
			</div>

			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is
					made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
						target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="{{ asset('assets/js/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="{{ asset('assets/js/js/vendor/bootstrap.min.js') }}"></script>
	<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{ asset('assets/js/js/easing.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/hoverIntent.js') }}"></script>
	<script src="{{ asset('assets/js/js/superfish.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="j{{ asset('assets/js/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/parallax.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/mail-script.js') }}"></script>
	<script src="{{ asset('assets/js/js/main.js') }}"></script>
</body>

</html>