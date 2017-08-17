<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "/css/navbar.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <!-- Styles -->
</head>
<body>
@if(Auth::guest())
@include('navbar')
@else
@include('navbar-loggedin')
@endif
@yield('content')
</body>
</html>
<script>
    var popup = document.getElementById('myPopup');
    document.getElementById('myPopup').style.display="none";
    $('.signin-btn').click(function(){
        $('.key').attr('src','/img/key-black.png');
        $('#myPopup').show();
    });
    $('.close').click(function(){
        $('#myPopup').hide();
    });
</script>
<script>
    $('.password').click(function(){
        $('.key').attr('src','/img/key.png');
    });
    $('.username').click(function(){
        $('.key').attr('src','/img/key-black.png');
    });
</script>