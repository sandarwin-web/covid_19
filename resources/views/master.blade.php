
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Corona Virus</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}" type="text/css" media="all" />

	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css')}}" type="text/css" media="all" />	
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{ asset('front/css/responsive.css')}}" type="text/css" media="all" />	
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css')}}" type="text/css" media="all" />	
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{ asset('front/css/theme-default.css')}}" type="text/css" media="all" />	
	<!-- Meanmenu CSS -->
	<link rel="stylesheet" href="{{ asset('front/css/meanmenu.min.css')}}" type="text/css" media="all" />
	<!-- Main Style CSS -->
	<link rel="stylesheet"  href="{{ asset('front/css/style.css') }}" type="text/css" media="all" />
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{ asset('front/css/owl.transitions.css')}}" type="text/css" media="all" />
	<!-- venobox CSS -->
	<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all" />
	<!-- animated CSS -->
	<link rel="stylesheet" href="{{ asset('front/css/animated-text.css')}}" type="text/css" media="all" />
	<!-- widget CSS -->
	<link rel="stylesheet" href="{{ asset('front/css/widget.css')}}" type="text/css" media="all" />
	<!-- modernizr js -->	
	<script type="text/javascript" src="{{ asset('front/js/vendor/modernizr-3.5.0.min.js')}}"></script>
	<script src="{{ asset('front/js/jquery-3.4.1.slim.min.js')}}" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="{{ asset('front/js/popper.min.js')}}" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="{{ asset('front/bootstrap.min.js')}}" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
