@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->

{{-- <div class="row">
	<div class="col-md-12"> --}}
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Tested List</h1>
			 <a href="{{route('testeds.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Now</a>
 	</div>
	</div>

 <div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
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
					@foreach($testeds as $tested)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$tested->date}}</td>
						<td>{{$tested->qty}}</td>
						<td><a href="{{route('testeds.edit',$tested->id)}}" class="btn btn-success">Edit</button></a>
							
                        <form action="{{route('testeds.destroy',$tested->id)}}" method="post" onsubmit="return confirm('Are you Sure want to Delete!')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
							<a href="{{route('testeds.show',$tested->id)}}" class="btn btn-primary">Detail</a></td>
								</tr>
								@endforeach 
							</tbody>
						</table>
					</div>
				</div>
			</div>
</div> 

@endsection