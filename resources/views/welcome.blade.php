<!DOCTYPE html>
<html lang="en">
<head>
	<title>future educatorss</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" href="css/boxicons.min.css">

	<!-- Stylesheets -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('design/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('design/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('design/css/style.css') }}"/>

</head>
<body>


	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<h3 style="color: #87a922; font-size: 30px; margin-top: 10px;">Future Educators</h3>
						<img src="" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<a href="" class="site-btn header-btn">Login</a>
					<nav class="main-menu">
						<ul>
							<li><a href="admin">Home</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg bg-dark" data-setbg="{{ asset('design/wepik-export-20240327195516A7Jx.jpeg') }}">
		<div class="container">
			<div class="hero-text text-white">
				<h2>Get The Best Free Online Courses</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla <br> dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<form class="intro-newslatter">
						<input type="text" placeholder="Name">
						<input type="text" class="last-s" placeholder="E-mail">
						<button class="site-btn">Sign Up Now</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- categories section -->
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Our Course Categories</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="row">
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{ asset('design/public-examination-preparation-concept.jpg') }}"></div>
						<div class="ci-text">
							<h5>IT Development</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span>120 Courses</span>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
						<div class="ci-text">
							<h5>Web Design</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span>70 Courses</span>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
						<div class="ci-text">
							<h5>Illustration & Drawing</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span>55 Courses</span>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
						<div class="ci-text">
							<h5>Social Media</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span>40 Courses</span>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
						<div class="ci-text">
							<h5>Photoshop</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span>220 Courses</span>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
						<div class="ci-text">
							<h5>Cryptocurrencies</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span>25 Courses</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- categories section end -->

	<!-- new course -->
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Our New course</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="row">
				<!-- categorie -->
				@foreach($categories as $categori)
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
						<div class="ci-text">
							<h5>{{$categori["Title"]}}</h5>
							<p>{{$categori["Description"]}}</p>
							<span>{{$categori["Link"]}} </span>
						</div>
					</div>
				</div>
				@endforeach
				  
			</div>
		</div>
	</section>
	<!-- search section -->
	<section class="search-section">
		<div class="container">
			<div class="search-warp">
				<div class="section-title text-white">
					<h2>Search your course</h2>
				</div>
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<!-- search form -->
						<form class="course-search-form">
							<input type="text" placeholder="Course">
							<input type="text" class="last-m" placeholder="Category">
							<button class="site-btn">Search Couse</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- search section end -->


	<!-- course section -->
	<section class="course-section spad">
		<div class="container">
			<div class="section-title mb-0">
				<h2>Featured Courses</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
		</div>
		<div class="course-warp">
			<ul class="course-filter controls">
				<li class="control active" data-filter="all">All</li>
				<li class="control" data-filter=".finance">Finance</li>
				<li class="control" data-filter=".design">Design</li>
				<li class="control" data-filter=".web">Web Development</li>
				<li class="control" data-filter=".photo">Photography</li>
			</ul>                                       
			<div class="row course-items-area">
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 finance">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg">
							<div class="price">Price: $15</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Art & Crafts</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
								<p>William Parker, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 design">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg">
							<div class="price">Price: $15</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>IT Development</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
								<p>William Parker, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 web">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg">
							<div class="price">Price: $15</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Graphic Design</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
								<p>William Parker, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 photo">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg">
							<div class="price">Price: $15</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>IT Development</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
								<p>William Parker, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 finance">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg">
							<div class="price">Price: $15</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>IT Development</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
								<p>William Parker, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 design">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg">
							<div class="price">Price: $15</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Socia Media</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
								<p>William Parker, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 web">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg">
							<div class="price">Price: $15</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>IT Development</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
								<p>William Parker, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 photo">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="public-examination-preparation-concept.jpg">
							<div class="price">Price: $15</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>HTML 5</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="public-examination-preparation-concept.jpg"></div>
								<p>William Parker, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- course section end -->


	<!-- signup section -->
	<section class="signup-section spad">
		<div class="signup-bg set-bg" data-setbg="{{ asset('img/signup-bg.jpg') }}"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2>Sign up to became a teacher</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
						</div>
						<!-- signup form -->
						<form class="signup-form">
							<input type="text" placeholder="Your Name">
							<input type="text" placeholder="Your E-mail">
							<input type="text" placeholder="Your Phone">
							<label for="v-upload" class="file-up-btn">Upload Course</label>
							<input type="file" id="v-upload">
							<button class="site-btn">Search Couse</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- signup section end -->


	<!-- banner section -->
	<section class="banner-section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<h2>Join Our Community Now!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="text-center pt-5">
				<a href="#" class="site-btn">Register Now</a>
			</div>
		</div>
	</section>
	<!-- banner section end -->


	<!-- footer section -->
	<footer class="footer-section spad pb-0">
		<div class="footer-top">
			<div class="footer-warp">
				<div class="row">
					<div class="widget-item">
						<h4>Contact Info</h4>
						<ul class="contact-list">
							<li>It is the first project from me</li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Engeneering</h4>
						<ul>
							<li><a href="">Applied Studies</a></li>
							<li><a href="">Computer Engeneering</a></li>
							<li><a href="">Software Engeneering</a></li>
							<li><a href="">Informational Engeneering</a></li>
							<li><a href="">System Engeneering</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Graphic Design</h4>
						<ul>
							<li><a href="">Applied Studies</a></li>
							<li><a href="">Computer Engeneering</a></li>
							<li><a href="">Software Engeneering</a></li>
							<li><a href="">Informational Engeneering</a></li>
							<li><a href="">System Engeneering</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Development</h4>
						<ul>
							<li><a href="">Applied Studies</a></li>
							<li><a href="">Computer Engeneering</a></li>
							<li><a href="">Software Engeneering</a></li>
							<li><a href="">Informational Engeneering</a></li>
							<li><a href="">System Engeneering</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Newsletter</h4>
						<form class="footer-newslatter">
							<input type="email" placeholder="E-mail">
							<button class="site-btn">Subscribe</button>
							<p>*We don’t spam</p>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">Privacy</a></li>
				</ul>
				<div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website create with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">Shakib</a>
</div>
			</div>
		</div>
	</footer> 
	<!-- footer section end -->


	<!--====== Javascripts ======-->
	<script src="{{ asset('design/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('design/js/mixitup.min.js') }}"></script>
	<script src="{{ asset('script.js') }}"></script>
</html>