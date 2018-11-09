<!-- /resources/views/parts/body.blade.php -->
<div class="page-header" style="background-image: url('{{$cover_image}}');" data-parallax="{{$parallax}}">
  <div class="filter"></div>
  <div class="container">
      <div class="motto text-center">
          <h1>{{$title}}</h1>
          <h3>{{$tag_line}}</h3>
          <br>  
          @foreach(json_decode($button) as $item)
            <a href="{{$item->link}}" class="{{$item->class}}">{{$item->text}}</a>
          @endforeach
          
      </div>
  </div>
  </div>