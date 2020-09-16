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
									<img src="{{ asset('front/images/01.png')}}" alt="" />
								</div>
							</div>
							
							<div class="slider_text_inner pt-200">
								<h1>Prevention of Corona Virus Disease</h1>

								<h2>Confirmed Corona Cases : <span class="cass_active">{{$comfirmeds}}</span></h2>

								<h2>Confirmed Corona Cases : <span class="cass_active"></span></h2>

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
	<!-- Start - Corona Service Area -->
	<!-- ============================================================== -->
	<div class="service_area bg_img pb-80 pt-100" id="service">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title center mb-5">
						<div class="section_title_thumb rotateme">
							<img src="{{ asset('front/images/lg.png')}}" alt="" />
						</div>
						<div class="section_title_content pt-2">
							<h5>Service Virus</h5>
							<h2>Corona Virus Symptoms</h2>
							<p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Also the symptoms may appear 2-14 days after exposure.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_service mb-4">
						<div class="single_service_icon ">
							<img src="{{ asset('front/images/s2.png')}}" alt="" />
						</div>
						<div class="single_service_title pt-3 pb-1">
							<h4>Coughing And Sneezing</h4>
						</div>
						<div class="single_service_text pt-4">
							<p>Libero perspiciatis sequi delectus, maxime, voluptatum minima nam consectetur dolore</p>
						</div>
						<div class="single_service_button">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_service mb-4">
						<div class="single_service_icon">
							<img src="{{ asset('front/images/s1.png')}}" alt="" />
						</div>
						<div class="single_service_title pt-3 pb-1">
							<h4>Strong Headacke</h4>
						</div>
						<div class="single_service_text pt-4">
							<p>Libero perspiciatis sequi delectus, maxime, voluptatum minima nam consectetur dolore</p>
						</div>
						<div class="single_service_button">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_service mb-4">
						<div class="single_service_icon">
							<img src="{{ asset('front/images/s3.png')}}" alt="" />
						</div>
						<div class="single_service_title pt-3 pb-1">
							<h4>Confusion</h4>
						</div>
						<div class="single_service_text pt-4">
							<p>Libero perspiciatis sequi delectus, maxime, voluptatum minima nam consectetur dolore</p>
						</div>
						<div class="single_service_button">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_service mb-4">
						<div class="single_service_icon">
							<img src="{{ asset('front/images/s4.png')}}" alt="" />
						</div>
						<div class="single_service_title pt-3 pb-1">
							<h4>Hot Fever</h4>
						</div>
						<div class="single_service_text pt-4">
							<p>Libero perspiciatis sequi delectus, maxime, voluptatum minima nam consectetur dolore</p>
						</div>
						<div class="single_service_button">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_service mb-4">
						<div class="single_service_icon">
							<img src="{{ asset('front/images/s5.png')}}" alt="" />
						</div>
						<div class="single_service_title pt-3 pb-1">
							<h4>Shortness Of Breath</h4>
						</div>
						<div class="single_service_text pt-4">
							<p>Libero perspiciatis sequi delectus, maxime, voluptatum minima nam consectetur dolore</p>
						</div>
						<div class="single_service_button">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_service mb-4">
						<div class="single_service_icon">
							<img src="{{ asset('front/images/s6.png')}}" alt="" />
						</div>
						<div class="single_service_title pt-3 pb-1">
							<h4>Sore Throat</h4>
						</div>
						<div class="single_service_text pt-4">
							<p>Libero perspiciatis sequi delectus, maxime, voluptatum minima nam consectetur dolore</p>
						</div>
						<div class="single_service_button">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End - Corona Service Area -->
	<!-- ============================================================== -->

	<!-- ============================================================== -->
	<!-- Start - Corona About Area -->
	<!-- ============================================================== -->
	
	<div class="about_area bg_color pb-60 pt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="single_about_thumb mb-4">
						<img src="{{ asset('front/images/doctor3.png')}}" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="section_title left pb-4">
						<div class="section_title_thumb rotateme">
							<img src="{{ asset('front/images/lg.png')}}" alt="" />
						</div>
						<div class="section_title_content pt-80">
							<h5>ABOUT CORONA VIRUS</h5>
							<h2>Corona Virus Is More Dangerous In The All World</h2>
							<p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal forest congestion, runny nose, sore throat or diarrhea. </p>
						</div>
					</div>
					<div class="single_about mb-2">
						<div class="single_about_icon mr-2">
							<i class="fa fa-check-circle"></i>
						</div>
						<div class="single_about_text">
							<p>Once contaminated.</p>
						</div>
					</div>
					<div class="single_about mb-2">
						<div class="single_about_icon mr-2">
							<i class="fa fa-check-circle"></i>
						</div>
						<div class="single_about_text">
							<p>Hands can transfer the virus</p>
						</div>
					</div>
					<div class="single_about mb-2">
						<div class="single_about_icon mr-2">
							<i class="fa fa-check-circle"></i>
						</div>
						<div class="single_about_text">
							<p>The most symptoms COVID-19 fever</p>
						</div>
					</div>
					<div class="about_button pt-3">
						<div class="button">
							<a href="#">More About</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about_area bg_color pb-80">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="section_title left pb-4">
						<div class="section_title_thumb rotateme">
							<img src="{{ asset('front/images/lg.png')}}" alt="" />
						</div>
						<div class="section_title_content pt-80">
							<h5>MORE INFORMATION COVID -19</h5>
							<h2>Take More Information About Corona Visus.</h2>
							<p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal forest congestion, runny nose, sore throat or diarrhea.p>
						</div>
					</div>
					<div class="single_about mb-2">
						<div class="single_about_icon mr-2">
							<i class="fa fa-check-circle"></i>
						</div>
						<div class="single_about_text">
							<p>Once contaminated.</p>
						</div>
					</div>
					<div class="single_about mb-2">
						<div class="single_about_icon mr-2">
							<i class="fa fa-check-circle"></i>
						</div>
						<div class="single_about_text">
							<p>Hands can transfer the virus</p>
						</div>
					</div>
					<div class="single_about mb-2">
						<div class="single_about_icon mr-2">
							<i class="fa fa-check-circle"></i>
						</div>
						<div class="single_about_text">
							<p>The most symptoms COVID-19 fever</p>
						</div>
					</div>
					<div class="about_button pt-3">
						<div class="button">
							<a href="#">More About</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="single_about_thumb mt-4">
						<img src="{{ asset('front/images/doctor2.jpg')}}" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ============================================================== -->
	<!-- End - Corona About Area -->
	<!-- ============================================================== -->
	
	
	<!-- ============================================================== -->
	<!-- Start - Corona Team Area -->
	<!-- ============================================================== -->
	{{-- <div class="team_area bg_img pb-50 pt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title center mb-5">
						<div class="section_title_thumb rotateme">
							<img src="{{ asset('front/images/lg.png')}}" alt="" />
						</div>
						<div class="section_title_content pt-2">
							<h5>Corona Virus Doctor</h5>
							<h2>Coronavrius Specialist</h2>
							<p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Also the symptoms may appear 2-14 days after exposure.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_team mb-4">
						<div class="single_team_thumb">
							<img src="{{ asset('front/images/1.png')}}" alt="" />
						</div>
						<div class="single_team_icon">
							<div class="single_team_icon_inner">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
						<div class="single_team_content">
							<h4>Dr. Salina Haeue</h4>
							<span>BBA Doctor</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_team mb-4">
						<div class="single_team_thumb">
							<img src="{{ asset('front/images/2.png')}}" alt="" />
						</div>
						<div class="single_team_icon">
							<div class="single_team_icon_inner">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
						<div class="single_team_content">
							<h4>Dr. Mahabub Alam</h4>
							<span>Corona Spechalist</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_team mb-4">
						<div class="single_team_thumb">
							<img src="{{ asset('front/images/5.png')}}" alt="" />
						</div>
						<div class="single_team_icon">
							<div class="single_team_icon_inner">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
						<div class="single_team_content">
							<h4>Dr. Dilruba Khan</h4>
							<span>MBBA Doctor</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_team mb-4">
						<div class="single_team_thumb">
							<img src="{{ asset('front/images/4.png')}}" alt="" />
						</div>
						<div class="single_team_icon">
							<div class="single_team_icon_inner">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
						<div class="single_team_content">
							<h4>Dr. Abraham</h4>
							<span>Covid-19 Spechalist</span>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div> --}}
	
	<!-- ============================================================== -->
	<!-- End - Corona Team Area -->
	<!-- ============================================================== -->
	
	<!-- ============================================================== -->
	<!-- Start - Corona Process Area -->
	<!-- ============================================================== -->
	<div class="process_area bg_color pb-50 pt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title center mb-5">
						<div class="section_title_thumb rotateme">
							<img src="{{ asset('front/images/lg.png')}}" alt="" />
						</div>
						<div class="section_title_content pt-2">
							<h5>Corona Virus Doctor</h5>
							<h2>Coronavrius Specialist</h2>
							<p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Also the symptoms may appear 2-14 days after exposure.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_process mb-4">
						<div class="single_process_thumb">
							<img src="{{ asset('front/images/wh.jpg')}}" alt="" />
						</div>
						<div class="single_process_number">
							<span>01</span>
						</div>
						<div class="single_process_content pt-3">
							<h5>Wet Hands</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_process mb-4">
						<div class="single_process_thumb">
							<img src="{{ asset('front/images/soa.jpg')}}" alt="" />
						</div>
						<div class="single_process_number">
							<span>02</span>
						</div>
						<div class="single_process_content pt-3">
							<h5>Apply Soap</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_process mb-4">
						<div class="single_process_thumb">
							<img src="{{ asset('front/images/rub.jpg')}}" alt="" />
						</div>
						<div class="single_process_number">
							<span>03</span>
						</div>
						<div class="single_process_content pt-3">
							<h5>Rub Hands Plan to plan</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_process mb-4">
						<div class="single_process_thumb">
							<img src="{{ asset('front/images/lather.jpg')}}" alt="" />
						</div>
						<div class="single_process_number">
							<span>04</span>
						</div>
						<div class="single_process_content pt-3">
							<h5>Lather The Back of Both Hands</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_process mb-4">
						<div class="single_process_thumb">
							<img src="{{ asset('front/images/scrub.jpg')}}" alt="" />
						</div>
						<div class="single_process_number">
							<span>05</span>
						</div>
						<div class="single_process_content pt-3">
							<h5>Scrub Between Your Fingers</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_process mb-4">
						<div class="single_process_thumb">
							<img src="{{ asset('front/images/rubb.jpg')}}" alt="" />
						</div>
						<div class="single_process_number">
							<span>06</span>
						</div>
						<div class="single_process_content pt-3">
							<h5>Rub The Back of Fingers on The Opposing Plan</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_process mb-4">
						<div class="single_process_thumb">
							<img src="{{ asset('front/images/clean.jpg')}}" alt="" />
						</div>
						<div class="single_process_number">
							<span>07</span>
						</div>
						<div class="single_process_content pt-3">
							<h5>Clean Thumbs</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_process mb-4">
						<div class="single_process_thumb">
							<img src="{{ asset('front/images/wash.jpg')}}" alt="" />
						</div>
						<div class="single_process_number">
							<span>08</span>
						</div>
						<div class="single_process_content pt-3">
							<h5>Wash Fingernails And Fingerips</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_process mb-4">
						<div class="single_process_thumb">
							<img src="{{ asset('front/images/rinse.jpg')}}" alt="" />
						</div>
						<div class="single_process_number">
							<span>09</span>
						</div>
						<div class="single_process_content pt-3">
							<h5>Rinse Hands</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_process mb-4">
						<div class="single_process_thumb">
							<img src="{{ asset('front/images/dry.jpg')}}" alt="" />
						</div>
						<div class="single_process_number">
							<span>10</span>
						</div>
						<div class="single_process_content pt-3">
							<h5>Dry with a Single Use Towel</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_process mb-4">
						<div class="single_process_thumb">
							<img src="{{ asset('front/images/towel.jpg')}}" alt="" />
						</div>
						<div class="single_process_number">
							<span>11</span>
						</div>
						<div class="single_process_content pt-3">
							<h5>Use The Towel to Rurn off The Foucet</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_process mb-4">
						<div class="single_process_thumb">
							<img src="{{ asset('front/images/handclean.jpg')}}" alt="" />
						</div>
						<div class="single_process_number">
							<span>12</span>
						</div>
						<div class="single_process_content pt-3">
							<h5>Your Hands Are Clean</h5>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End - Corona Process Area -->
	<!-- ============================================================== -->
