@extends('user.app')
<!-- //Blog title starts Here -->
@section('title','Clean Blog')
<!-- Blog Header title Starts here -->
@section('head-title','Clean Blog')
<!-- Blog subtitle starts here -->
@section('sub-heading','A Blog Theme by Starts Bootstrap')
<!-- Blog Image Starts Here -->
@section('bg-img',asset('user/img/home-bg.jpg'))

<!-- Blog Main Content Starts Here -->
@section('main-content')
	 <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($post as $data)
        <div class="post-preview">
          <a href="{{route('post',$data->slug)}}">
            <h2 class="post-title">
             {{$data->title}}
            </h2>
            <h3 class="post-subtitle">
            {{$data->subtitle}}
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on {{$data->created_at->diffForHumans()}}</p>
        </div>
        <hr>
        @endforeach
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>
@endsection