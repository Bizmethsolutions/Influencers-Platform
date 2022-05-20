@extends('layout.influencermaster')
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
             View Campaign</h3>
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
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>Brand Name</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($campaign1 as $lis)
                    <tr>
                        <th>{{ $lis->brand_name }}</th>
                        <th>{{ $lis->category }}</th>
                        <th>{{ $lis->name }}</th>
                        <th>{{ $lis->email }}</th>
                        <th>{{ $lis->phone_number }}</th>
                        <th>{{ $lis->price }}</th>
                        <th>
                            @if($lis->type == 'Private')
                                    <?php
                                    $count = DB::table('campaign_invitation')->where('campaign_id',$lis->id)->where('influencer_id',$pro['id'])->count();
                                    if($count == 0){
                                    ?>
                                    <form method="post" action="{{ url('influencer/accept-invitation') }}">
                                        <input type="hidden" name="campaign_id" value="{{ $lis->id }}">
                                        <input type="hidden" name="influencer_id" value="{{ $pro['id'] }}">
                                        <input type="hidden" name="status" value="Accept">
                                        <button type="submit" class="btn btn-xs btn-success">Accept</button>
                                        {!! csrf_field() !!}
                                        
                                    </form>
                                    <form method="post" action="{{ url('influencer/decline-invitation') }}">
                                        <input type="hidden" name="campaign_id" value="{{ $lis->id }}">
                                        <input type="hidden" name="influencer_id" value="{{ $pro['id'] }}">
                                        <input type="hidden" name="status" value="Decline">
                                        <button type="submit" class="btn btn-xs btn-danger">Decline</button>
                                        {!! csrf_field() !!}
                                        
                                    </form>
                                    <?php
                                    }
                                    else{
                                        $count = DB::table('campaign_invitation')->where('campaign_id',$lis->id)->where('influencer_id',$pro['id'])->first();
                                        echo $count->status;
                                    }
                                    ?>

                            @endif
                        </th>
                    </tr>
                @endforeach

                @foreach($campaign as $lis)
                    <tr>
                        <th>{{ $lis->brand_name }}</th>
                        <th>{{ $lis->category }}</th>
                        <th>{{ $lis->name }}</th>
                        <th>{{ $lis->email }}</th>
                        <th>{{ $lis->phone_number }}</th>
                        <th>{{ $lis->price }}</th>
                        <th>
                            
                        </th>
                    </tr>
                @endforeach

            </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection