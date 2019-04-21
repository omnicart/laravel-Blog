@extends('ajlayout.app');
@section('title','home view');

@section('main-content')
<div class="container">
	@if(Session::has('msg'))
	<p class="alert alert-success">{{session::get('msg')}}</p>

	@endif
		<div class="row">
			<div class="col-md-6 col-md-offset-4">
				<a class="btn btn-primary" href="/ajinkya/crud/create">ADD NEW</a><br><br>
				<ul class="list-group col-lg-8">
					@foreach($data as $crud)
  					<li class="list-group-item"><a href="{{url('ajinkya/crud',$crud->id)}}">{{$crud->name}} </a><span class="badge">{{$crud->created_at->diffforHumans()}}</span></li>
  					@endforeach
				</ul>


			<ul class="list-group col-lg-3">
				@foreach($data as $crud)
  			<li class="list-group-item">
  				<a href="{{'/ajinkya/crud/'.$crud->id.'/edit'}}"> <span class="glyphicon glyphicon-edit"></span></a>
  			<form class="form-group pull-right" action="{{'/ajinkya/crud/	'.$crud->id}}" method="post">
  				@csrf
  					<input type="hidden" name="_method" value="DELETE">
         
  				<button type="submit" style="border:none;">  <i class="glyphicon glyphicon-trash"></i></button>
  			</form>
  			</li> 
  		@endforeach
		</ul>

			</div>
		</div>
	</div>
@endsection