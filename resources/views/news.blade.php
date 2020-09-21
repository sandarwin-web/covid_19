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
		<h2>Positive Cases</h2>
	</div>
	<form method="get" action="#" class="mt-2 ml-5">
		<div class="form-row">
			<div class="col-lg-2">
				<input type="date" class="form-control" placeholder="date" name="date">
			</div>
			<div class="col-lg-2">
				<input type="submit" class="btn btn-success" value="Search">
			</div>
		</div>
	</form>
</div>
<div class="row  ml-5 mr-5 badge-info">
	<div class="table-responsive">
		<table class="table">
			<thead class="badge-light">
				<tr>
					<th> No </th>
					<th> Case </th>
					<th> Age </th>
					<th> Gender </th>
					<th> Address </th>
					<th> Date </th>
				</tr>
			</thead>
			<tbody id="#">
				@php $i=1;@endphp
				@foreach ($positives as $positive)
				<tr>
					<td>{{$i++}}</td>
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