@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')

@php
// use QuickBooksOnline\API\DataService\DataService;
// $dataService = DataService::Configure(array(
//         'auth_mode' => 'oauth2',
//         'ClientID' => config('QBO.client_id'),
//         'ClientSecret' =>  config('QBO.client_secret'),
//         'RedirectURI' => config('QBO.oauth_redirect_uri'),
//         'scope' => config('QBO.oauth_scope'),
//         'baseUrl' => "development"
// ));

// $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();


// /*
// * Update the OAuth2Token
// */
// $accessToken =    $OAuth2LoginHelper->exchangeAuthorizationCodeForToken($_GET['code'], $_GET['realmId']);
// $dataService->updateOAuth2Token($accessToken);

// /*
// * Setting the accessToken for session variable
// */
// session(['accessToken' => $accessToken]);
//Session::set('accessToken', $accessToken);    
@endphp


@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/progressbar-js/progressbar.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush