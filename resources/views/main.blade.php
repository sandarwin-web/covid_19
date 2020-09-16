@extends('master')
@section('content')



<!-- ============================================================== -->
	<!-- Start - Mobile Menu Area -->
	<!-- ============================================================== -->
	<div class=" corona_main_menu  hidden-md  hidden-lg">
		<div class="menu_area mobile-menu">
				<nav class="corona_menu">
					<ul class="nav_scroll">
						<li><a href="#home"> Home</a>
							<ul class="sub-menu">
								<li><a href="index.html">Home One</a></li>
								<li><a href="index-2.html">Home Two</a></li>
								<li><a href="index-3.html">Landing Page</a></li>
							</ul>
						</li>
						<li><a href="about.html"> About</a></li>
						<li><a href="prevention.html"> Prevention</a></li>
						<li><a href="#page"> Pages</a>
							<ul class="sub-menu">
								<li><a href="about.html">About</a></li>
								<li><a href="team.html">Team Member</a></li>
								<li><a href="team-details.html">Team Details</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</li>
						<li><a href="#news">News </a>
							<ul class="sub-menu">
								<li><a href="blog.html">Blog Grid</a></li>
								<li><a href="blog-details.html">Blog Details</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
		</div>					
	</div>			
	<!-- ============================================================== -->
	<!-- End - Mobile Menu Area -->
	<!-- ============================================================== -->		
	
	<!-- ============================================================== -->
	<!-- Start - corona Slider Area -->
	<!-- ============================================================== -->
	<div class="slider_area d-flex align-items-center" id="home">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="slider_content">
						<div class="slider_text">
							<div class="slider_thumb ">
								<div class="slider_thumb_inner rotateme">
									<img src="{{ asset('front/images/lg.png')}}" alt="" />
								</div>
							</div>
							
							<div class="slider_text_inner pt-200">
								<h1>Prevention of Corona Virus Disease</h1>
								<h2>Confirmed Corona Cases : <span class="cass_active">{{$comfirmeds}}</span></h2>
								<ul>
									<li>All Cases: {{$comfirmeds}}</li>
									<li>Recovered cases : {{$recovereds}}</li>
									<li>Deaths: {{$deceaseds}}</li>
								</ul>
							</div>
							 
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	
	<!-- ============================================================== -->
	<!-- End - corona Slider Area -->
	<!-- ============================================================== -->
	
	<!-- ============================================================== -->
	<!-- Start - Corona Feature Area -->
	<!-- ============================================================== -->
	
	<!-- ============================================================== -->
	<!-- End - Corona Feature Area -->
	<!-- ============================================================== -->

	<!-- ============================================================== -->
	<!-- Start - Corona Service Area -->
	<!-- ============================================================== -->
	
	<!-- ============================================================== -->
	<!-- Start - corona Blog Area -->
	<!-- ============================================================== -->

	<!-- ============================================================== -->
	<!-- End - corona Blog Area -->
	<!-- ============================================================== -->
@endsection