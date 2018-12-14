<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Penjualan Baju</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-position: center;
                background-repeat: no-repeat;
                background-image:url({{url('images/bg.jpg')}});
                background-position: center;
                background-repeat: no-repeat;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <!-- <a href="{{ url('/shop') }}">Shop</a> -->
            @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                
            @endif
                    
                    </div>

            <div class="content">
                <div class="title m-b-md">
                    Penjualan Barang
                </div>

                <div class="links">
                    <a href="https://laracasts.com">Dewa Arimbawa</a>
                    <a href="https://resteria.web.id">Bayu Wijaksana</a>
                    <a href="https://laravel-news.com">Jerry Septiawan</a>
                </div>
            </div>
        </div>
    </body>
</html>
