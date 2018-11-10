@extends('layouts.app')


@foreach($event as $item)
@section('body')
@component('parts.body', [
    'cover_image'=> $item->cover_image,
    'parallax'=> 'true',
    'title'=> $item->name,
    'tag_line'=> $item->tagline,
    'button'=>  json_encode([
        ['text' => 'Get Started', 'link' => '#get_started', 'class' => "btn btn-outline-neutral btn-round"],
        ['text' => 'View Website', 'link' => 'https://southernutahcodecamp.com/', 'class' => "btn btn-outline-neutral btn-round"]
    ])
])
@endcomponent
@endsection








@section('content')
@php($data = json_decode($item->data))
<div class="section text-center" id="get_started">
      <div class="container">
          <div class="row">
              <div class="col-md-8 ml-auto mr-auto">
                  <h2 class="title">{{$data->title}}</h2>
                  <h5 class="description">{{$data->tagline}}</h5>
                  <h5 class="description">Organized by {{$item->organizer}}.</h5>
                  <h5 class="description">
                  @foreach(json_decode($event[0]->tags) as $tag)
                    @foreach($tag as $tags)
                      <div class="badge badge-info">{{($tags)}}</div>
                    @endforeach
                  @endforeach
                  </h5>
              </div>
          </div>
  <br><br>
  <div class="row">
    <div class="col-md-12 row">
      <div class="col-md-3">

          <div class="card card-body">
            <h3 class="title mb-2">Hotels</h3>
            @foreach($data->hotels as $about)
            <h4 class="bold">{{$about->hotel}}</h4> <br>{{($about->location)}}
            @endforeach
          </div>
          <div class="card card-body">
            <h3 class="title mb-2">Parking</h3>
            @foreach($data->parking as $about)
            <h4 class="bold">{{$about->parking}}</h4> <br>{{($about->location)}}
            @endforeach
          </div>
          <div class="card card-body">
            <h3 class="title mb-2">Food</h3>
            @foreach($data->food as $about)
            <h4 class="bold">{{$about->food}}</h4> <br>{{($about->location)}}
            @endforeach
          </div>
      </div>
      <div class="col-md-6">
        @foreach($data->about as $about)
          <div class="card card-body">
            <h3 class="title">{{$about->title}}</h3>
            {{($about->content)}}
          </div>
        @endforeach
      </div>
      <div class="col-md-3">
        <div class="card card-body text-left">
          @php($data = ($data->venue))
              <h4 class="">Location</h4><hr>
              <h5 class="text-left">{{$data->name}}</h5>
              {{$data->location}}

              <br><h4 class="">Schedule</h4><hr>
              <h5 class="text-left">Event Date: {{$data->event_date}}</h5>
              <h5 class="text-left">Check-In: {{$data->start_time}}</h5>

        </div>
      </div>
    </div>
  </div>
      </div>
  </div>
      @include('parts.forum')
@endsection
@endforeach


@push('css')
@endpush

@push('js')
@endpush
