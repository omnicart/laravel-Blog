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
	              <h3 class="box-title">Category</h3>
	            </div>
            <!-- /.box-header -->
            <!-- form start -->
             @include('include.message')
            <form role="form" action="{{ route('category.store') }}" method="post">
              @csrf
              <div class="box-body">
                <!-- title start here -->
              <div class="col-lg-6 col-lg-offset-4">
                <div class="form-group">
                  <label for="name">Category Title</label>
                  <input type="text" class="form-control" id="name" placeholder="Category Title" name="name">
                </div>
               
                 <div class="form-group">
                  <label for="slug">Category Slug</label>
                  <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug">
                </div>
                 <div class="form-group text-center">
               	  <button type="submit" class="btn btn-primary">Submit</button>
                  <a type="button" href="{{route('category.index')}}" class="btn btn-warning">Back</a>
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