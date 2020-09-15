@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		
	<h1 class="h3 mb-0 text-gray-800">Quarantine List</h1><br>
	<a href="{{route('quarantines.create')}}" class="btn btn-success">Add New</a>
	</div>
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Type</th>
					<th>Addesss</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				 @php $i=1;@endphp
				@foreach($quarantines as $quarantine)
				<tr>
					<th>{{$i++}}</th>
					<td>{{$quarantine->type}}</td>
					<td>{{$quarantine->address}}</td>
					<td>
						<form action="{{route('quarantines.destroy',$quarantine->id)}}" method="post" onsubmit="return confirm('Are you Sure Want to Delete!')" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
						<a href="{{route('quarantines.edit',$quarantine->id)}}" class="btn btn-warning">Edit</a>
						<a href="#" class="btn btn-info">Detail</a>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection