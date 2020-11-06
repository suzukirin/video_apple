<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand logo" href="/">SUCCESS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        
 <a class="nav-link" href="{{ route('videos.index') }}">Singer <span class="sr-only">(current)</span></a>
 <a class="nav-link" href="{{ route('videos.create') }}">Account</a> 
 <li class="nav-item">
      </li>
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
      {{-- </li>
      {{-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> --}}
    {{-- </ul> --}} 

         <form class="form-inline my-2 my-lg-0" mechod="GET" action="{{ route('videos.index') }}">
             <input class="form-control mr-sm-2" type="search" name="category" placeholder="Category">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div> 
</nav>