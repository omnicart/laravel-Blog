@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tag</h3>
              </div>
            <!-- /.box-header -->
            <!-- form start --> 
            <form role="form" action="{{ route('user.store') }}" method="post">
              @csrf
              <div class="box-body">
                <!-- title start here -->
              <div class="col-lg-6 col-lg-offset-4">
                <div class="form-group">
                  @if($errors->has('name'))
                  <p class="alert alert-danger">  {{$errors->first('name')}}</p>
                  @endif
                  <label for="name">User Name</label>
                  <input type="text" class="form-control" id="name" placeholder="User Name" name="name">
                </div>
               
                 <div class="form-group">
                  <label for="email">Admin Email</label>
                  @if($errors->has('email'))
                  <p class="alert alert-danger">  {{$errors->first('email')}}</p>
                  @endif
                  <input type="text" class="form-control" id="slug" placeholder="Email" {{-- value="{{old('slug')}}" --}} name="email">
                </div>
                 <div class="form-group">
                  <label for="slug">Admin Mobile No</label>
                  @if($errors->has('phone'))
                  <p class="alert alert-danger">  {{$errors->first('phone')}}</p>
                  @endif
                  <input type="tel" class="form-control" id="slug" placeholder="Mobile No" {{-- value="{{old('slug')}}" --}} name="phone">
                </div>
                <div class="form-group">
                  <label for="slug">Admin Password</label>
                  @if($errors->has('password'))
                  <p class="alert alert-danger">  {{$errors->first('password')}}</p>
                  @endif
                  <input type="password" class="form-control" id="password" placeholder="password"  data-toggle="password" {{-- value="{{old('slug')}}" --}} name="password">
                </div>
                 <div class="form-group">
                  <label for="slug">Admin Confirm Password</label>
                  @if($errors->has('password_confirmation'))
                  <p class="alert alert-danger">  {{$errors->first('password_confirmation')}}</p>
                  @endif
                  <input type="password" class="form-control" id="slug" placeholder="confirm password" {{-- value="{{old('slug')}}" --}} name="password_confirmation">
                </div>
                 <div class="form-group col-lg-12">
                  @foreach($roles as $data)
                   <div class="col-lg-4">
                    <div class="checkbox">
                       <label><input type="checkbox" name="roles[]" value="{{$data->id}}">{{$data->name}}</label>
                    </div>
                  </div>
                  @endforeach
                 </div>
                 <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a type="button" href="{{route('user.index')}}" class="btn btn-warning">Back</a>
               </div>
              </div>
             </div>
            </form>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>


@endsection