@extends('layout.master2')

@section('content')
<title>Brands Login | BI</title>
<style>
  .checkbox input[type="checkbox"]:checked+label::before{
    content: '✓';
  }
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{ asset('images/login/3.jpg') }}" alt="looginpage"></div>
    <div class="col-xl-7 p-0">    
      <div class="login-card">
        <div>
          <div class="login-main"> 
            <form class="theme-form" method="POST" action="{{ url('brand-login')}}">
              @if(Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{Session::get('error')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
              @endif
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
                  <div class="show-hide"><span class="show"></span></div>
                </div>
              </div>
              {!! csrf_field() !!}
              <div class="form-group mb-0">
                <div class="checkbox p-0">
                  <input id="checkbox1" required type="checkbox">
                  <label class="text-muted" for="checkbox1">Remember password</label>
                </div>
                <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
              </div>
              <h6 class="text-muted mt-4 or">Or Sign in with</h6>
              <div class="social mt-4">
                {{-- <div class="btn-showcase">
                  <a class="btn btn-light" href="https://www.instagram.com/" target="_blank"><i class="txt-instagram" data-feather="instagram"></i> Instagram </a>
                </div> --}}
              </div>
              <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{ url('brand/register') }}">Create Account</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection