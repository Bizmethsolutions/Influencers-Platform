@extends('layout.agencymaster')
@section('content')
<style>
    .form-control{
        min-height:47px;
    }
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
    </style>
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>
             Create Protfolio</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index-2.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Create Portfolio</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  @if(session()->has('success'))
      <div class="alert alert-success">
          {{ session()->get('success') }}
      </div>
  @endif
  @if(session()->has('error'))
      <div class="alert alert-danger">
          {{ session()->get('error') }}
      </div>
  @endif
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row size-column">
      <div class="col-xl-12 box-col-12 xl-100">
        <form class="theme-form" method="POST" action="{{ url('agency/createBrands')}}">
            @if(Session::get('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{Session::get('error')}}
              </div>
            @endif
            <h4>Add brand details</h4>
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-form-label">Brand Name</label>
                  <input class="form-control" value="" type="text" required="" name="name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-form-label">Email Address</label>
                  <input class="form-control" value="" type="email" required="" name="email" placeholder="Test@gmail.com">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-form-label">Brand Type</label> 
                  <input class="form-control" value="" type="text" name="brand_type" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-form-label">Brand Language</label> 
                  <input class="form-control" value="" type="text" required="" name="language">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-form-label">Brand City</label> 
                  <input class="form-control" value="" type="text" name="city" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-form-label">Brand Agency</label> 
                  <input class="form-control" value="" type="text" required="" name="agency">
                </div>
              </div>
            </div>

            {!! csrf_field() !!}
            <div class="row" style="margin-top: 10px;">
              <div class="form-group mb-0">
                <button class="btn btn-primary btn-block" type="submit">Submit</button>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
@endsection