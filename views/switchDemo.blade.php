<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LR2 408 KUTSEV</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
                color: #636b6f;
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

            .leftCont{
                position: absolute;
                top:0%;
                left:0%;
                height:100%;
                width:10%;
                background-color:#bfff00;
                box-shadow:10px 5px 5px gray;             
            }

            .rightCont{
                position: absolute;
                top:0%;
                right:0%;
                height:100%;
                width:10%;
                background-color:#bfff00;
                box-shadow:10px 5px 5px 20px gray;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    SWITCH PAGE
                </div>

                <div class="links">
                    <a href="{{ route('welcome') }}">Home</a>
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('ifdemo') }}">ifDemo</a>
                    <a href="{{ route('loopdemo') }}">loopDemo</a>
                </div>

                @php
                $arr=["item1"=>"Hello","item2"=>"World","item3"=>"Array","item4"=>"Test"]
                @endphp
                
                @foreach($arr as $item)
                    @switch($item)
                        @case("Hello")
                        <h1>{{$item}}<h1>
                        @break

                        @case("World")
                        <h2>{{$item}}<h2>
                        @break

                        @case("Array")
                        <h3>{{$item}}<h3>
                        @break

                        @case("Test")
                        <h4>{{$item}}<h4>
                        @break
                    @endswitch

                @endforeach

                

                <div class="leftCont"></div>
                <div class="rightCont"></div>
            </div>
        </div>
    </body>
</html>
