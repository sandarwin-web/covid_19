
@extends('master')
@section('content')
{{-- 
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
</div> --}}
<!-- ============================================================== -->
<!-- End - Corona Breatcome Area -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Start - Corona Contact Now Area -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Start - Corona Contact Now Area -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Start - Corona Contact Area -->
<!-- ============================================================== -->
<div class="contact_area pt-80 pb-70 bg_color2" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section_title center color_black mb-5">
					<div class="section_title_thumb rotateme">
						<img src="assets/images/lg.png" alt="" />
					</div>
					<div class="section_title_content pt-2">
						<h2 class="bg-info">Health Service</h2><br>

						<table class="table table-hover">
							<thead class="bg-info">
								<tr>
									<th scope="col">No.</th>
									<th scope="col">Name</th>
									<th scope="col">Address</th>
									<th scope="col">Time</th>
									<th scope="col">Opening_Day</th>
									<th scope="col">Contact</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($helpservices as $helpservice)
								<tr>
										<th>{{ $helpservice->id }}</th>
										<th>{{ $helpservice->name }}</th>
										<th>{{ $helpservice->address}}</th>
										<th>{{ $helpservice->time }}</th>
										<th>{{ $helpservice->opening_day }}</th>
										<th>{{ $helpservice->contact}}</th>

								</tr>
								@endforeach
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>

<div class="contact_now_area bg_color2 pt-80 pb-70">
	<div class="container">
		
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="single_contact_now">
					<div class="single_contact_now_inner">
						<div class="single_contact_now_content">
							<img src="front/images/helpservice.jpg" alt="" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="single_contact_now">
					<div class="single_contact_now_inner">
						<div class="single_contact_now_content">
							<img src="front/images/helpservice3.jpg" alt="" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="single_contact_now">
					<div class="single_contact_now_inner">
						<div class="single_contact_now_content">
							<img src="front/images/helpservice2.jpg" alt="" />
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				{{-- <div class="contact-form-main">
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
				</div> --}}
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Start - Corona Contact Area -->
	<!-- =================

	@endsection