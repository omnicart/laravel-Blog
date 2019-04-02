@extends('user.app')

<!-- //Blog title starts Here -->
@section('title','Post Blog')
<!-- Blog Header title Starts here -->
@section('head-title',$post->title)
<!-- Blog subtitle starts here -->
@section('sub-heading',$post->subtitle)
<!-- Blog Image Starts Here -->
@section('bg-img',Storage::disk('local')->url($post->image))

<!-- Blog Main Content Starts Here -->
 @section('main-content')
 <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=376373846286041&autoLogAppEvents=1"></script>
 		<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
           <small><b>Created At:{{$post->created_at}}</b></small>
            @foreach($post->category as $category)
              <small style="padding-left:350px;">
                <b>Category :<a href="{{route('category',$category->slug)}}"><u>{{$category->name}}</u></a></b>
              </small>
           @endforeach

           {{-- //Tag --}}

           {!!$post->body!!}
           <h3>Tag Clouds</h3>
              @foreach($post->tag as $tag)
             <a href="{{route('tag',$tag->slug)}}"> <small class="pull-left" style="padding:0px;border-radius: 5px;border:1px solid gray">
                <b>Tag :<u>{{$tag->name}}</u></b>
              </small></a>
           @endforeach 
        </div>
      <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5"></div>
      </div>
    </div>
  </article>

  <hr>
 @endsection