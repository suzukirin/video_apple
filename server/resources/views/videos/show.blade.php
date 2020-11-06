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
                
                @section('content')
                @section('title', 'プロフィール')
                {{-- @include('layouts.video', compact('video')) --}}
                
                <div class=show>
    <div class="profile">
            <div class="image">
                <img src="{{ url($video->image_url) }}" class="square-img">
            </div>
                
            {{-- <table class="table-bordered mb-5 mt-3"> --}}
                    
                            {{-- <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup> --}}
                    
                <div class="info">
                    <p>
                        名前<br>{{ $video->name }}</b>
                    </p>
                    
                    <p>
                        アピール<br>{{ $video->description }}</b>
                    </p>
                    
                    <p>
                        一時間あたり<br>{{ $video->price }}円</b>
                    </p>
                    
                    <p>
                        category:{{ $video->category }}</b>
                    </p>
                    <p>
                        pr①{{ $video->pr_short }}</b><br>
                    </p>
                    <p>
                        pr②{{ $video->pr_long }}</b>
                    </p>
                    <p>
                        講義形式:{{ $video->note }}</b>
                    </p>
                    </div>
    </div>

    
    {{-- <!-- 商品のidを元に編集ページへ遷移する -->
    <a href="/videos/{{ $video->id }}/edit"><button>編集する</button></a>
    <form action="/videos/{{ $video->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    </form> --}}
    {{-- </div>
    </body>
    </html> --}}
    
    <br>
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
</div>
<div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</form>
@endsection
</div>