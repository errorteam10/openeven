@extends('layouts.app')

@if(Auth()->User()->role == 'admin')
@component('parts.body', [
    'cover_image'=> 'https://images.unsplash.com/photo-1450387635522-8ecb968079bf?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6b5775d3405488ff233694e545c2ad7f&auto=format&fit=crop&w=1822&q=80',
    'parallax'=> 'false',
    'title'=> 'Welcome '. Auth()->User()->name . ',',
    'tag_line'=> 'Manage Events, Users, and Tickets.',
    'button'=>  json_encode([])
])
@endcomponent
@else
@component('parts.body', [
      'cover_image'=> 'https://images.unsplash.com/photo-1450387635522-8ecb968079bf?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6b5775d3405488ff233694e545c2ad7f&auto=format&fit=crop&w=1822&q=80',
      'parallax'=> 'false',
      'title'=> 'Welcome '. Auth()->User()->name . ',',
      'tag_line'=> 'Explore, Create, and Manage Your Tickets and Events.',
      'button'=>  json_encode([])
  ])
  @endcomponent
@endif

@section('content')

<style>
  .card:hover {
    padding: 0px;
  }

  html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
/* optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
}
</style>
@if(Auth()->User()->role == 'admin')
@extends('parts.admin_bar')
@else(User=Null)
@endif
<div class="section text-center">
      <div class="container">
          <div class="row">
              <div class="col-md-8 ml-auto mr-auto">
                  <h2 class="title">You're In Control</h2>
                  <h5 class="description">View Your Current and Past Tickets. If You Are Running an Event, Also View and Make Changes To Your Events.</h5>
              </div>

              <div class="col-md-12 row">
                <br>
                <br>
                <div class="col-md-6">
                  <div class="card" style="height: 350px; overflow-y: scroll;">
                    <div class="card-body">
                    <h3 class="">Past Tickets</h3>
                    <hr>
                      <div class="list-group">
                        @foreach($past as $item)
                        <a href="{{url('/')}}/event/{{$item->id}}" class="list-group-item bg-dark text-light list-group-item-action" value="{{$item->id}}" owner="{{Auth()->User()->id}}" event="{{$item->event_id}}" id="past_{{$item->id}}">{{($item->event_name)}} [Purchased: {{($item->purchase_date)}}]</a>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6"><div class="card" style="height: 350px; overflow-y: scroll;">
                  <div class="card-body">
                  <h3 class="">Current Tickets</h3>
                  <hr>
                    <div class="list-group">
                      @foreach($current as $item)
                      <a href="{{url('/')}}/event/{{$item->id}}" class="m-1 list-group-item bg-dark text-light list-group-item-action" id="current_{{$item->id}}">{{($item->event_name)}} [Purchased: {{($item->purchase_date)}}]</button>
                      @endforeach
                    </div>
                  </div>
                </div></div>
            </div>
          </div>
<br><br>

      </div>
  </div>
  <!-- /resources/views/parts/body.blade.php -->
@endsection

@push('css')
@endpush

@section('js')
<script src="{{url('/')}}/js/openeven/tickets/ticket.js"></script>
<script>
  window.ticketing = new ticket();
</script>
@endsection
