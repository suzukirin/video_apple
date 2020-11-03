{{-- <!DOCTYPE html>
  <html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>プロフィール画面</title>
     <script src="{{ asset('js/app.js') }}"></script>
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
      <div class="container"> --}}

@extends('layouts.app')

 @section('title', 'プロフィール')
 @section('content')
          {{-- @include('layouts.video', compact('video')) --}}
          <table class="table-bordered mb-5 mt-3">
             <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
<p>
     <b>名前:{{ $video->name }}</b>
 </p>

 <p>
     <b>アピール：{{ $video->description }}</b>
 </p>

 <p>
     <b>一時間あたり：{{ $video->price }}円</b>
 </p>

 <p>
     <b>メール：{{ $video->email }}</b>
</p>

<p>
    <img src="{{ $video->image_url }}">
</p>

<!-- 商品のidを元に編集ページへ遷移する -->
  <a href="/videos/{{ $video->id }}/edit"><button>編集する</button></a>
<form action="/videos/{{ $video->id }}" method="post">
     @csrf
     @method('DELETE')
     <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
 </form>
@endsection
  {{-- </div>
  </body>
  </html> --}}