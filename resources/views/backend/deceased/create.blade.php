@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Deceased Create Form</h1>
		
	</div>
</div>
<div class="container">
	<div class="row">
		<form action="{{route('deceaseds.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			
		<div class="form-group row{{$errors->has('date')?'has-error':''}}">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="inputEmail3" name="date">
					<span class="text-danger">{{$errors->first('date')}}</span>
				</div>
			</div>
		<div class="form-group row{{$errors->has('qty')?'has-error':''}}">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Qty</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputEmail3" name="qty">
					<span class="text-danger">{{$errors->first('qty')}}</span>
				</div>
			</div>
         <div class="form-group row">
			 <label for="inputPassword3" class="col-sm-2 col-form-label">City_id</label>
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
					<button type="submit" class="btn btn-primary">Create</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>

@endsection