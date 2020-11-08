

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <title>SUCCESS</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/top.css') }}" rel="stylesheet">
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
                    @endauth
                </div>
                            <a href="{{ route('register') }}">Register</a>
                        @endif
            @endif

            <div class="content">
                <div class="title m-b-md">
                    SUCCESS
                </div>

                <div class="links">
                    <a href="https://laracasts.com"><img class="top_image" src="https://cdn.pixabay.com/photo/2016/03/27/18/13/laptop-1283368_1280.jpg" width="240" height="200" alt="Social"></a>
                    <a href="http://localhost/videos"><img class="top_image" src="https://cdn.pixabay.com/photo/2015/03/26/09/55/musicians-690591__340.jpg" width="240" height="200" alt="skill"></a>
                    <a href="https://laravel-news.com"><img class="top_image" src="https://cdn.pixabay.com/photo/2017/08/03/01/22/microphone-2574511__480.jpg"width="240" height="200" alt="Stage"></a>
                    <a href="https://laravel-news.com"><img class="top_image" src="https://cdn.pixabay.com/photo/2014/09/22/00/56/lead-singer-455750_1280.jpg" width="240" height="200" alt="Recruit"></a>
                    {{-- <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                </div>
        {{-- <div class="topcate">
          <select name=”category” onCharge="top.location.href=value">
            <option value=”cate”></option>
            <option value=”gakki”>楽器</option>
            <option value=”voice”>song</option>
            {{-- <option value=””>上級者向け</option> --}}
          {{-- </select> 
        </div> --}} 
            </div>
        </div>
    </body>
</html>
