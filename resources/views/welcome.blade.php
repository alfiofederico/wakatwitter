<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TwittyWaka</title>
        <script src="https://kit.fontawesome.com/4679d77dc7.js" crossorigin="anonymous"></script>
       <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        

        <!-- Styles -->
        <style>
            html, body {
                background: url('/imgs/home.jpg');
                background-size: cover;
                background-position: center;
                color: rgb(220, 228, 202);
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
                font-size: 50px;
                font-weight: bold
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
        <div class="app-wrap" 
        style="display: flex;
                flex-direction: column;
                height: 100vh;
                background-image: linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0.6)
            );">
        <div class="flex-center position-ref full-height">


            <div class="content sm:text-xs">
                <div class="title m-b-md ">
                    TwittyWaka
                </div>

                <div class="links">
                  
                     
                    @auth
                        <a href="{{ url('/tweets') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            </div>
        </div>
        
        <footer class="flex-center" style="margin-bottom: 1rem">Copyright©<script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> Powered by</footer>
        </div>
    </body>
</html>
