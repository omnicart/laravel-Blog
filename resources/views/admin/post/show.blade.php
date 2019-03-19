@extends('admin.layouts.app')

@section('head-section')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

  
@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Post</h3>
          <a href="{{ route('post.create') }}" class="col-lg-offset-5 btn btn-success">Add New</a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
             <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No</th>
                  <th>Title</th>
                  <th>SubTitle</th>
                  <th>Slug</th>
                  <th>Created At</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->subtitle}}</td>
                  <td>{{$post->slug}}</td>
                  <td>{{$post->created_at->diffForHumans()}}</td>
                  <td><a href="{{ route('post.edit',$post->id) }}"><span class="fa fa-edit"></span></a></td>
                  <td>
                   <form class="form-group pull-right" action="{{ route('post.destroy',$post->id) }}" method="post" id="Delete-form-{{$post->id}}">
                      {{csrf_field()}}  
                   
                    @method('DELETE')
                  </form>
                   <a href=""  onclick="if(confirm('Are You want to Delete?')){event.preventDefault();document.getElementById('Delete-form-{{$post->id}}').submit();}else{event.preventDefault();}"><span class="fa fa-trash-o"></span></a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                 <tr>
                  <th>Sr. No</th>
                  <th>Title</th>
                  <th>SubTitle</th>
                  <th>Slug</th>
                  <th>Created At</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  @endsection


  @section('footer-section')
  <script type="text/javascript" src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

  <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
  @endsection