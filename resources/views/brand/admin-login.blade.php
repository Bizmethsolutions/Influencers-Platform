@extends('layout.master2')

@section('content')
<title>Brand & Influencer | CMS Login</title>
<div class="container-fluid p-0">
    <div class="row m-0">
      <div class="col-12 p-0">    
        <div class="login-card">
          <div>
            <div><a class="logo" href="index-2.html"><img class="img-fluid for-light" src="{{ asset('images/logo/login.png') }}" alt="looginpage"><img class="img-fluid for-dark" src="{{ asset('images/logo/logo_dark.png') }}" alt="looginpage"></a></div>
            <div class="login-main"> 
              <form class="theme-form" method="POST" action="{{ url('/cms-login') }}">
                <h4>Sign in to account</h4>
                <p>Enter your email & password to login</p>
                <div class="form-group">
                  <label class="col-form-label">Email Address</label>
                  <input class="form-control" type="email" required="" name="email" placeholder="Test@gmail.com">
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <div class="form-input position-relative">
                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                    <div class="show-hide"><span class="show">                         </span></div>
                  </div>
                </div>
                {!! csrf_field() !!}
                <div class="form-group mb-0">
                  {{-- <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Remember password</label>
                  </div><a class="link" href="forget-password.html">Forgot password?</a> --}}
                  <div class="text-end mt-3">
                    <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection