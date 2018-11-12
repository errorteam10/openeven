@extends('layouts.app')

@section('content')

<div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1519292417683-988b1a924c87?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=cdd8a55c54b2c9698a945ce327df89b3&auto=format&fit=crop&w=1950&q=80');" data-parallax="true">
  <div class="filter"></div>
  <div class="container">
      <div class="motto text-center">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body p-5">
                      <h3 class="title text-dark">Buy Ticket For {{$event_cost}}<br><small>Ticket For {{$event_name}}</small></h3>

                        <form method="post" action="{{url('/')}}/purchase">
                            @csrf
                                    <input placeholder="Credit Card Number" type="text" class="m-1 form-control" name="email" autofocus>
                                    <input placeholder="Card Holder Name" type="text" class="m-1 form-control" name="password" >
                                    <input placeholder="Expiration" type="text" class="m-1 form-control" name="password" >
                                    <input placeholder="CVC" type="text" class="m-1 form-control" name="password" >

                                    <input hidden value="{{$event_id}}" type="text" class="m-1 form-control" name="event" >
                                    <input hidden value="{{$event_name}}" type="text" class="m-1 form-control" name="event_name" >
                                    <input hidden value="{{Auth()->User()->id}}" type="text" class="m-1 form-control" name="password" >
                                    <input hidden value="{{$bought}}" type="text" class="m-1 form-control" name="bought" >



                            <div class="form-group mb-0">
                                <div class="">
                                    <button type="submit" class="btn btn-block btn-primary" id="submit">
                                        Purchase
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
  </div>
@endsection

@section('js')
<script src="{{url('/')}}/js/openeven/purchase.js"></script>
<script>window.purchase = new purchase('{{$event_id}}', '{{$event_name}}', '{{Auth()->User()->id}}', '#submit')</script>
@endsection
