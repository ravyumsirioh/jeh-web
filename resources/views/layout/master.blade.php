<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7COswald:300,400,500">
    <link rel="stylesheet" href="{{asset('components/base/base.css')}}">
    <script src="{{asset('components/base/core.min.js')}}"></script>
    <script src="{{asset('components/base/script.js')}}"></script>
</head>
<body>
<div class="page">
@include('layout.navbar')
@yield('content')
@include('layout.footer')
</div>
<!-- Preloader-->
<div class="preloader">
  <div class="preloader-inner">
    <div class="preloader-dot"></div>
    <div class="preloader-dot"></div>
    <div class="preloader-dot"></div>
    <div class="preloader-dot"></div>
  </div>
</div>
</body>
</html>