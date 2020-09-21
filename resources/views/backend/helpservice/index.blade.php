@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Helpservice List</h1>
		<a href="{{ route('helpservices.create') }}" class="btn btn-primary">Add New</a></div>

	<div class="row">
		<table class="table table-border">
			<thead class="thead">
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Address</th>
					<th>Time</th>
					<th>Opening Day</th>
					<th>Contact</th>
					{{-- <th>City Name</th> --}}
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1; @endphp
				@foreach($helpservices as $helpservice)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$helpservice->name}}</td>
					<td>{{$helpservice->address}}</td>
					<td>{{$helpservice->time}}</td>
					<td>{{$helpservice->opening_day}}</td>
					<td>{{$helpservice->contact}}</td>
					{{-- <td>{{$helpservice->$City->name}}</td> --}}
					<td><form action="{{route('helpservices.destroy',$helpservice->id)}}" method="post" onsubmit="return confirm('Are you Sure want to Delete!')" class="d-inline-block">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
					<a href="{{ route('helpservices.edit',$helpservice->id) }}" class="btn btn-primary">Edit</a>
					</td>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>

	@endsection