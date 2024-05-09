<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', config('myproject', '@Master Layout'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Tailwind CSS Saas & Software Landing Page Template">
        <meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="2.0.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- favicon -->
        <link rel="shortcut icon" href=" {{ asset('assets/images/favicon.ico')}}">
        <!-- Css -->
        <link href=" {{ asset('assets/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet">
        <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/css/tailwind.css')}}">

    
</head>
<body>
    @include('partial.header')
    @yield('content')

    
    @include('partial.footer')

   

            <!-- JAVASCRIPTS -->
        <script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js')}}"></script>
        <script src="{{ asset(' assets/libs/tobii/js/tobii.min.js')}}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins.init.js')}}"></script>
        <script src="{{ asset('assets/js/app.js')}}"></script>
        <!-- JAVASCRIPTS -->
</body>
</html>
