@extends('master')
@section('content')



<!-- ============================================================== -->
<!-- Start - Mobile Menu Area -->
<!-- ============================================================== -->
<div class=" corona_main_menu  hidden-md  hidden-lg">
	<div class="menu_area mobile-menu">
		<nav class="corona_menu">
			<ul class="nav_scroll">
				<li><a href="#home"> Home</a></li>
				<li><a href="about.html"> About</a></li>
				<li><a href="prevention.html"> Prevention</a></li>
				<li><a href="#news">News </a></li>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<h1 class="text-white" style="text-align: center;">Prevention of Corona Virus Disease</h1>
			<h2 class="text-white" style="text-align: center;">Confirmed Corona Cases : <span class="cass_active">{{$comfirmeds}}</span></h2>
		<div class="row">

			<div class="col-lg-4 text-white">	
				
				<div style="border: 1px solid black;
				background-color: #85C1E9;
				padding: 20px;
				font-size: 30px;
				border-radius: 30px;
				height: 150px">All Cases<br><br> {{$comfirmeds}}</div>
			</div>
			<div class="col-lg-4 text-white">	
				
				<div style="border: 1px solid black;
				background-color: #48C9B0;
				padding: 20px;
				font-size: 30px;
				border-radius: 30px;
				height: 150px">Recovered cases <br><br> {{$recovereds}}</div>
			</div>
			<div class="col-lg-4 text-white">	
				
				<div style="border: 1px solid black;
				background-color: #CD6155;
				padding: 20px;
				font-size: 30px;
				border-radius: 30px;
				height: 150px">Deaths <br><br>{{$deceaseds}}</div>
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
				</div>
			</div>

		</div>
	</div>
</div>
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
							{{-- <p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Also the symptoms may appear 2-14 days after exposure.</p> --}}
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="main_prevention mr-3">
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">

								<img src="{{ asset('front/images/cough.jpg')}}" alt="" />


							</div>
							<div class="single_prevention_content">
								<h4>Coughing And Seneezing</h4>
								<p>If you have a fever, a cough, and difficulty breathing, seek medical attention.</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">

								<img src="{{ asset('front/images/wear.jpg')}}" alt="" />

							</div>
							<div class="single_prevention_content">
								<h4>Ware a face mask outside</h4>
								<p>Always wear a mask, be sure to cover mouth and nose – Avoid touching mask once it is on.</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">

								<img src="{{ asset('front/images/paper.jpg')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Cover your cough tissue paper</h4>
								<p>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.

								</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">

								<img src="{{ asset('front/images/body.jpg')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Check your body regulerly</h4>
								<p>Check your fever and symptoms on daily basis.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="main_prevention ml-3">
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">

								<img src="{{ asset('front/images/avoid.jpg')}}" alt="" />

							</div>
							<div class="single_prevention_content">
								<h4>Avoid contact with sick people</h4>
								<p>Maintain a safe distance from anyone who is coughing or sneezing.</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/place.jpg')}}" alt="" />

							</div>
							<div class="single_prevention_content">
								<h4>Avoid crowded places</h4>
								<p>Avoid to visit risk places, it can be dangerous for you.</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">

								<img src="{{ asset('front/images/gething.jpg')}}" alt="" />


							</div>
							<div class="single_prevention_content">
								<h4>Gathering</h4>
								<p>Avoid mass gathering and crowded places.</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">

								<img src="{{ asset('front/images/conta.jpg')}}" alt="" />

								
							</div>
							<div class="single_prevention_content">
								<h4>Contaminated objects</h4>
								<p>Do not touch any object on public places it can be infected</p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

@endsection