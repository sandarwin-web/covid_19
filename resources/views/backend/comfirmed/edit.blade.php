@extends('backendtemplate')
@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Comfirmed Edit Form</h1></div>
  <div class="row">
  <form action="{{route('comfirmeds.update',$comfirmed->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  
  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputName3" name="date" value="{{$comfirmed->date}}">
      {{-- <span class="text-danger">{{$errors->first('date')}}</span> --}}
    </div>
  </div>

  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Qty</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" name="qty" value="{{$comfirmed->qty}}">
      {{-- <span class="text-danger">{{$errors->first('qty')}}</span> --}}
    </div>
  </div>

  


  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">City Name</label>
    <div class="col-sm-10">
     <select class="form-control form-control" id="inputcategory" name="city_id" required="required">
      <optgroup label="Choose category">
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

@endsection