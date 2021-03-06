
@extends('master')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>

<div class="section_title center color_black mb-5">
	<div class="section_title_thumb rotateme">
		<img src="assets/images/lg.png" alt="" />
	</div>
	<div class="form-row">
		<div class="col-lg-2 ml-5" >
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

	<div class="section_title_content pt-2">
		<h1 class="text-light">Help Service</h1><br>
	</div>
	<div class="row  ml-5 mr-5 badge-info">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead class="badge-light">
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
		</div>
	</div>
</div>

<div class="section_title center mb-5">
	<div class="section_title_thumb rotateme">
		<img src="{{ asset('front/images/lg.png')}}" alt="" />
	</div>
	<div class="form-row">
		<div class="col-lg-2  ml-5">
			<select name="city" class="form-control" id="cityquat">
				<option selected disabled>Choose City</option>
				@foreach($cities as $city)
				<option value="{{$city->id}}">{{$city->name}}</option>
				@endforeach
			</select>
		</div>
		<div class="col-lg-2">
			<input type="button" id="searchqarantine" class="btn btn-success" value="Search">
		</div>
	</div>
	<div class="section_title_content pt-2">
		<h1 class="text-light">Quarantines Place</h1><br>
	</div>

	<div class="row  ml-5 mr-5 badge-info">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead class="badge-light">
					<tr>
						<th scope="col">No.</th>
						<th scope="col">Name</th>
						<th scope="col">Type</th>
						<th scope="col">Address</th>
						<th scope="col">Contact</th>
					</tr>
				</thead>
				<tbody id="bodyt">
					@foreach ($quarantines  as $quarantine)
					<tr>
						<th>{{ $quarantine->id }}</th>
						<th>{{ $quarantine->name }}</th>
						<th>{{ $quarantine->type }}</th>
						<th>{{$quarantine->address}}</th>
						<th>{{ $quarantine->contact}}</th>
					</tr>
					@endforeach
				</tbody>
				<tbody id="bodytt">

				</tbody>
			</table>
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


		$('#searchqarantine').click(function(){
			$('#bodyt').hide();
			var city = $('#cityquat').val();
			//alert(city);
			$.post('searchquarant',{city:city},function(response){
				console.log(response.quarant);
				if(response.quarant.length > 0){
					var html = ''; var j=1;
					$.each(response.quarant,function(i,v){
						html+=`<tr>
						<td>${j++}</td>
						<td>${v.name}</td>
						<td>${v.type}</td>
						<td>${v.address}</td>
						<td>${v.contact}</td>
						</tr>`;

					});
					$('#bodytt').html(html);
					$('#bodytt').show();
				}else{
					$('#bodyt').show();
					$('#bodytt').hide();
				}
			})
		})

	})
</script>
@endsection



