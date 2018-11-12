@extends('layouts.app')


@foreach($event as $item)

@section('body')
@component('parts.body', [
    'cover_image'=> $item->cover_image,
    'parallax'=> 'true',
    'title'=> $item->title,
    'tag_line'=> $item->tagline,
    'button'=>  json_encode([
        ['text' => 'Get Started', 'link' => '#get_started', 'class' => "btn btn-outline-neutral btn-round"],
        ['text' => 'Remaining Tickets: ' . ($item->number_of_tickets - $item->tickets_bought), 'link' => url('/') .'/get_ticket/'.$item->id.'/'.$item->title.'/'.$item->pricing.'/'.$item->tickets_bought, 'class' => "btn btn-outline-neutral btn-round"]
    ])
])
@endcomponent
@endsection








@section('content')
@php($data = $item)
<div class="section text-center" id="get_started">
      <div class="container">
          <div class="row">
              <div class="col-md-8 ml-auto mr-auto">
                  <h2 class="title">{{$data->title}}</h2>
                  <h5 class="description">{{$data->tagline}}</h5>
                  <h5 class="description">Organized by {{$item->organizer}}.</h5>
                  <h5 class="description">
                    {{$data->tags}}
                  </h5>
              </div>
          </div>
  <br><br>
  <div class="row">
    <div class="col-md-12 row">
      <div class="col-md-3">

          <div class="card card-body">
            <h3 class="title mb-2">Hotel</h3>
            {{$data->hotel_name}} <br>{{($data->hotel_location)}}
          </div>
          <div class="card card-body">
            <h3 class="title mb-2">Parking</h3>
            {{$data->parking_name}} <br>{{($data->parking_location)}}
          </div>
          <div class="card card-body">
            <h3 class="title mb-2">Food</h3>
          {{$data->food_name}} <br>{{($data->food_location)}}
          </div>
      </div>
      <div class="col-md-6">
          <div class="card card-body">
            {{($data->about)}}
          </div>
      </div>
      <div class="col-md-3">
        <div class="card card-body text-left">
              <h4 class="">Location</h4>
              {{$data->venue_location}}
              <h4 class="">Pricing</h4>
              {{$data->pricing}}
              <br><h4 class="">Schedule</h4>
              Event Date: Need To Do <br>
              Check-In: Need To Do
        </div>
      </div>
    </div>
  </div>
      </div>
  </div>
@endsection
@endforeach


@push('css')
@endpush

@push('js')
@endpush
