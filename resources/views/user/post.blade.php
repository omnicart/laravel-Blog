@extends('user.app')

<!-- //Blog title starts Here -->
@section('title','Post Blog')
<!-- Blog Header title Starts here -->
@section('head-title',$post->title)
<!-- Blog subtitle starts here -->
@section('sub-heading',$post->subtitle)
<!-- Blog Image Starts Here -->
@section('bg-img',asset('user/img/post-bg.jpg'))

<!-- Blog Main Content Starts Here -->
 @section('main-content')
 		 <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
           <small><b>Created At:{{$post->created_at}}</b></small>
            @foreach($post->category as $category)
              <small style="padding-left:350px;">
                <b>Category :<u>{{$category->name}}</u></b>
              </small>
           @endforeach

           {{-- //Tag --}}

           {!!$post->body!!}
           <h3>Tag Clouds</h3>
              @foreach($post->tag as $tag)
              <small class="pull-left" style="padding:0px;border-radius: 5px;border:1px solid gray">
                <b>Tag :<u>{{$tag->name}}</u></b>
              </small>
         
           @endforeach 
        </div>
      </div>
    </div>
  </article>

  <hr>
 @endsection