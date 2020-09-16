@extends('backendtemplate')
@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Helpservice Create Form</h1></div>
  <div class="row">
  <form action="{{route('helpservices.update',$helpservice->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
  @method('PUT')
  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" name="name" value="{{$helpservice->name}}" >
      <span class="text-danger">{{$errors->first('name')}}</span>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" name="address" value="{{$helpservice->address}}" >
      <span class="text-danger">{{$errors->first('address')}}</span>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Time</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" name="time" value="{{$helpservice->time}}">
      <span class="text-danger">{{$errors->first('time')}}</span>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Opening Day</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" name="opening_day" value="{{$helpservice->opening_day}}">
      <span class="text-danger">{{$errors->first('opening_day')}}</span>
    </div>
  </div>

<div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Contact</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" name="contact" value="{{$helpservice->contact}}">
      <span class="text-danger">{{$errors->first('contact')}}</span>
    </div>
  </div>


<div class="form-group">
  <label for="inputName3" class="col-sm-2 col-form-label">City Name</label>
  <select class="form-control form-control" id="inputcategory" name="city_id" >
    <optgroup label="Choose category">
      @foreach($cities as $city)
      <option value="{{$city->id}}">{{$city->name}}</option>
      @endforeach
    </optgroup>
  </select></div>

 

  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
</div>
</div>

@endsection