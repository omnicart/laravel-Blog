@extends('ajlayout.app');
@section('title','show view');

@section('main-content')
<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
			<h1>{{$data->name}}</h1>
			<p>{{$data->number}}</p>
			</div>
		</div>
	</div>
@endsection