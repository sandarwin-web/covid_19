@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		
	<h1 class="h3 mb-0 text-gray-800">Positive Lists</h1><br>
	<a href="{{route('positives.create')}}" class="btn btn-success">Add New</a>
	</div>
	<div class="table-responsive">
		<table class="table" id="dataTable">
			<thead>
				<tr>
					<th>No</th>
					<th>Case No</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Address</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				 @php $i=1;@endphp
				@foreach($positives as $positive)
				<tr>
					<th>{{$i++}}</th>
					<td>{{$positive->id}}</td>
					<td>{{$positive->age}}</td>
					<td>{{$positive->gender}}</td>
					<td>{{$positive->address}}</td>
					<td>{{$positive->date}}</td>
					<td>
						<form action="{{route('positives.destroy',$positive->id)}}" method="post" onsubmit="return confirm('Are you Sure Want to Delete!')" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
						<a href="{{route('positives.edit',$positive->id)}}" class="btn btn-warning">Edit</a>
											</td>
				</tr>

				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection