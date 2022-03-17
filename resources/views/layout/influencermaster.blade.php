<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/cuba/theme/dashboard-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 06:29:52 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Brand & Influencer</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>

    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/bootstrap/core/4.2.1/css/bootstrap.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}"> --}}
    <!-- ico-font-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}"> --}}
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/prism.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      @include('layout.influencerheader')
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        @include('layout.influencersidebar')
    
        <div class="page-body">
      
          @yield('content')
        </div>
        @include('layout.influencerfooter')
      </div>
    </div>
  </div>
<!-- latest jquery-->
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<!-- Bootstrap js-->
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<!-- feather icon js-->
<script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js') }}"></script>
<!-- scrollbar js-->
<script src="{{ asset('js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('js/scrollbar/custom.js') }}"></script>
<!-- Sidebar jquery-->
<script src="{{ asset('js/config.js') }}"></script>
<!-- Plugins JS start-->
<script src="{{ asset('js/sidebar-menu.js') }}"></script>
<script src="{{ asset('js/chart/chartist/chartist.js') }}"></script>
<script src="{{ asset('js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
<script src="{{ asset('js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('js/chart/apex-chart/stock-prices.js') }}"></script>
<script src="{{ asset('js/prism/prism.min.js') }}"></script>
<script src="{{ asset('js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/counter/counter-custom.js') }}"></script>
<script src="{{ asset('js/custom-card/custom-card.js') }}"></script>
<script src="{{ asset('js/owlcarousel/owl.carousel.js') }}"></script>
<script src="{{ asset('js/dashboard/dashboard_2.js') }}"></script>
<script src="{{ asset('js/tooltip-init.js') }}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2({
      placeholder: "Field Of Interest"
    });
  });
</script>
{{-- <script src="{{ asset('js/theme-customizer/customizer.js') }}"></script> --}}
<!-- login js-->
<!-- Plugin used-->
</body>
</html>
    