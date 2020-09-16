@extends('master')
@section('content')
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
							{{-- <i class="fa fa-check-circle"></i> --}}
							<i class="icofont-check-circled"></i>
						</div>
						<div class="single_about_text">
							<p>Once contaminated.</p>
						</div>
					</div>
					<div class="single_about mb-2">
						<div class="single_about_icon mr-2">
							<i class="icofont-check-circled"></i>
						</div>
						<div class="single_about_text">
							<p>Hands can transfer the virus</p>
						</div>
					</div>
					<div class="single_about mb-2">
						<div class="single_about_icon mr-2">
							<i class="icofont-check-circled"></i>
						</div>
						<div class="single_about_text">
							<p>The most symptoms COVID-19 fever</p>
						</div>
					</div>
					{{-- <div class="about_button pt-3">
						<div class="button">
							<a href="#">More About</a>
						</div>
					</div> --}}
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
						<img src="{{ asset('front/images/about2.png')}}" alt="" />
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
							<img src="assets/images/lg.png" alt="" />
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
							<img src="assets/images/doctor1.jpg" alt="" />
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
							<img src="assets/images/doctor2.jpg" alt="" />
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
							<img src="assets/images/docror3.jpg" alt="" />
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
							<img src="assets/images/doctor4.jpg" alt="" />
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
	<!-- Start - Corona Accordion Area -->
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

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						  <div class="card-body">
							On February 11, 2020 the World Health Organization announced an official name for the disease that is causing the 2019 novel coronavirus outbreak, first identified in Wuhan China. The new name of this disease is coronavirus disease 2019, abbreviated as COVID-19. In COVID-19, ‘CO’ stands for ‘corona,’ ‘VI’ for ‘virus,’ and ‘D’ for disease. Formerly, this disease was referred to as “2019 novel coronavirus” or “2019-nCoV”.
						  </div>
						</div>
					  </div>
					  <div class="card mb-4">
						<div class="card-header" id="headingTwo">
						  <h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							   How to Protect Yourself ?
							</button>
						  </h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						  <div class="card-body">
							Stay aware of the latest information on the COVID-19 outbreak, available on the WHO website and through your national and local public health authority. Many countries around the world have seen cases of COVID-19 and several have seen outbreaks. Authorities in China and some other countries have succeeded in slowing or stopping their outbreaks. However, the situation is unpredictable so check regularly for the latest news.
						  </div>
						</div>
					  </div>
					  <div class="card mb-4">
						<div class="card-header" id="headingThree">
						  <h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							   Symptoms & Testing
							</button>
						  </h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						  <div class="card-body">
							The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Some people become infected but don’t develop any symptoms and don’t feel unwell. Most people (about 80%) recover from the disease without needing special treatment. Around 1 out of every 6 people who gets COVID-19 becomes seriously ill and develops difficulty breathing. Older people, and those with underlying medical problems like high blood pressure, heart problems or diabetes, are more likely to develop serious illness. People with fever, cough and difficulty breathing should seek medical attention.
						  </div>
						</div>
					  </div>
					  <div class="card mb-4">
						<div class="card-header" id="headingFour">
						  <h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							   Symptoms & Testing
							</button>
						  </h5>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
						  <div class="card-body">
							Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people. This is suspected to have occurred for the virus that causes COVID-19. Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS) are two other examples of coronaviruses that originated from animals and then spread to people. More information about the source and spread of COVID-19 is available on the Situation Summary: Source and Spread of the Virus.
						  </div>
						</div>
					  </div>
					  
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ============================================================== -->
	<!-- End - Corona Accordion Area -->
	<!-- ============================================================== -->
	
		<!-- ============================================================== -->
	<!-- Start - Corona Prevention Area -->
	<!-- ============================================================== -->
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
								<img src="{{ asset('front/images/s1.png')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Coughing And Seneezing</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/about2.png')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Ware a face mask outside</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/pr6.png')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Cover your cough tissue paper</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/doctor4.jpg')}}" alt="" />
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
								<img src="{{ asset('front/images/pr1.png')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Avoid contact with sick people</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/pr2.png')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Avoid crowded places</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/pr3.png')}}" alt="" />
							</div>
							<div class="single_prevention_content">
								<h4>Avoid contact animals</h4>
								<p>Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore</p>
							</div>
						</div>
						<div class="single_prevention mb-4">
							<div class="single_prevention_thumb mr-3">
								<img src="{{ asset('front/images/pr5.png')}}" alt="" />
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
	<!-- End - Corona Prevention Area -->
	<!-- ============================================================== -->
@endsection	