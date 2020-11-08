<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUCCESS</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
  </head>
  <div class= "index">
    <body>
      <div class="container">
        <div class="container-sm"></div>
        <div class="container-md"></div>
        <div class="container-lg"></div>
        <div class="container-xl"></div>
        @extends('layouts.app')
        
        @section('title','コーチ一覧')
        
        @section('content')
        <ul> 
          @foreach ($videos as $video)
          {{-- <li class="list-unstyled border mb-5 pl-3 shadow"> --}}
            <div class="card-deck">
  <div class="card">
            <img src="{{ url($video->image_url) }}" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title>
            <div class="card-body">
              <h5 class="card-title"><a href="{{ route('videos.show', $video->id) }}">{{ $video->name }}</h5>
      <p class="card-text"></p>
            </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg>
            <div class="card-body">
      <h5 class="card-title"><a href="{{ route('videos.show', $video->id) }}">{{ $video->name }}</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg>
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('videos.show', $video->id) }}">{{ $video->name }}</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
            
            
            
            
{{--             
            <div class="card mb-3" style="max-width: 1000px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="{{ url($video->image_url) }}" width="100%" height="250" xmlns="" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect fill="#999999" width="100%" height="100%"/><text fill="#999999" dy=".3em" x="50%" y="50%"></text></svg>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('videos.show', $video->id) }}">{{ $video->name }}</a></h5>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div> --}}
            <!-- // リンク先をidで取得し名前で出力 -->
            {{-- @include('layouts.video', compact('video')) --}}
            @endforeach
          </ul>
          @endsection
        </body>
      </div>
          
          
          
          
          
  {{-- <div class="d-flex justify-content-center">
    {{ $videos->links() }}
  </div>  --}}
  <a href="/videos/create"><button>新規登録</button></a>



{{-- <div class="row">
     <div>
         <img src="{{ url($video->image_url) }}" class="square-img">
     </div>
     <div class="ml-3">
         <div class="mt-3 mb-3">
             
             <h3>
                 <a href="{{ route('videos.show', $video->id) }}">{{ $video->name }}</a>
             </h3>
         </div>
        
     </div>
 </div> --}}
