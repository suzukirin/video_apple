{{-- <a href="{{ route('videos.show',  --}}
<div class="row">
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
 </div>