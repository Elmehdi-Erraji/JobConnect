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
						<li class="menu-active"><a href="{{route('home')}}">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						
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
<!-- #header -->


	<!-- start banner Area -->
	<section class="banner-area relative style="background: url('{{ asset('assets/images/img/header-bg.jpg') }}') center; background-size: cover;" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-12">
					<h1 class="text-white">
						<span>1100+</span> Jobs posted last week
					</h1>
					<form action="search.html" class="serach-form-area">
						<div class="row justify-content-center form-wrap">
							<div class="col-lg-4 form-cols">
								<input type="text" class="form-control" name="search"
									placeholder="what are you looging for?">
							</div>
							
							<div class="col-lg-3 form-cols">
								<div class="default-select" id="default-selects2">
									<select>
										@foreach ($categories as $category)
											<option value="{{ $category->id }}">{{ $category->name }}</option>
										@endforeach				
									</select>
								</div>
							</div>
							<div class="col-lg-2 form-cols">
								<button type="button" class="btn btn-info">
									<span class="lnr lnr-magnifier"></span> Search
								</button>
							</div>
						</div>
					</form>
					<p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company,
						Design, Development</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start features Area -->
	<section class="features-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-feature">
						<h4>Searching</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-feature">
						<h4>Applying</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-feature">
						<h4>Security</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-feature">
						<h4>Notifications</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End features Area -->

	
	<!-- Start post Area -->
	<section class="post-area section-gap">
		<div class="container">
			<div class="row justify-content-center d-flex">
				<div class="col-lg-8 post-list">
					<ul class="cat-list">
						@foreach ($categories as $category)
							<li style="width: 30%"><a href="#">{{ $category->name }}</a></li>
						@endforeach
						
					</ul>
					
						
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

					<a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a>

				</div>
				<div class="col-lg-4 sidebar">
					<div class="single-slidebar">
						<h4>Jobs by Contrat</h4>
						<ul class="cat-list">
							@foreach ($contracts as $contract)
								<li>
									<a class="justify-content-between d-flex" href="category.html">
										<p>{{ $contract->name }}</p>
										<span>{{ $contract->count }}</span>
									</a>
								</li>
							@endforeach

						</ul>
					</div>


					<div class="single-slidebar">
						<h4>Jobs By Education level</h4>
						<ul class="cat-list">
							@foreach ($education_levels as $education)
								<li>
									<a class="justify-content-between d-flex" href="category.html">
										<p>{{ $education->name }}</p>
										<span>{{ $education->count }}</span>
									</a>
								</li>
							@endforeach
						</ul>
					</div>

					

					

				</div>
			</div>
		</div>
	</section>
	<!-- End post Area -->


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
					<div class="single-footer-widget mail-chimp">
						
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="{{ asset('assets/images/img/logo.png') }}" alt=""> </li>
							<li>Job Connect</li>
							
						</ul>
					</div>
				</div>
			</div>

			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">

					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved
				</p>
				
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
<script>
	$(document).ready(function() {
    $('.burger-menu').click(function() {
        $('.nav-menu').toggleClass('active');
    });
});
</script>
	
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