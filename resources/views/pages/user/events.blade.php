@extends('layouts.app')

@section('body')
@component('parts.body', [
    'cover_image'=> 'https://images.unsplash.com/photo-1541709369835-bdc9a4cc0a71?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d22add355d5cd3dabef9e35c71f894ff&auto=format&fit=crop&w=1975&q=80',
    'parallax'=> 'false',
    'title'=> 'Your Events',
    'tag_line'=> 'View, Edit, And Create Events.',
    'button'=>  json_encode([
        ['text' => 'Get Started', 'link' => '#get_started', 'class' => "btn btn-outline-neutral btn-round"],
        ['text' => 'View Website', 'link' => 'https://southernutahcodecamp.com/', 'class' => "btn btn-outline-neutral btn-round"]
    ])
])
@endcomponent
@endsection

@section('content')
  <div class="col-md-12 p-5 row">
    <div class="col-md-6">
<h3 class="title"><a href="#" class="btn btn-block btn-primary text-white" data-toggle="modal" data-target="#modal_1">Create Event</a></h3>
            @foreach($events as $data)
            <a href="{{url('/')}}/event/{{$data->id}}">
              <div class="card card-body">
                    <h3 class="">{{($data->title)}} <small>{{$data->tagline}}}</small></h3>
              </div>
            </a>
            @endforeach

    </div>
  </div>




  <!-- Modal -->
<div class="modal fade" id="modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{url('/')}}/make/event">
          <div class="form-group">
            <label>Name</label><br>
            <input class="form-control" type="text" name="name">
          </div>
          <div class="form-group">
            <label>Tagline</label><br>
            <input class="form-control" type="text" name="tagline">
          </div>
          <div class="form-group">
            <label>Cover Image</label><br>
            <input class="form-control" type="text" name="cover">
          </div>
          <div class="form-group">
            <label>Tags</label><br>
            <input class="form-control" type="text" name="tags">
          </div>

          <div class="form-group">
            <label>About <small>(Note: Please use the "~" after each paragraph.)</small></label><br>
            <textarea colspan="3" class="form-control" type="text" name="about"></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <div class="col-md-12 row p-0 m-0">
          <div class="col-md-6  p-0 m-0">
            <button type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
          <div class="col-md-6 p-0 m-0">
            <button type="button" class="btn btn-block btn-primary" id="next">Next</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
















<!-- Modal -->
<div class="modal fade" id="modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Create Event (Hotels)</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">

        <div class="form-group">
          <label>Name</label><br>
          <input class="form-control" type="text" name="hotel_name">
        </div>
        <div class="form-group">
          <label>Location</label><br>
          <input class="form-control" type="text" name="hotel_location">
        </div>
        <div class="form-group">
          <label>Pricing</label><br>
          <input class="form-control" type="text" name="hotel_pricing">
        </div>

    </div>
    <div class="modal-footer">
      <div class="col-md-12 row p-0 m-0">
        <div class="col-md-6  p-0 m-0">
          <button type="button" class="btn btn-block btn-secondary" id="back_1">back</button>
        </div>
        <div class="col-md-6 p-0 m-0">
          <button type="button" class="btn btn-block btn-primary" id="next_1">Next</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Create Event (Parking)</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <div class="form-group">
          <label>Name</label><br>
          <input class="form-control" type="text" name="parking_name">
        </div>
        <div class="form-group">
          <label>Location</label><br>
          <input class="form-control" type="text" name="parking_location">
        </div>
        <div class="form-group">
          <label>Pricing</label><br>
          <input class="form-control" type="text" name="parking_pricing">
        </div>

    </div>
    <div class="modal-footer">
      <div class="col-md-12 row p-0 m-0">
        <div class="col-md-6  p-0 m-0">
          <button type="button" class="btn btn-block btn-secondary" id="back_2">back</button>
        </div>
        <div class="col-md-6 p-0 m-0">
          <button type="button" class="btn btn-block btn-primary" id="next_2">Next</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Create Event (Food)</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <div class="form-group">
          <label>Name</label><br>
          <input class="form-control" type="text" name="food_name">
        </div>
        <div class="form-group">
          <label>Location</label><br>
          <input class="form-control" type="text" name="food_location">
        </div>
        <div class="form-group">
          <label>Pricing</label><br>
          <input class="form-control" type="text" name="food_pricing">
        </div>

    </div>
    <div class="modal-footer">
      <div class="col-md-12 row p-0 m-0">
        <div class="col-md-6  p-0 m-0">
          <button type="button" class="btn btn-block btn-secondary" id="back_3">back</button>
        </div>
        <div class="col-md-6 p-0 m-0">
          <button type="button" class="btn btn-block btn-primary" id="next_3">Next</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>




<div class="modal fade" id="modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Create Event (Some More Info)</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <div class="form-group">
          <label>Number Of Tickets</label><br>
          <input class="form-control" type="number" name="number_of_tickets">
        </div>
        <div class="form-group">
          <label>Venue Location</label><br>
          <input class="form-control" type="text" name="venue_location">
        </div>
        <div class="form-group">
          <label>Pricing</label><br>
          <input class="form-control" type="text" name="pricing">
        </div>
        <div class="form-group">
          <label>Link To Schedule (If Any)</label><br>
          <input class="form-control" type="text" name="link_to_schedule">
        </div>

    </div>
    <div class="modal-footer">
      <div class="col-md-12 row p-0 m-0">
        <div class="col-md-6  p-0 m-0">
          <button type="button" class="btn btn-block btn-secondary" id="back_4">back</button>
        </div>
        <div class="col-md-6 p-0 m-0">
          <button type="submit" class="btn btn-block btn-primary" id="submit">Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection

@section('js')
<script src="{{url('/')}}/js/openeven/events/create_event.js"></script>

<script>
  window.event_create  = new create_event();
</script>
@endsection
