<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <title>Asosiy Sahifa</title>
</head>
<body>
    <div class="container">
        <div class="navbar">MENU
            <ul class="menu">
            <li><abbr  title="Home sahifasi"><a href="{{route('home')}}" class="fa fa-home "></a></abbr></li>
                <li><abbr  title="Anketa to'ldirish"><a href="#" class="fa fa-sign-in "></a></abbr></li>
                <li><abbr  title=""><a href="" class="fa fa-plus "></a></abbr></li>
                <li><abbr  title="Man haqimda"><a href="{{ route('about') }}" class="fa fa-user"></a></abbr></li>
                <li><abbr  title="kasb tanlash uchun savol javoblar"><a href="{{ route('question') }}" class="fa fa-gamepad"></a></abbr></li>
                <li><abbr  title="Address sahifasi"><a href="contacts" class="fa fa-address-card"></a></abbr></li>
            </ul>
        </div>
    </div>


    <section id="stats" class="stat">
        <div class="content box">
            <br><br>

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                <h1 class="text-uppercase">Kasb Tanlashga qiynalyabsizmi?</h1>
                <p class="lead tab-content" style="color: #fff; font-size: 30px;">Unda Bizga qo'shiling, so'rovnomani yeching Va iqtidoringizga qarab kasb tanlang!!!</p>

                    <div class="row text-center">
                        <div class="col-md-6">
                            <div class="stat-items">
                                <i class="fa fa-user-plus" style="color: #fff; font-size: 60px;"></i>
                                <h2 style="color: #fff; font-size: 40px;"><span class="counter text-center">3339</span><span>+</span></h2>
                                <p style="color: #fff; font-size: 40px;">Obunachilar soni</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="stat-items">
                                <i class="fa fa-thumbs-up " style="color: #fff; font-size: 60px;"></i>
                                <h2 style="color: #fff; font-size: 40px;"><span class="counter text-center">3339</span><span>+</span></h2>
                                <p style="color: #fff; font-size: 40px;">Like-lar soni</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script>
        jQuery(document).ready(function(){
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
</body>
</html>
