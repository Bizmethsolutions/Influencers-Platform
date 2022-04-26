@extends('layout.master2')

@section('content')
<style>
  .select2-container--default .select2-selection--multiple .select2-selection__choice__display{
    padding-left: 10px;
  }
  .select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
    margin-left: 0px;
    border-right: 0px;
  }
  
  .select2-container--default.select2-container--focus .select2-selection--multiple{
    min-height: 47px !important;
  }
  .select2-container--default .select2-selection--multiple .select2-selection__choice{
    margin-top: 5px !important;
  }
  .select2-container--default .select2-selection--multiple{
    min-height: 47px;
  }
  .form-control{
    min-height: 47px;
  }
</style>
<style>
  .checkbox input[type="checkbox"]:checked+label::before{
    content: '✓';
  }
</style>
<title>Influencer Register | BI</title>
<div class="container-fluid p-0"> 
      <div class="row m-0">
        <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{ asset('images/login/3.jpg') }}" alt="looginpage"></div>
        <div class="col-xl-7 p-0"> 
          <div class="login-card">
            <div>
              
              <div class="login-main"> 
                <form class="theme-form" method="POST" action="{{ url('influencer-register')}}">
                  @if(Session::get('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{Session::get('error')}}
                    </div>
                  @endif
                  <h4>Create your account</h4>
                  <p>Enter your personal details to create account</p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-form-label">Influencer Name</label>
                        <input class="form-control" type="text" required="" name="name" placeholder="Test@gmail.com">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-form-label">Email Address</label>
                        <input class="form-control" type="email" required="" name="email" placeholder="Test@gmail.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-form-label">Location</label>
                        <select class="form-control" name="location" required>
                          <option value="">Select Location</option>
                          <option value="USA">USA</option>
                          <option value="France">France</option>
                          <option value="Germany">Germany</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-form-label">Age</label> 
                        <input class="form-control" type="number" name="age" min="18" max="70" required="" name="age" placeholder="Eg: 18">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-form-label">Gender</label>
                        <select class="form-control" name="gender" required>
                          <option value="">Select Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label class="col-form-label">Field Of Interest</label>
                      <select class="form-control js-example-basic-multiple" name="foi[]" multiple="multiple">
                        
                        @foreach ($foi as $val)
                            <option value="{{ $val->name }}">{{ $val->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" required="" placeholder="*********">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  {{-- <div class="form-group">
                    <label class="col-form-label">Confirm Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="cpassword" required="" placeholder="*********">
                      <!-- <div class="show-hide"><span class="show"></span></div> -->
                    </div>
                  </div> --}}
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
                  <div class="btn-showcase">
                    <a class="btn btn-light" href="{{ url('auth/facebook') }}" ><i class="txt-instagram" data-feather="instagram"></i> Login With Instagram </a>
                  </div>
                  </div>
                  <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="{{ url('influencer/login')}}">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
@endsection
