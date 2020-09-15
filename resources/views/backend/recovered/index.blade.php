@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Recovered list</h1>
		<a href="{{ route('recovereds.create') }}" class="btn btn-primary">Add New</a>
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
					@foreach($recovereds as $recovered)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$recovered->date}}</td>
						<td>{{$recovered->qty}}</td>
						
						<td><form action="{{route('recovereds.destroy',$recovered->id)}}" method="post" onsubmit="return confirm('Are you Sure want to Delete!')" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
						<a href="{{ route('recovereds.edit',$recovered->id) }}" class="btn btn-primary">Edit</a>
					<a href="{{route('recovereds.show',$recovered->id)}}" class="btn btn-primary">Detail</a></td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
		
@endsection