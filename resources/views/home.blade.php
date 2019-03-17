@extends('user.app')

<!-- //Blog title starts Here -->
@section('title','Post Blog')
<!-- Blog Header title Starts here -->
@section('head-title','Register')
<!-- Blog subtitle starts here -->
@section('sub-heading','Register Here')
<!-- Blog Image Starts Here -->
@section('bg-img',asset('user/img/about-bg.jpg'))

<!-- Blog Main Content Starts Here -->
 @section('main-content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        Welcome {{auth::user()->name}}
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection






