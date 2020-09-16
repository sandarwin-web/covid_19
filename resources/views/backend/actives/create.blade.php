@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<form action="{{route('actives.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<h1 class="h3 mb-0 text-gray-800">Active Create Form</h1><br>
			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Date</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="date">
					<span class="text-danger">{{$errors->first('type')}}</span>
				</div>
			</div>

			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Qty</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="qty">
					<span class="text-danger">{{$errors->first('address')}}</span>
				</div>
			</div>

            <div class="form-group row">
				<label  class="col-sm-2 col-form-label">City Name</label>
				<div class="col-sm-10">
				<select class="form-control" id="inputBrand" name="city_id">
					<optgroup label="Choose category">
						@foreach($cities as $city)
							<option value="{{$city->id}}">
							{{$city->name}}
							</option>
						@endforeach
					</optgroup>
				</select>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-info">Create</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection