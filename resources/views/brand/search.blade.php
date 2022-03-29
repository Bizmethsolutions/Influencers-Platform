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
  <?php

$countries = [
    ["name" => "Afghanistan", "code" => "AF"],
    ["name" => "Åland Islands", "code" => "AX"],
    ["name" => "Albania", "code" => "AL"],
    ["name" => "Algeria", "code" => "DZ"],
    ["name" => "American Samoa", "code" => "AS"],
    ["name" => "Andorra", "code" => "AD"],
    ["name" => "Angola", "code" => "AO"],
    ["name" => "Anguilla", "code" => "AI"],
    ["name" => "Antarctica", "code" => "AQ"],
    ["name" => "Antigua and Barbuda", "code" => "AG"],
    ["name" => "Argentina", "code" => "AR"],
    ["name" => "Armenia", "code" => "AM"],
    ["name" => "Aruba", "code" => "AW"],
    ["name" => "Australia", "code" => "AU"],
    ["name" => "Austria", "code" => "AT"],
    ["name" => "Azerbaijan", "code" => "AZ"],
    ["name" => "Bahamas (the)", "code" => "BS"],
    ["name" => "Bahrain", "code" => "BH"],
    ["name" => "Bangladesh", "code" => "BD"],
    ["name" => "Barbados", "code" => "BB"],
    ["name" => "Belarus", "code" => "BY"],
    ["name" => "Belgium", "code" => "BE"],
    ["name" => "Belize", "code" => "BZ"],
    ["name" => "Benin", "code" => "BJ"],
    ["name" => "Bermuda", "code" => "BM"],
    ["name" => "Bhutan", "code" => "BT"],
    ["name" => "Bolivia (Plurinational State of)", "code" => "BO"],
    ["name" => "Bonaire, Sint Eustatius and Saba", "code" => "BQ"],
    ["name" => "Bosnia and Herzegovina", "code" => "BA"],
    ["name" => "Botswana", "code" => "BW"],
    ["name" => "Bouvet Island", "code" => "BV"],
    ["name" => "Brazil", "code" => "BR"],
    ["name" => "British Indian Ocean Territory (the)", "code" => "IO"],
    ["name" => "Brunei Darussalam", "code" => "BN"],
    ["name" => "Bulgaria", "code" => "BG"],
    ["name" => "Burkina Faso", "code" => "BF"],
    ["name" => "Burundi", "code" => "BI"],
    ["name" => "Cabo Verde", "code" => "CV"],
    ["name" => "Cambodia", "code" => "KH"],
    ["name" => "Cameroon", "code" => "CM"],
    ["name" => "Canada", "code" => "CA"],
    ["name" => "Cayman Islands (the)", "code" => "KY"],
    ["name" => "Central African Republic (the)", "code" => "CF"],
    ["name" => "Chad", "code" => "TD"],
    ["name" => "Chile", "code" => "CL"],
    ["name" => "China", "code" => "CN"],
    ["name" => "Christmas Island", "code" => "CX"],
    ["name" => "Cocos (Keeling) Islands (the)", "code" => "CC"],
    ["name" => "Colombia", "code" => "CO"],
    ["name" => "Comoros (the)", "code" => "KM"],
    ["name" => "Congo (the Democratic Republic of the)", "code" => "CD"],
    ["name" => "Congo (the)", "code" => "CG"],
    ["name" => "Cook Islands (the)", "code" => "CK"],
    ["name" => "Costa Rica", "code" => "CR"],
    ["name" => "Croatia", "code" => "HR"],
    ["name" => "Cuba", "code" => "CU"],
    ["name" => "Curaçao", "code" => "CW"],
    ["name" => "Cyprus", "code" => "CY"],
    ["name" => "Czechia", "code" => "CZ"],
    ["name" => "Côte d\'Ivoire", "code" => "CI"],
    ["name" => "Denmark", "code" => "DK"],
    ["name" => "Djibouti", "code" => "DJ"],
    ["name" => "Dominica", "code" => "DM"],
    ["name" => "Dominican Republic (the)", "code" => "DO"],
    ["name" => "Ecuador", "code" => "EC"],
    ["name" => "Egypt", "code" => "EG"],
    ["name" => "El Salvador", "code" => "SV"],
    ["name" => "Equatorial Guinea", "code" => "GQ"],
    ["name" => "Eritrea", "code" => "ER"],
    ["name" => "Estonia", "code" => "EE"],
    ["name" => "Eswatini", "code" => "SZ"],
    ["name" => "Ethiopia", "code" => "ET"],
    ["name" => "Falkland Islands (the) [Malvinas]", "code" => "FK"],
    ["name" => "Faroe Islands (the)", "code" => "FO"],
    ["name" => "Fiji", "code" => "FJ"],
    ["name" => "Finland", "code" => "FI"],
    ["name" => "France", "code" => "FR"],
    ["name" => "French Guiana", "code" => "GF"],
    ["name" => "French Polynesia", "code" => "PF"],
    ["name" => "French Southern Territories (the)", "code" => "TF"],
    ["name" => "Gabon", "code" => "GA"],
    ["name" => "Gambia (the)", "code" => "GM"],
    ["name" => "Georgia", "code" => "GE"],
    ["name" => "Germany", "code" => "DE"],
    ["name" => "Ghana", "code" => "GH"],
    ["name" => "Gibraltar", "code" => "GI"],
    ["name" => "Greece", "code" => "GR"],
    ["name" => "Greenland", "code" => "GL"],
    ["name" => "Grenada", "code" => "GD"],
    ["name" => "Guadeloupe", "code" => "GP"],
    ["name" => "Guam", "code" => "GU"],
    ["name" => "Guatemala", "code" => "GT"],
    ["name" => "Guernsey", "code" => "GG"],
    ["name" => "Guinea", "code" => "GN"],
    ["name" => "Guinea-Bissau", "code" => "GW"],
    ["name" => "Guyana", "code" => "GY"],
    ["name" => "Haiti", "code" => "HT"],
    ["name" => "Heard Island and McDonald Islands", "code" => "HM"],
    ["name" => "Holy See (the)", "code" => "VA"],
    ["name" => "Honduras", "code" => "HN"],
    ["name" => "Hong Kong", "code" => "HK"],
    ["name" => "Hungary", "code" => "HU"],
    ["name" => "Iceland", "code" => "IS"],
    ["name" => "India", "code" => "IN"],
    ["name" => "Indonesia", "code" => "ID"],
    ["name" => "Iran (Islamic Republic of)", "code" => "IR"],
    ["name" => "Iraq", "code" => "IQ"],
    ["name" => "Ireland", "code" => "IE"],
    ["name" => "Isle of Man", "code" => "IM"],
    ["name" => "Israel", "code" => "IL"],
    ["name" => "Italy", "code" => "IT"],
    ["name" => "Jamaica", "code" => "JM"],
    ["name" => "Japan", "code" => "JP"],
    ["name" => "Jersey", "code" => "JE"],
    ["name" => "Jordan", "code" => "JO"],
    ["name" => "Kazakhstan", "code" => "KZ"],
    ["name" => "Kenya", "code" => "KE"],
    ["name" => "Kiribati", "code" => "KI"],
    ["name" => "Korea (the Democratic People\'s Republic of)", "code" => "KP"],
    ["name" => "Korea (the Republic of)", "code" => "KR"],
    ["name" => "Kuwait", "code" => "KW"],
    ["name" => "Kyrgyzstan", "code" => "KG"],
    ["name" => "Lao People\'s Democratic Republic (the)", "code" => "LA"],
    ["name" => "Latvia", "code" => "LV"],
    ["name" => "Lebanon", "code" => "LB"],
    ["name" => "Lesotho", "code" => "LS"],
    ["name" => "Liberia", "code" => "LR"],
    ["name" => "Libya", "code" => "LY"],
    ["name" => "Liechtenstein", "code" => "LI"],
    ["name" => "Lithuania", "code" => "LT"],
    ["name" => "Luxembourg", "code" => "LU"],
    ["name" => "Macao", "code" => "MO"],
    ["name" => "Madagascar", "code" => "MG"],
    ["name" => "Malawi", "code" => "MW"],
    ["name" => "Malaysia", "code" => "MY"],
    ["name" => "Maldives", "code" => "MV"],
    ["name" => "Mali", "code" => "ML"],
    ["name" => "Malta", "code" => "MT"],
    ["name" => "Marshall Islands (the)", "code" => "MH"],
    ["name" => "Martinique", "code" => "MQ"],
    ["name" => "Mauritania", "code" => "MR"],
    ["name" => "Mauritius", "code" => "MU"],
    ["name" => "Mayotte", "code" => "YT"],
    ["name" => "Mexico", "code" => "MX"],
    ["name" => "Micronesia (Federated States of)", "code" => "FM"],
    ["name" => "Moldova (the Republic of)", "code" => "MD"],
    ["name" => "Monaco", "code" => "MC"],
    ["name" => "Mongolia", "code" => "MN"],
    ["name" => "Montenegro", "code" => "ME"],
    ["name" => "Montserrat", "code" => "MS"],
    ["name" => "Morocco", "code" => "MA"],
    ["name" => "Mozambique", "code" => "MZ"],
    ["name" => "Myanmar", "code" => "MM"],
    ["name" => "Namibia", "code" => "NA"],
    ["name" => "Nauru", "code" => "NR"],
    ["name" => "Nepal", "code" => "NP"],
    ["name" => "Netherlands (the)", "code" => "NL"],
    ["name" => "New Caledonia", "code" => "NC"],
    ["name" => "New Zealand", "code" => "NZ"],
    ["name" => "Nicaragua", "code" => "NI"],
    ["name" => "Niger (the)", "code" => "NE"],
    ["name" => "Nigeria", "code" => "NG"],
    ["name" => "Niue", "code" => "NU"],
    ["name" => "Norfolk Island", "code" => "NF"],
    ["name" => "Northern Mariana Islands (the)", "code" => "MP"],
    ["name" => "Norway", "code" => "NO"],
    ["name" => "Oman", "code" => "OM"],
    ["name" => "Pakistan", "code" => "PK"],
    ["name" => "Palau", "code" => "PW"],
    ["name" => "Palestine, State of", "code" => "PS"],
    ["name" => "Panama", "code" => "PA"],
    ["name" => "Papua New Guinea", "code" => "PG"],
    ["name" => "Paraguay", "code" => "PY"],
    ["name" => "Peru", "code" => "PE"],
    ["name" => "Philippines (the)", "code" => "PH"],
    ["name" => "Pitcairn", "code" => "PN"],
    ["name" => "Poland", "code" => "PL"],
    ["name" => "Portugal", "code" => "PT"],
    ["name" => "Puerto Rico", "code" => "PR"],
    ["name" => "Qatar", "code" => "QA"],
    ["name" => "Republic of North Macedonia", "code" => "MK"],
    ["name" => "Romania", "code" => "RO"],
    ["name" => "Russian Federation (the)", "code" => "RU"],
    ["name" => "Rwanda", "code" => "RW"],
    ["name" => "Réunion", "code" => "RE"],
    ["name" => "Saint Barthélemy", "code" => "BL"],
    ["name" => "Saint Helena, Ascension and Tristan da Cunha", "code" => "SH"],
    ["name" => "Saint Kitts and Nevis", "code" => "KN"],
    ["name" => "Saint Lucia", "code" => "LC"],
    ["name" => "Saint Martin (French part)", "code" => "MF"],
    ["name" => "Saint Pierre and Miquelon", "code" => "PM"],
    ["name" => "Saint Vincent and the Grenadines", "code" => "VC"],
    ["name" => "Samoa", "code" => "WS"],
    ["name" => "San Marino", "code" => "SM"],
    ["name" => "Sao Tome and Principe", "code" => "ST"],
    ["name" => "Saudi Arabia", "code" => "SA"],
    ["name" => "Senegal", "code" => "SN"],
    ["name" => "Serbia", "code" => "RS"],
    ["name" => "Seychelles", "code" => "SC"],
    ["name" => "Sierra Leone", "code" => "SL"],
    ["name" => "Singapore", "code" => "SG"],
    ["name" => "Sint Maarten (Dutch part)", "code" => "SX"],
    ["name" => "Slovakia", "code" => "SK"],
    ["name" => "Slovenia", "code" => "SI"],
    ["name" => "Solomon Islands", "code" => "SB"],
    ["name" => "Somalia", "code" => "SO"],
    ["name" => "South Africa", "code" => "ZA"],
    ["name" => "South Georgia and the South Sandwich Islands", "code" => "GS"],
    ["name" => "South Sudan", "code" => "SS"],
    ["name" => "Spain", "code" => "ES"],
    ["name" => "Sri Lanka", "code" => "LK"],
    ["name" => "Sudan (the)", "code" => "SD"],
    ["name" => "Suriname", "code" => "SR"],
    ["name" => "Svalbard and Jan Mayen", "code" => "SJ"],
    ["name" => "Sweden", "code" => "SE"],
    ["name" => "Switzerland", "code" => "CH"],
    ["name" => "Syrian Arab Republic", "code" => "SY"],
    ["name" => "Taiwan (Province of China)", "code" => "TW"],
    ["name" => "Tajikistan", "code" => "TJ"],
    ["name" => "Tanzania, United Republic of", "code" => "TZ"],
    ["name" => "Thailand", "code" => "TH"],
    ["name" => "Timor-Leste", "code" => "TL"],
    ["name" => "Togo", "code" => "TG"],
    ["name" => "Tokelau", "code" => "TK"],
    ["name" => "Tonga", "code" => "TO"],
    ["name" => "Trinidad and Tobago", "code" => "TT"],
    ["name" => "Tunisia", "code" => "TN"],
    ["name" => "Turkey", "code" => "TR"],
    ["name" => "Turkmenistan", "code" => "TM"],
    ["name" => "Turks and Caicos Islands (the)", "code" => "TC"],
    ["name" => "Tuvalu", "code" => "TV"],
    ["name" => "Uganda", "code" => "UG"],
    ["name" => "Ukraine", "code" => "UA"],
    ["name" => "United Arab Emirates (the)", "code" => "AE"],
    [
        "name" => "United Kingdom of Great Britain and Northern Ireland (the)",
        "code" => "GB",
    ],
    ["name" => "United States Minor Outlying Islands (the)", "code" => "UM"],
    ["name" => "United States of America (the)", "code" => "US"],
    ["name" => "Uruguay", "code" => "UY"],
    ["name" => "Uzbekistan", "code" => "UZ"],
    ["name" => "Vanuatu", "code" => "VU"],
    ["name" => "Venezuela (Bolivarian Republic of)", "code" => "VE"],
    ["name" => "Viet Nam", "code" => "VN"],
    ["name" => "Virgin Islands (British)", "code" => "VG"],
    ["name" => "Virgin Islands (U.S.)", "code" => "VI"],
    ["name" => "Wallis and Futuna", "code" => "WF"],
    ["name" => "Western Sahara", "code" => "EH"],
    ["name" => "Yemen", "code" => "YE"],
    ["name" => "Zambia", "code" => "ZM"],
    ["name" => "Zimbabwe", "code" => "ZW"]
];

  ?>
  <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <label>Country</label>
          <select class="form-control" name="InfluencerCountry" id="city">
            <?php 
              foreach($countries as $c){
                ?>
                  <option value="<?php echo $c['name']; ?>"><?php echo $c['name']; ?></option>    
                <?php    
              }
            ?>
            

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