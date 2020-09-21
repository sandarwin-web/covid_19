@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->

{{-- <div class="row">
	<div class="col-md-12"> --}}
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Deceased List</h1>
			 <a href="{{route('deceaseds.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Now</a>
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
					@foreach($deceaseds as $deceased)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$deceased->date}}</td>
						<td>{{$deceased->qty}}</td>
						<td><a href="{{route('deceaseds.edit',$deceased->id)}}" class="btn btn-success">Edit</button></a>
							
                        <form action="{{route('deceaseds.destroy',$deceased->id)}}" method="post" onsubmit="return confirm('Are you Sure want to Delete!')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
							</td>
								</tr>
								@endforeach 
							</tbody>
						</table>
					</div>
				</div>
			</div>
</div> 

@endsection