>>>>>>> 2f043826881fb7425b8fc888cbd95b54a837e796
	
	<!-- ============================================================== -->
	<!-- End - corona Slider Area -->
	<!-- ============================================================== -->
<<<<<<< HEAD
=======
	<div class="prevention_area bg_img pb-60 pt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title center mb-5">
						<div class="section_title_thumb rotateme">
							<img src="{{ asset('front/images/lg.png')}}" alt="" />
						</div>
						<div class="section_title_content pt-2">
							<h5>Prevention</h5>
							<h2>Prevention & Advice Specialist</h2>
							<p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Also the symptoms may appear 2-14 days after exposure.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="main_prevention mr-3">
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/1.png')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Coughing And Seneezing</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/facemask.jpg')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Ware a face mask outside</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/6.png')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Cover your cough tissue paper</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/4.png')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Check your body regulerly</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="main_prevention ml-3">
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/risk.jpg')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Avoid contact with sick people</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/2.png')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Avoid crowded places</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/3.png')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Avoid contact animals</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/5.png')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Contaminated objects</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	
	<!-- ============================================================== -->
	<!-- Start - Corona Feature Area -->
	<!-- ============================================================== -->
	
	<!-- ============================================================== -->
	<!-- End - Corona Feature Area -->
	<!-- ============================================================== -->

	<div class="accordion_area bg_color pb-60 pt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title center mb-5">
						<div class="section_title_thumb rotateme">
							<img src="{{ asset('front/images/lg.png')}}" alt="" />
						</div>
						<div class="section_title_content pt-2">
							{{-- <h5>F A Q</h5> --}}
							<h2>Some Question & Answer</h2>
							<p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Also the symptoms may appear 2-14 days after exposure.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
					<div id="accordion">
					  <div class="card mb-4">
						<div class="card-header" id="headingOne">
						  <h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							   What is a coronavirus and COVID-19?
							</button>
						  </h5>
						</div>


	<!-- ============================================================== -->
	<!-- Start - Corona Service Area -->
	<!-- ============================================================== -->
	
	<!-- ============================================================== -->
	<!-- Start - corona Blog Area -->
	<!-- ============================================================== -->

	<div class="blog_area bg_img pb-60 pt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title center mb-5">
						<div class="section_title_thumb rotateme">
							<img src="{{ asset('front/images/lg.png')}}" alt="" />
						</div>
						<div class="section_title_content pt-2">
							<h5>Popular Blog</h5>
							<h2>Latest Update Coronavirus</h2>
							<p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Also the symptoms may appear 2-14 days after exposure.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="blog_list owl-carousel curosel-style">
					<!-- Single Blog -->
					<div class="col-md-12">
						<div class="single_blog mb-4">
							<div class="single_blog_inner">
								<div class="single_blog_thumb">
									<img src="{{ asset('front/images/b2.jpg')}}" alt="" />
								</div>
								<div class="single_blog_content pl-4 pr-4 pb-3">
									<div class="single_blog_meta">
										<div class="single_blog_meta_date pr-2">
											<span>Corona Jun 22, 2020.</span>
										</div>
									</div>
									<div class="single_blog_title pt-2 pb-3">
										<h4><a href="blog-details.html">Conulting Reporting Qouncil Arei Not Could More...</a></h4>
									</div>
									<div class="single_blog_text">
										<p>A reader will be distracted by the readable content offs page when looking at its layout the point.</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Blog -->
					<div class="col-md-12">
						<div class="single_blog mb-4">
							<div class="single_blog_inner">
								<div class="single_blog_thumb">
									<img src="{{ asset('front/images/b3.jpg')}}" alt="" />
								</div>
								<div class="single_blog_content pl-4 pr-4 pb-3">
									<div class="single_blog_meta">
										<div class="single_blog_meta_date pr-2">
											<span>Corona April 25, 2020.</span>
										</div>
									</div>
									<div class="single_blog_title pt-2 pb-3">
										<h4><a href="blog-details.html">Financial Reporting Qouncil What Could More...</a></h4>
									</div>
									<div class="single_blog_text">
										<p>A reader will be distracted by the readable content offs page when looking at its layout the point.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Blog -->
					<div class="col-md-12">
						<div class="single_blog mb-4">
							<div class="single_blog_inner">
								<div class="single_blog_thumb">
									<img src="{{ asset('front/images/b4.jpg')}}" alt="" />
								</div>
								<div class="single_blog_content pl-4 pr-4 pb-3">
									<div class="single_blog_meta">
										<div class="single_blog_meta_date pr-2">
											<span>Corona July 15, 2020.</span>
										</div>
									</div>
									<div class="single_blog_title pt-2 pb-3">
										<h4><a href="blog-details.html">Consulting Reporting Qounc Arei Could More...</a></h4>
									</div>
									<div class="single_blog_text">
										<p>A reader will be distracted by the readable content offs page when looking at its layout the point.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Blog -->
					<div class="col-md-12">
						<div class="single_blog mb-4">
							<div class="single_blog_inner">
								<div class="single_blog_thumb">
									<img src="{{ asset('front/images/b.jpg')}}" alt="" />
								</div>
								<div class="single_blog_content pl-4 pr-4 pb-3">
									<div class="single_blog_meta">
										<div class="single_blog_meta_date pr-2">
											<span>Corona July 23, 2020.</span>
										</div>
									</div>
									<div class="single_blog_title pt-2 pb-3">
										<h4><a href="blog-details.html">The release of Letraset sheets contains four</a></h4>
									</div>
									<div class="single_blog_text">
										<p>A reader will be distracted by the readable content offs page when looking at its layout the point.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Blog -->
					<div class="col-md-12">
						<div class="single_blog mb-4">
							<div class="single_blog_inner">
								<div class="single_blog_thumb">
									<img src="{{ asset('front/images/b1.jpg')}}" alt="" />
								</div>
								<div class="single_blog_content pl-4 pr-4 pb-3">
									<div class="single_blog_meta">
										<div class="single_blog_meta_date pr-2">
											<span>Corona April 21, 2020.</span>
										</div>
									</div>
									<div class="single_blog_title pt-2 pb-3">
										<h4><a href="blog-details.html">The release of Letraset sheets contains four</a></h4>
									</div>
									<div class="single_blog_text">
										<p>A reader will be distracted by the readable content offs page when looking at its layout the point.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- ============================================================== -->
	<!-- End - corona Blog Area -->
	<!-- ============================================================== -->
@endsection