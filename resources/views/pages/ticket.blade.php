@extends('layouts.ticketing')

@section('content')

<style>
  svg {
    width: 100%;
    height: 50%;

  }
</style>

<div class="col-md-12 row">
<div class="col-md-12">
    <div class="col-md-12 row">
      <div class="col-md-4">
        <div class="card card-body">
          {{(QRCode::text(json_encode([
            "owner" => $owner,
            "event" => $event_id,
            "ticket" => $ticket_id
            ]))->svg())}}
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-body">
          <h3 class="title">Your Ticket</h3>
          Please Print This Page Or Save The QR Code Embedded. This is you ticket into your event. This ticket reserves your spot in the event. Have a great time!
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-body">
          <h3 class="title">Access Your Ticket</h3>
          You Can Access A Digital Version Of This Ticket At AnyTime. Just Access Your Account Home Page! View {ast Tickets And Events.}
        </div>
      </div>
      <div class="col-md-12">
        <div class="card card-body">
          <h3 class="title">Thank You,</h3>
          <a href="{{url('/')}}/home" class="btn btn-info">Take Me To My Home Page!</a>
        </div>
      </div>
    </div>
  </div>

@endsection
