@extends('layout.agencymaster')
@section('content')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">


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
        <table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                  <th>Name</th>
                  <th>Language</th>
                  <th>City</th>
                  <th>Email</th>
                  <th>Brand Type</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $value)
                <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->language }}</td>
                    <td>{{ $value->city }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->brand_type }}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection