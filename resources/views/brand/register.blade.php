@extends('layout.master2')

@section('content')
<title>Brands Register | BI</title>
<style>
  .checkbox input[type="checkbox"]:checked+label::before{
    content: '✓';
  }
</style>
<div class="container-fluid p-0"> 
      <div class="row m-0">
        <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{ asset('images/login/3.jpg') }}" alt="looginpage"></div>
        <div class="col-xl-7 p-0"> 
          <div class="login-card">
            <div>
              
              <div class="login-main"> 
                <form class="theme-form" method="POST" action="{{ url('brand-register')}}">
                  @if(Session::get('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{Session::get('error')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                  @endif
                  <h4>Create your account</h4>
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
                    <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
                  </div>
                  <h6 class="text-muted mt-4 or">Or signup with</h6>
                  <div class="social mt-4">
                    {{-- <div class="btn-showcase">
                      <a class="btn btn-light" href="https://www.instagram.com/" target="_blank"><i class="txt-instagram" data-feather="instagram"></i> Instagram </a>
                    </div> --}}
                  </div>
                  <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="{{ url('brand/login')}}">Sign in</a></p>
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