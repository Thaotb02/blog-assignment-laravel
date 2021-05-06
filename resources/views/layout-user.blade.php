<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Wordsmith</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets-users/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('assets-users/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('assets-users/css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('assets-users/js/modernizr.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
       
    <link rel="stylesheet" href="{{asset('assets-users/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('assets-users/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('assets-users/css/main.css')}}">

    <style type="text/css" media="screen">
        .s-styles { 
            background: #f0f0f0;
            padding-top: 16.2rem;
            padding-bottom: 12rem;
        }

        .s-styles .section-intro h1 {
            margin-top: 0;
        }
    </style> 

    <!-- script
    ================================================== -->
    <script src="{{asset('assets-users/js/modernizr.js')}}"></script>
    <!-- <script src="js/pace.min.js"></script> -->

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
      @include('layout-users/header')


    <!-- featured 
    ================================================== -->
    <!-- end s-featured -->


    <!-- s-content
    ================================================== -->

  @yield('content')
 <!-- end s-content -->


    <!-- s-extra
    ================================================== -->
 <!-- end s-extra -->


    <!-- s-footer
    ================================================== -->
    @include('layout-users/footer') <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="{{asset('assets-users/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets-users/js/plugins.js')}}"></script>
    <script src="{{asset('assets-users/js/main.js')}}"></script>

</body>

</html>