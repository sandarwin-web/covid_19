@extends('master')
@section('content')


<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="section_title center mb-5">
	<div class="section_title_thumb rotateme">
		<img src="{{ asset('front/images/lg.png')}}" alt="" />
	</div>
	<div class="section_title_content pt-2">
		
		<h2>Daily News</h2>
	</div>
</div>
<div class="row  ml-5 mr-5 badge-info">
	<div class="table-responsive">
		<table class="table">
			<thead class="badge-light">
				<tr>
					<th> Id </th>
					<th> Age </th>
					<th> Gender </th>
					<th> Address </th>
					<th> Date </th>
				</tr>
			</thead>
			<tbody id="#">
				
				@foreach ($positives as $positive)
				<tr>
					<td>{{ $positive->id }}</td>
					<td>{{ $positive->age }}</td>
					<td>{{ $positive->gender }}</td>
					<td>{{ $positive->address }}</td>
					<td>{{ $positive->date }}</td>
				</tr>
				@endforeach

			</tbody>
			
		</table>
	</div>
</div>



@endsection