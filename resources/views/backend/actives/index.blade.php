@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		
<<<<<<< HEAD
	<h1 class="h3 mb-0 text-gray-800">Active List</h1><br>
=======
	<h1 class="h3 mb-0 text-gray-800">Active Lists</h1><br>
>>>>>>> e86132e4c12831e7adb170f1678218a205beba17
	<a href="{{route('actives.create')}}" class="btn btn-success">Add New</a>
	</div>
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Date</th>
					<th>Qty</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				 @php $i=1;@endphp
				@foreach($actives as $active)
				<tr>
					<th>{{$i++}}</th>
					<td>{{$active->date}}</td>
					<td>{{$active->qty}}</td>
					<td>
						<form action="{{route('actives.destroy',$active->id)}}" method="post" onsubmit="return confirm('Are you Sure Want to Delete!')" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
						<a href="{{route('actives.edit',$active->id)}}" class="btn btn-warning">Edit</a>
						<a href="#" class="btn btn-info">Detail</a>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection