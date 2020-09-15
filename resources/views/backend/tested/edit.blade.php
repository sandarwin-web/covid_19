@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Testeds Edit Form</h1>
		
	</div>
</div>
<div class="container">
	<div class="row">
		<form action="{{route('testeds.update',$tested->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputEmail3" name="date" value="{{$tested->date}}">
				</div>
			</div>

		<div class="form-group row{{$errors->has('qty')?'has-error':''}}">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Qty</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputEmail3" name="qty" value="{{$tested->qty}}">
					<span class="text-danger">{{$errors->first('qty')}}</span>
				</div>
			</div>
         <div class="form-group row">
			 <label for="inputPassword3" class="col-sm-2 col-form-label">City Name</label>
				<div class="col-sm-10">
					<select class="form-control form-control-md" id="inputBrand" name="city_id">
						<optgroup label="Choose subcategory">
							@foreach($cities as $city)
							<option value="{{$city->id}}">{{$city->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>

@endsection