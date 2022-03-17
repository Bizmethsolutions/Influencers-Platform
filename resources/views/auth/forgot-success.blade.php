@extends('layout.master2')

@section('content')
<style>
  input[type=email],input[type=password]{
    padding-left: 40px;
  }
  body{
    background-color: #ffffff;
  }
</style>
<title>Finsuite | Register</title>
<div class="row align-middle height100vh">
    
    <div class="col-md-6 bgcolor-white d-flex align-items-center justify-content-center" >
        
        <div class="col-md-8 offset-md-2 align-middle">
            <div class="card">
                <div class="auth-form-wrapper px-4 py-5">
                  
                    <h5 class="text-muted font-weight-bold mb-4 font-25 color-black">Yay! Email Sent</h5>
                    <div class="row mr-0 ml-0 padding-25" style="background-color:rgba(20,140,232,5%);">
                        <div class="col-md-2 my-auto pr-0">
                          <img src="{{ asset('images/checkmark.png') }}">
                        </div>
                        <div class="col-md-10 my-auto pl-0">
                          <span class="font-16 color-grey font-weight-bold">Success!</span><br>
                          <span class="font-14 color-grey">Please enter your email address and we will send you a password link.</span>
                        </div>

                        
                    </div>
                    <div class="font-16 color-grey padding-top-15">
                        If the email doesn't show up soon, check your spam folder. We sent it from <span class="font-weight-bold">support@finsuite.io</span>
                    </div>
                    <div class="mt-12 padding-top-10">
                      <button class="btn btn-primary mr-12 mb-12 mb-md-0 forgot-btn">RETURN TO LOGIN</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 d-flex align-items-center justify-content-center" style="background-image:url('{{ asset('images/loginbg.png') }}')">
      <div class="col-md-8 align-middle">
        <div class="col-md-12 text-center">
          <img src="{{ asset('images/logo.png') }}" >
        </div>
        <div class="col-md-12 text-center">
          <img src="{{ asset('images/loginbg1.png') }}" class="width-60">
        </div>
        <div class="col-md-12 text-center color-blue font-25" style="font-family: Rubik">
          Welcome to Finsuite
        </div>
        <div class="col-md-12 text-center color-blue font-16" style="font-family: Noto Sans">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer ,
        </div>
        
      </div>  
    </div>
</div>

@endsection