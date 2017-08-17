@extends('layouts.app')
@section('title')
<title>My Closet manager</title>
<link rel = "stylesheet" type = "text/css" href = "/css/homePage.css" />
@stop
@section('content')
<div class="pic-slider">
    <div style="background-color:#97dbd5;background-image: url('/img/home-step1.jpg');background-size: 70%;background-repeat: no-repeat">
        <div style="float:right;width:25%;padding-top:8%;padding-right:5%;font-family: fantasy"><a style="font-size: 40px;padding-bottom: 20px;color:#ffd13d;">Step One:</a><br><a style="color:#ffd13d;font-size: 30px;">Sign up an account to create a e-closet only belongs to you.</a></div>
    </div>
    <div style="background-color:#dbc48c;background-image: url('/img/home-step2.jpg');background-size: 70%;background-repeat: no-repeat">
        <div style="float:right;width:25%;padding-top:8%;padding-right:5%;font-family: fantasy"><a style="color:#ff6e30;font-size: 40px;padding-bottom: 20px;">Step Two:</a><br><a style="color:#ff6e30;font-size: 30px;">Upload clothes you own to your account.</a></div>
    </div>
    <div style="background-color:#fcceba;background-image: url('/img/home-step3.jpg');background-size: 70%;background-repeat: no-repeat">
        <div style="float:right;width:25%;padding-top:8%;padding-right:5%;font-family: fantasy"><a style="color:white;font-size: 40px;padding-bottom: 20px;">Step Three:</a><br><a style="color:white;font-size: 30px;">Add tags to your cloth that can describe it the best.</a></div>
    </div>
    <div style="background-color:#63776f;background-image: url('/img/home-step4.jpg');background-size: 90%;background-repeat: no-repeat;background-position:-200%">
        <div style="float:right;width:25%;padding-top:8%;padding-right:5%;font-family: fantasy"><a style="color:#a3edd0;font-size: 40px;padding-bottom: 20px;">Step Four:</a><br><a style="color:#a3edd0;font-size: 30px;">Search for tags to see all the clothes you have, to determine which one you want to wear daily.</a></div>
    </div>
</div>
<script type="text/javascript">

    $('.pic-slider').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

</script>
@endsection
