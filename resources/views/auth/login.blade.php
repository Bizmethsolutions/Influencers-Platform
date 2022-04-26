@extends('layout.master2')

@section('content')
<title>Brand & Influencer | Login</title>
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{ asset('images/login/3.jpg') }}" alt="looginpage"></div>
    <div class="col-xl-7 p-0">    
      <div class="login-card">
        <div>
          <!-- <div><a class="logo text-start" href="index-2.html"><img class="img-fluid for-light" src="{{ asset('images/logo/login.png') }}" alt="looginpage"><img class="img-fluid for-dark" src="{{ asset('images/logo/logo_dark.png') }}" alt="looginpage"></a></div> -->
          <div class="login-main"> 
            <div class="row">
              <div class="col-md-4">
                <a href="{{ url('brand/login') }}"><button class="btn btn-primary">Brand Creator</button></a>
              </div>
              <div class="col-md-4">
                <a href="{{ url('agency/login') }}"><button class="btn btn-primary">Agency</button></a>
              </div>
              <div class="col-md-4">
                <a href="{{ url('influencer/login') }}"><button class="btn btn-primary">Influencer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection