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
            <form role="form" action="{{ route('role.update',$role->id) }}" method="post">
              @csrf
              @method('PUT')
              <div class="box-body">
                <!-- title start here -->
              <div class="col-lg-6 col-lg-offset-4">
                <div class="form-group">
                  @if($errors->has('name'))
                  <p class="alert alert-danger">  {{$errors->first('name')}}</p>
                  @endif
                  <label for="name">role Title</label>
                  <input type="text" class="form-control" id="name" placeholder="role Title" name="name" value="{{$role->name}}">
                </div>
               
                 <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a type="button" href="{{route('role.index')}}" class="btn btn-warning">Back</a>
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