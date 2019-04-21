@extends('ajlayout.app');
@section('title','edit view');

@section('main-content')
	 <div class="container">
	 	@if(count($errors)>0)
	 		@foreach($errors->all() as $error)
	 		<p class="alert alert-danger">{{$error}}</p>
	 		@endforeach
	 	@endif
      <h2>Passport Appointment System</h2><br/>
      <form method="post" action="{{ url('/ajinkya/crud/'.$data->id) }}">
        @method('PATCH')
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email" value="{{$data->email}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Phone Number:</label>
              <input type="text" class="form-control" name="number" value="{{$data->number}}"> 
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
@endsection