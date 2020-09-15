
@extends('master')
@section('content')

<div class="breatcome_area d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breatcome_title pt-50">
						<div class="breatcome_title_inner pb-2">
							<h2>Conatact Us</h2>
						</div>
						<div class="breatcome_content">
							<ul>
								<li><a href="index.html">Home</a> <i class="fa fa-angle-right"></i> <a href="#"> Pages</a> <i class="fa fa-angle-right"></i> <span>Contact</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End - Corona Breatcome Area -->
	<!-- ============================================================== -->
	
	<!-- ============================================================== -->
	<!-- Start - Corona Contact Now Area -->
	<!-- ============================================================== -->
	<div class="contact_now_area bg_color2 pt-80 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title center color_black mb-5">
						<div class="section_title_thumb rotateme">
							<img src="assets/images/lg.png" alt="" />
						</div>
						<div class="section_title_content pt-2">
							<h2>Contact Now</h2>
							<p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Also the symptoms may appear 2-14 days after exposure.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="single_contact_now">
						<div class="single_contact_now_inner">
							<div class="single_contact_now_icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="single_contact_now_content">
								<h2>Phone Number</h2>
								<p>+088 385 659 258</p>
								<p>(258) 698 654 8745</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="single_contact_now">
						<div class="single_contact_now_inner">
							<div class="single_contact_now_icon">
								<i class="fa fa-envelope-o"></i>
							</div>
							<div class="single_contact_now_content">
								<h2>Email Address</h2>
								<p>info@example.com</p>
								<p>gmail@example.com</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="single_contact_now">
						<div class="single_contact_now_inner">
							<div class="single_contact_now_icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="single_contact_now_content">
								<h2>Office Address</h2>
								<p>56/A-102-Middle Point, USA</p>
								<p>New York, US</p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Start - Corona Contact Now Area -->
	<!-- ============================================================== -->
	
	<!-- ============================================================== -->
	<!-- Start - Corona Contact Area -->
	<!-- ============================================================== -->
	<div class="contact_area pt-80 pb-70" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title center color_black mb-5">
						<div class="section_title_thumb rotateme">
							<img src="assets/images/lg.png" alt="" />
						</div>
						<div class="section_title_content pt-2">
							<h2>Get In Touch</h2>
							<p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Also the symptoms may appear 2-14 days after exposure.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="contact-form-main">
					<form id="contact-form" action="mail.php" method="POST" >
							<input type="text" name="name"  placeholder="Name">
							<input type="email" name="email" placeholder="Email">
							<input type="text" name="subject" placeholder="Subject">
							<textarea name="message"  id="" cols="30" rows="10" placeholder="Message"></textarea>
							<button type="submit">Send Message</button>
					</form>
					<p class="form-message"></p>
				</div>
				</div>
				<div class="col-lg-6">
					<!-- CONTACT_AREA END -->
					<div class="google_map_area">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="google_map_area">
									<iframe class="map" src="https://snazzymaps.com/embed/65241"></iframe>		
								</div>
							</div>				
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Start - Corona Contact Area -->
	<!-- =================

	@endsection