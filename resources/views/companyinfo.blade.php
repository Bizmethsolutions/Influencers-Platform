@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush}
@section('content')
{{-- {{ dd(session()->all()); }} --}}
@php
    use QuickBooksOnline\API\DataService\DataService;
    $dataService = DataService::Configure(array(
            'auth_mode' => 'oauth2',
            'ClientID' => config('QBO.client_id'),
            'ClientSecret' =>  config('QBO.client_secret'),
            'RedirectURI' => config('QBO.oauth_redirect_uri'),
            'scope' => config('QBO.oauth_scope'),
            'baseUrl' => "development"
    ));

    /*
     * Retrieve the accessToken value from session variable
     */
    $accessToken = Session::get('accessToken');

    /*
     * Update the OAuth2Token of the dataService object
     */
    $dataService->updateOAuth2Token($accessToken);
    $companyInfo = $dataService->getCompanyInfo();

    
    // print("<pre>".print_r($companyInfo,true)."</pre>");    
@endphp
<h4> Company Info </h4>
Company Name : {{ $companyInfo->CompanyName }}<br>
Company Address: {{ $companyInfo->CompanyAddr->Line1 }} {{ $companyInfo->CompanyAddr->Line2 }} {{ $companyInfo->CompanyAddr->Line3 }} {{ $companyInfo->CompanyAddr->Line4 }} {{ $companyInfo->CompanyAddr->Line5 }} {{ $companyInfo->CompanyAddr->City }}<br>

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