<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$favicon->title}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset($favicon->favicon_icon)}}" rel="icon">
    <link href="{{asset($favicon->apple_touch)}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('frontEnd')}}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('frontEnd')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('frontEnd')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('frontEnd')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('frontEnd')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('frontEnd')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('frontEnd')}}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Ninestars - v4.9.1
    * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
@include('frontEnd.include.header')
<!-- End Header -->

<!-- ======= Hero Section ======= -->
@yield('content')
<!-- ======= Footer ======= -->
@include('frontEnd.include.footer')
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('frontEnd')}}/assets/vendor/aos/aos.js"></script>
<script src="{{asset('frontEnd')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('frontEnd')}}/assets/js/main.js"></script>

</body>

</html>
