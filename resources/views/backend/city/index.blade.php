@extends('backendtemplate')
@section('content')
<div class="container-fluid">

		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">City List</h1>
			 <a href="{{route('cities.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Now</a>
 	</div>
	</div>

 <div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Action</th>
					</tr>
				</thead>
				<tbody>
					 @php $i=1;@endphp
					@foreach($cities as $city)
					<tr>
						<td>{{$i++}}</td>
						
						<td>{{$city->name}}</td>
						
						<td><a href="{{route('cities.edit',$city->id)}}" class="btn btn-danger">Edit</button></a>
                        <form action="{{route('cities.destroy',$city->id)}}" method="post" onsubmit="return confirm('Are you Sure want to Delete!')">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

					<a href="{{route('cities.show',$city->id)}}" class="btn btn-primary">Detail</a></td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>					
</div>
</div>
</div> 


@endsection