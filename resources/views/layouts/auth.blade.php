<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Onyx Streaming Dashboard</title>
   <!-- Favicon -->
   <link rel="stylesheet" href="{{ asset('backend/images/favicon.ico') }}">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
   <!--datatable CSS -->
   <link rel="stylesheet" href="{{ asset('backend/css/dataTables.bootstrap4.min.css') }}">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="{{ asset('backend/css/typography.css') }}">
   <!-- Style CSS -->
   <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{ asset('backend/css/responsive.css') }}">
</head>
<body>
   <!-- loader Start -->
   <!-- <div id="loading">
      <div id="loading-center">
      </div>
   </div> -->
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">
        @yield('content')
   </div>
   <!-- Wrapper END -->
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
   <script src="{{ asset('backend/js/popper.min.js') }}"></script>
   <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
   <script src="{{ asset('backend/js/dataTables.bootstrap4.min.js') }}"></script>
   <!-- Appear JavaScript -->
   <script src="{{ asset('backend/js/jquery.appear.js') }}"></script>
   <!-- Countdown JavaScript -->
   <script src="{{ asset('backend/js/countdown.min.js') }}"></script>
   <!-- Select2 JavaScript -->
   <script src="{{ asset('backend/js/select2.min.js') }}"></script>
   <!-- Counterup JavaScript -->
   <script src="{{ asset('backend/js/waypoints.min.js') }}"></script>
   <script src="{{ asset('backend/js/jquery.counterup.min.js') }}"></script>
   <!-- Wow JavaScript -->
   <script src="{{ asset('backend/js/wow.min.js') }}"></script>
   <!-- Slick JavaScript -->
   <script src="{{ asset('backend/js/slick.min.js') }}"></script>
   <!-- Owl Carousel JavaScript -->
   <script src="{{ asset('backend/js/owl.carousel.min.js') }}"></script>
   <!-- Magnific Popup JavaScript -->
   <script src="{{ asset('backend/js/jquery.magnific-popup.min.js') }}"></script>
   <!-- Smooth Scrollbar JavaScript -->
   <script src="{{ asset('backend/js/smooth-scrollbar.js') }}"></script>
   <!-- apex Custom JavaScript -->
   <script src="{{ asset('backend/js/apexcharts.js') }}"></script>
   <!-- Chart Custom JavaScript -->
   <script src="{{ asset('backend/js/chart-custom.js') }}"></script>
   <!-- Custom JavaScript -->
   <script src="{{ asset('backend/js/custom.js') }}"></script>

   @yield('script')
</body>
</html>