</head>
<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


	<!-- ============================================================== -->
	<!-- Start - corona Main Menu Area -->
	<!-- ============================================================== -->
	<div id="sticky-header" class="corona_main_menu d-md-none d-lg-block d-sm-none d-none">
		<div class="corona_nav_manu">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<div class="logo">
							<a class="logo_img" href="index.html" title="corona">
								<img src="{{ asset('front/images/logo.png')}}" alt="" />
							</a>
							<a class="logo_tranalte" href="index.html" title="corona">
								<img src="{{ asset('front/images/logo1.png')}}" alt="" />
							</a>
						</div>
					</div>
					<div class="col-md-9">
						<nav class="corona_menu">
							<ul class="nav_scroll">
								<li><a href="{{ route('mainpage') }}"> Home</a>
								</li>
								<li><a href="{{ route('aboutpage') }}"> About</a></li>
								<li><a href="{{ route('peventionpage') }}"> Prevention</a></li>
								<li><a href="#page"> Pages</a>
									<ul class="sub-menu">
										<li><a href="about.html">About</a></li>
										<li><a href="team.html">Team Member</a></li>
										<li><a href="team-details.html">Team Details</a></li>
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</li>
								<li><a href="news">News</a>
									<ul class="sub-menu">
										<li><a href="blog.html">Blog Grid</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="{{ route('contactpage') }}">Helpful link</a></li>
							</ul>			
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End - corona Main Menu Area -->
	<!-- ============================================================== -->
	

	@yield('content')


	
	<!-- ============================================================== -->
	<!-- Start - corona Footer Area -->
	<!-- ============================================================== -->
	<div class="footer_area bg_color pt-80 pb-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single_footer">
						<div class="single_footer_title pb-2">
							<img src="{{ asset('front/images/1.png')}}" alt="" />
						</div>
						<div class="single_footer_text">
							<p>The point of using Lorem Ipsum is that it has a more-or-less normal distrition of letters, as opposed to using </p>
						</div>
						<div class="footer_icon pt-2">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_footer">
						<div class="single_footer_title pb-4">
							<h4>Important Links</h4>
						</div>
						<div class="single_footer_body">
							<ul>
								<li><a href="#">App Development</a></li>
								<li><a href="#">App Marketing</a></li>
								<li><a href="#">IOS Development</a></li>
								<li><a href="#">Android Development</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_footer">
						<div class="single_footer_title pb-4">
							<h4>Recent Update</h4>
						</div>
						<div class="single_footer_recent">
							<div class="single_footer_recent_thumb">
								<img src="{{ asset('front/images/1.png')}}" alt="" />
							</div>
							<div class="single_footer_recent_content">
								<a href="#">Caring for someone at home</a>
								<span>April 11. 2020</span>
							</div>
						</div>
						<div class="single_footer_recent mt-3">
							<div class="single_footer_recent_thumb">
								<img src="{{ asset('front/images/3.png')}}" alt="" />
							</div>
							<div class="single_footer_recent_content">
								<a href="#">What to Do if You are feeling</a>
								<span>April 23. 2020</span>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_footer">
						<div class="single_footer_title pb-4">
							<h4>Social Media</h4>
						</div>
						<div class="single_footer_text">
							<p>Lorem ipsum dolor sit amet, consetur acing .</p>
						</div>
						<div class="single_footer_address">
							<ul>
								<li><span>Address:</span> 20/10 Panthapath, Dhaka.</li>
								<li><span>Telephone:</span> +323 254 123</li>
								<li><span>Email:</span> example@gmail.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Shape Image -->
		<div class="footer_shape">
			<div class="clouds">
				<img src="{{ asset('front/images/boy1.png')}}" alt="01" class="cloud1"/>
			</div>
		</div>
		<div class="footer_shape">
			<div class="clouds">
				<img src="{{ asset('front/images/boy2.png')}}" alt="02" class="cloud2"/>
			</div>
		</div>
		
		<div class="footer_shape">
			<div class="clouds">
				<img src="{{ asset('front/images/boy3.png')}}" alt="03" class="cloud3"/>
			</div>
		</div>
		<div class="footer_shape">
			<div class="clouds">
				<img src="{{ asset('front/images/boy4.png')}}" alt="04" class="cloud4"/>
			</div>
		</div>
	</div>
	
	<!-- jquery js -->	
	<script type="text/javascript" src="{{ asset('front/js/vendor/jquery-3.2.1.min.js')}}"></script>
	<!-- bootstrap js -->	
	<script type="text/javascript" src="{{ asset('front/js/bootstrap.min.js')}}"></script>
	<!-- carousel js -->
	<script type="text/javascript" src="{{ asset('front/js/owl.carousel.min.js')}}"></script>
	<!-- counterup js -->
	<script type="text/javascript" src="{{ asset('front/js/jquery.counterup.min.js')}}"></script>
	<!-- waypoints js -->
	<script type="text/javascript" src="{{ asset('front/js/waypoints.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('front/js/jquery.counterup.min.js')}}"></script>
	<!-- imagesloaded js -->
	<script type="text/javascript" src="{{ asset('front/js/imagesloaded.pkgd.min.js')}}"></script>
	<!-- isotope js -->
	<script type="text/javascript" src="{{ asset('front/js/isotope.pkgd.min.js')}}"></script>
	<!-- animated js -->
	<script type="text/javascript" src="{{ asset('front/js/animated-text.js')}}"></script>
	<!-- venobox js -->
	<script type="text/javascript" src="venobox/venobox.js"></script>
	<!-- venobox min js -->
	<script type="text/javascript" src="venobox/venobox.min.js"></script>
	<!-- jquery js -->
	<script type="text/javascript" src="{{ asset('front/js/jquery.meanmenu.js')}}"></script>
	<script type="text/javascript" src="{{ asset('front/js/jquery.nav.js')}}"></script>
	<script type="text/javascript" src="{{ asset('front/js/jquery.scrollUp.js')}}"></script>
	<script type="text/javascript" src="{{ asset('front/js/contact-form-script.js')}}"></script>

	{{-- <script type="text/javascript" src="{{ asset('front/js/form-validator.min.js')}}"></script> --}}
	<!-- theme js -->	
	<script src="{{ asset('front/jquery.form-validator.min.js')}}" integrity="sha512-7+hQkXGIswtBWoGbyajZqqrC8sa3OYW+gJw5FzW/XzU/lq6kScphPSlj4AyJb91MjPkQc+mPQ3bZ90c/dcUO5w==" crossorigin="anonymous"></script>

	<script type="text/javascript" src="{{ asset('front/js/theme.js')}}"></script>
</body>
</html>