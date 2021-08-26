<!DOCTYPE html>
<html lang="en">
<head>
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/5c6554ba9fcffcdbc314446d0/d853f5b59376349749ad8bb7e.js");</script>    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="mark-media">
    <meta name="author" content="IMOM">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">

    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app.css ')}}">

    <!-- Version Marketing CSS for this template -->
    <link href="{{asset('css/version/marketing.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
@include('components.header')
@yield('content')
@include('components.footer')

</body>
</html>
