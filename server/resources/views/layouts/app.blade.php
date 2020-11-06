<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand logo" href="/">SUCCESS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        
 <a class="nav-link" href="{{ route('videos.index') }}">Singer <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        {{-- <a class="nav-link" href="#">Link</a> --}}
        {{-- <html lang="ja"> --}}
{{-- <SCRIPT LANGUAGE="JavaScript">
<!--
function menuLink(linkLoc)
{ if(linkLoc !="") { window.location.href=linkLoc;} }
//-->
</SCRIPT> --}}
<form name="cate">
        <div class="box">
          <select name=”category” onCharge="top.location.href=value">
            <option value=”cate”>Category</option>
            <option value=”beginner”>初心者向け</option>
            <option value=”tyyy”>中級者向け</option>
            <option value=”http://localhost/videos”>上級者向け</option>
            <option value=”ladies”>女性向け</option>
            <option value=”kids”>キッズ向け</option>
            <option value=”jpop”>j-pop</option>
            <option value=”eng”>洋楽</option>
            <option value=”rock”>ロック</option>
            <option value=”opera”>オペラ</option>
            <option value=”enk”>演歌</option>
          </select> 
        </div>
</form>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> --}}
    </ul>

    {{-- <form class="form-inline my-2 my-lg-0"> --}}
         <form class="form-inline my-2 my-lg-0" mechod="GET" action="{{ route('videos.index') }}">
       {{-- <input class="form-control mr-sm-2" type="search" placeholder="カテゴリー">
       <input class="form-control mr-sm-2" type="search" placeholder="コーチの名前"> --}}
             <input class="form-control mr-sm-2" type="search" name="category" placeholder="カテゴリ">
             <input class="form-control mr-sm-2" type="search" name="name" placeholder="コーチの名前">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div> 
</nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
