@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Comfirmed List</h1>
		<a href="{{ route('comfirmeds.create') }}" class="btn btn-primary">Add New</a>
	</div>
	<div class="row">
			<table class="table table-border">
				<thead class="thead">
					<tr>
						<th>No</th>
						<th>Date</th>
						<th>Qty</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach($comfirmeds as $comfirmed)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$comfirmed->date}}</td>
						<td>{{$comfirmed->qty}}</td>
						
						<td><form action="{{route('comfirmeds.destroy',$comfirmed->id)}}" method="post" onsubmit="return confirm('Are you Sure want to Delete!')" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
						<a href="{{ route('comfirmeds.edit',$comfirmed->id) }}" class="btn btn-primary">Edit</a>
					<a href="{{route('comfirmeds.show',$comfirmed->id)}}" class="btn btn-primary">Detail</a></td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
		
@endsection