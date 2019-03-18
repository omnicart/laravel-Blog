@extends('admin.layouts.app')

@section('head-content')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">
@endsection

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
         <!-- /.box --><div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Post</h3>
            </div>
          @include('include.message')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('post.store') }}" method="post" enctype="multpart/form-data">
              @csrf
              <div class="box-body">
                <!-- title start here -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">Post Title</label>
                  <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                </div>
                <!-- subtitle here -->
                 <div class="form-group">
                  <label for="subtitle">Post Sub Title</label>
                  <input type="text" class="form-control" id="subtitle" placeholder="SubTitle" name="subtitle">
                </div>
                <!-- //slug -->
                 <div class="form-group">
                  <label for="slug">Post Slug</label>
                  <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug">
                </div>
              </div>
                <!-- //file (img) -->
               <div class="col-lg-6">
                  <br>
                  <div class="form-group">
                    <div class="pull-right">
                      <label for="image">File input</label>
                       <input type="file" name="image">
                    </div>
                    <div class="checkbox pull-left" >
                      <label>
                        <input type="checkbox" name="status" value="1">Publish
                      </label>
                    </div>
                  </div>
                <!-- pulich or not -->
                <br>
           
              <div class="form-group" style="margin-top: 18px">
                <label>Select Tags</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                  @foreach($tag as $tags)
                  <option value="{{$tags->id}}">{{$tags->name}}</option>
                  @endforeach
                </select>
              </div>


                <div class="form-group" style="margin-top: 18px">
                <label>Select Category</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="category[]">
                  @foreach($categories  as $category)
                  <option  value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>

                </div>
              </div>

              <!-- /.box-body -->
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Write Post Body Here
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
             
                <textarea class="textarea" name="body" placeholder="Place some text here" id="editor1"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
             
            </div>
          </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" href="{{route('post.index')}}" class="btn btn-warning">Back</a>
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

   @section('footer-content')
<script type="text/javascript" src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script src="//cdn.ckeditor.com/4.11.3/full/ckeditor.js"></script>
<script type="text/javascript">
  
   $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })


  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })

</script>
  @endsection