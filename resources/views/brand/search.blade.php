@extends('layout.brandmaster')
@section('content')
<!--Plugin CSS file with desired skin-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>

<!--jQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--Plugin JavaScript file-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
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
  <style>
    #loader{
      background-color: #fff;
    }
    .loader {
      position: fixed;
      z-index: 999;
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #3498db;
      width: 120px;
      height: 120px;
      margin: auto;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      -webkit-animation: spin 2s linear infinite; /* Safari */
      animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .range-slider {
        position: relative;
        height: 80px;
    }
  </style>
  <div id="loader" style="width:100vw;height:100vh;background-color: #fff;display: none;">
    <div class="loader"></div>
  </div>
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>
             Search</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index-2.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Search</li>
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
  <style type="text/css">
    .form-control{
      min-height: 40px !important;
    }
  </style>
  <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <label>City</label>
          <select class="form-control" name="InfluencerCity" id="city">
            @foreach($city as $value)
              <option value="{{ $value->city}}">{{ $value->city }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3">
          <label>Language</label>
          <select class="form-control" name="InfluencerLanguage" id="language">
            @foreach($language as $value)
              <option value="{{ $value->language}}">{{ $value->language }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3">
          <label>Gender</label>
          <select class="form-control" name="InfluencerGender" id="gender">
              <option value="">Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
          </select>
        </div>
        <div class="col-md-3">
          <label>Influencer Interest</label><br>
          <select class="form-control" name="InfluencerInterest" id="foi">
              <option></option>
              @foreach($foi as $value)
                <option value="{{ $value->name }}">{{ $value->name }}</option>
              @endforeach
          </select>
        </div>
      </div>
      <div class="row" style="margin-top:10px;">
        <div class="col-md-3">
          <label>Brands</label>
          <input type="text" class="form-control" name="InfluencerBrands">
        </div>
        <div class="col-md-3">
          <label>Followers</label><br>
          <!-- <input type="text" id="js-range-slider" name="my_range" value=""
              data-type="double"
              data-min="0"
              data-max="1000"
              data-from="200"
              data-to="500"
              data-grid="true"
          />   -->
          <div class="range-slider">
              <input type="text" class="js-range-slider" value="" />
          </div>
          <div class="extra-controls">
              <input type="hidden" name="follower_min" class="js-input-from" value="0" />
              <input type="hidden" name="follower_max" class="js-input-to" value="0" />
          </div>
        </div>
        <div class="col-md-3">
          <label>Age</label><br>
          <div class="range-slider">
              <input type="text" class="js-range-slider1" value="" />
          </div>
          <div class="extra-controls">
              <input type="hidden" name="age_min" class="age-from" value="0" />
              <input type="hidden" name="age_max" class="age-to" value="0" />
          </div>
        </div>

        <div class="col-md-3">
          <input type="button" name="" onclick="return search();" value="Search" class="btn btn-primary" style="margin-top: 15px;">
        </div>
      </div>
    </div>
    <div class="container-fluid" style="margin-top: 20px;">
      
      <div class="row" id="searchResult">
        @foreach($list as $val) 
        <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
          <div class="card custom-card p-0">
            <div class="card-header"><img class="img-fluid" src="../assets/images/user-card/1.jpg" alt=""></div>
            <div class="card-profile"><img class="rounded-circle" src="../assets/images/avtar/3.jpg" alt=""></div>
            <ul class="card-social">
              <li><a href="#"><img src="../assets/images/facebook.png" style="width:24px;"></a></li>
              
              <li><a href="#"><img src="../assets/images/instagram.png" style="width:24px;"></a></li>
              
            </ul>
            <div class="text-center profile-details">
              <h5>{{ $val }}</h5>
              <h6>Influencer</h6>
            </div>
            <div class="card-footer row">
              <div class="col-4 col-sm-4">
                <h6>Follower</h6>
                <h5 class="counter">9564</h5>
              </div>
              <div class="col-4 col-sm-4">
                <h6>Following</h6>
                <h5><span class="counter">49</span>K</h5>
              </div>
              <div class="col-4 col-sm-4">
                <h6>Total Post</h6>
                <h5><span class="counter">96</span>M</h5>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  <!-- Container-fluid Ends-->
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
// $.getScript('https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js',function(){
//     $("#js-range-slider").ionRangeSlider({
//         type: "double",
//         min: 0,
//         max: 1000,
//         from: 200,
//         to: 500,
//         onStart: updateInputs,
//         onChange: updateInputs,
//         grid: true
//      });
//   }); //script
$.getScript('https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js',function(){
  var $range = $(".js-range-slider"),
    $inputFrom = $(".js-input-from"),
    $inputTo = $(".js-input-to"),
    instance,
    min = 0,
    max = 1000,
    from = 0,
    to = 0;

  var $range1 = $(".js-range-slider1"),
    $agefrom = $(".age-from"),
    $ageto = $(".age-to"),
    instance1,
    agemin = 18,
    agemax = 50,
    agefrom = 0,
    ageto = 0;

$range.ionRangeSlider({
  skin: "round",
    type: "double",
    min: min,
    max: max,
    from: 200,
    to: 800,
    onStart: updateInputs,
    onChange: updateInputs
});
instance = $range.data("ionRangeSlider");
$range1.ionRangeSlider({
  skin: "round",
    type: "double",
    min: agemin,
    max: agemax,
    from: 20,
    to: 40,
    onStart: ageupdateInputs,
    onChange: ageupdateInputs
});
instance1 = $range1.data("ionRangeSlider");

function updateInputs (data) {
  from = data.from;
    to = data.to;
    
    $inputFrom.prop("value", from);
    $inputTo.prop("value", to); 
}
function ageupdateInputs (data) {
    agefrom = data.from;
    ageto = data.to;
    
    $agefrom.prop("value", agefrom);
    $ageto.prop("value", ageto); 
}

$inputFrom.on("input", function () {
    var val = $(this).prop("value");
    
    // validate
    if (val < min) {
        val = min;
    } else if (val > to) {
        val = to;
    }
    
    instance.update({
        from: val
    });
});

$agefrom.on("input", function () {
    var val = $(this).prop("value");
    
    // validate
    if (val < min) {
        val = min;
    } else if (val > to) {
        val = to;
    }
    
    instance1.update({
        from: val
    });
});

$inputTo.on("input", function () {
    var val = $(this).prop("value");
    
    // validate
    if (val < from) {
        val = from;
    } else if (val > max) {
        val = max;
    }
    
    instance.update({
        to: val
    });
});

$ageto.on("input", function () {
    var val = $(this).prop("value");
    
    // validate
    if (val < from) {
        val = from;
    } else if (val > max) {
        val = max;
    }
    
    instance1.update({
        to: val
    });
});


});
</script>