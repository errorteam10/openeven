@extends('layouts.app')




@component('parts.body', [
    'cover_image'=> 'https://images.unsplash.com/photo-1528605248644-14dd04022da1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e41af172b07cceb6ccc1c785e5463e3f&auto=format&fit=crop&w=1950&q=80',
    'parallax'=> 'true',
    'title'=> 'Discover Events',
    'tag_line'=> 'Find An Event Below. A whole Community Awaits.',
    'button'=>  json_encode([
        ['text' => 'Get Started', 'link' => '#get_started', 'class' => "btn btn-outline-neutral btn-round"]
    ])
])
@endcomponent
@section('content')

<div class="section text-center pt-5" id="get_started">
      <div class="container">
          <div class="row">
              <div class="col-md-8 ml-auto mr-auto">
                  <h2 class="title">Even Oppurtunity</h2>
                  <h5 class="description">We Use Functions that pick these  in random order. Use The Search Bar To Filter Through Them Or Search!</h5>
                  <br>
                  <input class="form-control" id="discover_search" placeholder="Search Term..."></input>
              </div>
          </div>
  <br><br>
  <div class="row">
    @foreach($events as $event)
        <div class="col-md-4">
            <div class="card">
                    <img class="card-img-top" src="{{$event->cover_image}}">
                <a href="{{url('/')}}/event/{{$event->id}}">

                        <div class="card-body">
                                <h3 class="title">{{$event->title}}</h3>

                                <div class="badge badge-info p-3 ">{{$event->tagline}}</div>
                        </div>

                </a>




            </div>
        </div>
    @endforeach


  </div>

      </div>
  </div>



@endsection

@push('css')
@endpush

@push('js')
@endpush
