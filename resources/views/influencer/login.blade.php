@extends('layout.master2')

@section('content')
<title>Influencer Login | BI</title>
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
            <form class="theme-form" method="POST" action="{{ url('influencer-login')}}">
              @if(Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{Session::get('error')}}
                </div>
              @endif
              <h4>Sign in to account</h4>
              <p>Enter your personal details to create account</p>
                  
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" required="" name="email" placeholder="Test@gmail.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" id="myInput" type="password" name="password" required="" placeholder="*********">
                      <div class="show-hide"><span onclick="passshow()" class="show"></span></div>
                    </div>
                  </div>
                  {!! csrf_field() !!}
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox" required>
                      <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy Policy</a></label>
                    </div>
                    <button class="btn btn-primary btn-block w-100" type="submit">Login</button>
                  </div>
                  <h6 class="text-muted mt-4 or">Or signin with</h6>
              <div class="social mt-4">
                <div class="btn-showcase">
                
                <a class="btn btn-light" href="{{ url('auth/facebook') }}" ><i class="txt-instagram" data-feather="instagram"></i> Login With Instagram </a>
                  <!-- <a class="btn btn-light" href="https://api.instagram.com/oauth/authorize?client_id=562376548522549&redirect_uri=https://bizmeth.co.in/BI/login/instagram/callback&scope=user_profile,user_media&response_type=code" target="_blank"><i class="txt-instagram" data-feather="instagram"></i> Login With Instagram </a> -->
                </div>
                <p class="mt-4 mb-0 text-center">Don`t have an account?<a class="ms-2" href="{{ url('influencer/register')}}">Sign Up</a></p>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
<script type="text/javascript">
  function passshow() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>