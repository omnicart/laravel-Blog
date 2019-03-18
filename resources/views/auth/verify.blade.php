@extends('user.app')

<!-- //Blog title starts Here -->
@section('title','Post Blog')
<!-- Blog Header title Starts here -->
@section('head-title','Login')
<!-- Blog subtitle starts here -->
@section('sub-heading','Login Here')
<!-- Blog Image Starts Here -->
@section('bg-img',asset('user/img/contact-bg.jpg'))

<!-- Blog Main Content Starts Here -->
 @section('main-content')
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
             <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div> 
        </div>
      </div>
    </div>
  </article>

  <hr>
 @endsection
























