@extends('layout.influencermaster')
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
             Profile</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index-2.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Profile</li>
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
        <form class="theme-form m-t-20 m-b-20" method="POST" action="{{ url('influencer/profile-update')}}">
            @if(Session::get('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{Session::get('error')}}
              </div>
            @endif
            <h4>Edit your account details</h4>
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-form-label">Influencer Name</label>
                  <input class="form-control" value="{{ $data->name }}" type="text" required="" name="name" placeholder="Test@gmail.com">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-form-label">Email Address</label>
                  <input class="form-control" value="{{ $data->email }}" type="email" required="" readonly placeholder="Test@gmail.com">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-form-label">Location</label>
                  <select class="form-control" name="location" required>
                    <option value="">Select Location</option>
                    <option value="USA"  {{ ($data->location) == 'USA' ? 'selected' : '' }}  >USA</option>
                    <option value="France" {{ ($data->location) == 'France' ? 'selected' : '' }}>France</option>
                    <option value="Germany" {{ ($data->location) == 'Germany' ? 'selected' : '' }}>Germany</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-form-label">Age</label> 
                  <input class="form-control" value="{{ $data->age }}" type="number" name="age" min="13" max="70" required="" name="age" placeholder="Eg: 18">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-form-label">Gender</label>
                  <select class="form-control" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male" {{ ($data->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ ($data->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Other" {{ ($data->gender) == 'Other' ? 'selected' : '' }}>Other</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <label class="col-form-label">Field Of Interest</label>
                @php 
                  $foiselected=explode(',', $data->foi);  
                @endphp
                
                <select class="form-control js-example-basic-multiple" name="foi[]" multiple="multiple">
                  
                  @foreach ($foi as $val)
                      <option value="{{ $val->name }}" @if (in_array($val->name, $foiselected)) selected @endif>{{ $val->name }}</option>
                  @endforeach
                </select> 
              </div> 
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-form-label">Followers</label>
                  @if(!empty($data->followers))
                    <input type="number" class="form-control" name="followers" value="{{ $data->followers }}">
                  @else
                    <input type="number" class="form-control" name="followers" value="">
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <label class="col-form-label">Influencer Brands</label>
                @if(!empty($data->followers))
                  <input type="text" class="form-control" name="brands" value="{{ $data->brands }}">
                @else
                  <input type="text" class="form-control" name="brands" value="">
                @endif
              </div> 
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-form-label">Language</label>
                        <select class="form-control" name="language" required>
                            <option value="">Select Language</option>
                            <option value="English"  {{ ($data->language) == 'English' ? 'selected' : '' }}  >English</option>
                            <option value="Hindi" {{ ($data->language) == 'Hindi' ? 'selected' : '' }}>Hindi</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-form-label">City</label>
                        <input type="text" class="form-control" name="city" value="{{ $data->city }}" required>
                    </div>
                </div>
            </div>

            {!! csrf_field() !!}
            <div class="row">
              <div class="form-group mb-0">
                <button class="btn btn-primary" type="submit">Update</button>
              </div>
            </div>
            
          </form>
      </div>
    </div>
  </div>
@endsection