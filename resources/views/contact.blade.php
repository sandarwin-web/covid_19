
@extends('master')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<div class="contact_area pt-80 pb-70 bg_color2" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section_title center color_black mb-5">
					<div class="section_title_thumb rotateme">
						<img src="assets/images/lg.png" alt="" />
					</div>


					
						<div class="form-row">
							<div class="col-lg-2">
								<select name="city" class="form-control" id="city">
									<option selected disabled>Choose City</option>
									@foreach($cities as $city)
									<option value="{{$city->id}}">{{$city->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="col-lg-2">
								<input type="button" id="search" class="btn btn-success" value="Search">
							</div>
						</div>
					
					{{-- <form method="get" action="#" class="mt-2">
						<select class="mdb-select md-form" name="city_id">
						  <option value="" disabled selected>Choose your city</option>
						  <option value="1">1</option>
						  <option value="2">3</option>
						  <option value="3">7</option>
						</select>
					</form> --}}




					<div class="section_title_content pt-2">
						<h1>Help Service</h1><br>

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
							<tbody id="tbody">
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
							<tbody id="ttbody">
								
							</tbody>
						</table>



						<!-- ============================================================== -->
						<!-- Start - Corona Contact Now Area -->
						<!-- ============================================================== -->
						<div class="contact_now_area bg_color2 pt-80 pb-70">
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<div class="section_title center color_black mb-5">
											<div class="section_title_thumb rotateme">
												<img src="{{ asset('front/images/lg.png')}}" alt="" />
											</div>
											<div class="section_title_content pt-2">
												<h2>Contact Now</h2>
												<p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Also the symptoms may appear 2-14 days after exposure.</p>
											</div>
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
						</div>
					</div>	
				</div>
			</div>	
		</div>
	</div>
</div>	

</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
		$('#ttbody').hide();
		$('#search').click(function(){
			$('#tbody').hide();
			var city = $('#city').val();
			//alert(city);
			$.post('searchhelp',{city:city},function(response){
				console.log(response.help);
				if(response.help.length > 0){
					var html = ''; var j=1;
				$.each(response.help,function(i,v){
					html+=`<tr>
					<td>${j++}</td>
					<td>${v.name}</td>
					<td>${v.address}</td>
					<td>${v.time}</td>
					<td>${v.opening_day}</td>
					<td>${v.contact}</td>
					</tr>`;

				});
				$('#ttbody').html(html);
				$('#ttbody').show();
			}else{
				$('#tbody').show();
				$('#ttbody').hide();
			}
			})
		})
	})
</script>
@endsection