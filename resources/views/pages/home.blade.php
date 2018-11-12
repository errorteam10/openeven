@extends('layouts.app')

@component('parts.body', [
    'cover_image'=> 'https://images.unsplash.com/photo-1450387635522-8ecb968079bf?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6b5775d3405488ff233694e545c2ad7f&auto=format&fit=crop&w=1822&q=80',
    'parallax'=> 'true',
    'title'=> 'Open Source Event Hosting',
    'tag_line'=> 'Community Run, How Events Should Be.',
    'button'=>  json_encode([
        ['text' => 'Get Started', 'link' => '/mobile', 'class' => "btn btn-outline-neutral btn-round"],
        ['text' => 'Watch Video', 'link' => '#justin', 'class' => "btn btn-outline-neutral btn-round"]
    ])
])
@endcomponent
@section('content')

<div class="section text-center">
      <div class="container">
          <div class="row">
              <div class="col-md-8 ml-auto mr-auto">
                  <h2 class="title">OpenEven Event App</h2>
                  <h5 class="description">OpenEven is an event planning platform that is open source and everyone has even oppurtunity.</h5>
                  <br>
                  <a class="btn btn-danger btn-round" href="">See Details</a>
              </div>
          </div>
  <br><br>
  <div class="row">
    <div class="col-md-3">
      <div class="info">
        <div class="icon icon-danger">
          <i class="nc-icon nc-album-2"></i>
        </div>
        <div class="description">
          <h4 class="info-title">Custom Events</h4>
          <p class="description">Create your own event, and publish it!</p>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="info">
        <div class="icon icon-danger">
          <i class="nc-icon nc-bulb-63"></i>
        </div>
        <div class="description">
          <h4 class="info-title">Scan Your Ticket</h4>
          <p>Scan your ticket at a kiosk and check into your event</p>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="info">
        <div class="icon icon-danger">
          <i class="nc-icon nc-chart-bar-32"></i>
        </div>
        <div class="description">
          <h4 class="info-title">Discover New Events</h4>
          <p>Learn about upcoming events, and venues.</p>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="info">
        <div class="icon icon-danger">
          <i class="nc-icon nc-sun-fog-29"></i>
        </div>
        <div class="description">
          <h4 class="info-title">Purchase Tickets</h4>
          <p>Purchase tickets for events you want to go to.</p>

        </div>
      </div>
    </div>
  </div>

      </div>
  </div>

<div class="section section-dark text-center">
      <div class="container">
          <h2 class="title">Let's talk about us</h2>
  <div class="row">
      <div class="col-md-4">
                  <div class="card card-profile card-plain">
                      <div class="card-avatar">
                          <a href="#avatar"><img alt="..." src="../assets/img/faces/clem-onojeghuo-3.jpg"></a>
                      </div>
                      <div class="card-body">
                          <a href="#paper-kit">
                              <div class="author">
                                  <h4 class="card-title">Brent Dalling</h4>
                                  <h6 class="card-category">Product Manager</h6>
                              </div>
                          </a>
                          <p class="card-description text-center">
                          Teamwork is key, you must always have each others back in order to succeed.
                          </p>
                      </div>
                      <div class="card-footer text-center">
                          <a class="btn btn-link btn-just-icon btn-neutral" href="#pablo"><i class="fa fa-twitter"></i></a>
                          <a class="btn btn-link btn-just-icon btn-neutral" href="#pablo"><i class="fa fa-google-plus"></i></a>
                          <a class="btn btn-link btn-just-icon btn-neutral" href="#pablo"><i class="fa fa-linkedin"></i></a>
                      </div>
                  </div>
      </div>

      <div class="col-md-4">
                  <div class="card card-profile card-plain">
                      <div class="card-avatar">
                          <a href="#avatar"><img alt="..." src="../assets/img/faces/joe-gardner-2.jpg"></a>
                      </div>
                      <div class="card-body">
                          <a href="#paper-kit">
                              <div class="author">
                                  <h4 class="card-title">Justin Nelson</h4>
                                  <h6 class="card-category">Designer</h6>
                              </div>
                          </a>
                          <p class="card-description text-center">
                          You have to put forth the effort if you want a rewarding outcome.
                          </p>
                      </div>
                      <div class="card-footer text-center">
                          <a class="btn btn-link btn-just-icon btn-neutral" href="#pablo"><i class="fa fa-twitter"></i></a>
                          <a class="btn btn-link btn-just-icon btn-neutral" href="#pablo"><i class="fa fa-google-plus"></i></a>
                          <a class="btn btn-link btn-just-icon btn-neutral" href="#pablo"><i class="fa fa-linkedin"></i></a>
                      </div>
                  </div>
      </div>

      <div class="col-md-4">
                  <div class="card card-profile card-plain">
                      <div class="card-avatar">
                          <a href="#avatar"><img alt="..." src="../assets/img/faces/erik-lucatero-2.jpg"></a>
                      </div>
                      <div class="card-body">
                          <a href="#paper-kit">
                              <div class="author">
                                  <h4 class="card-title">Alexander Beraja</h4>
                                  <h6 class="card-category">Designer</h6>
                              </div>
                          </a>
                          <p class="card-description text-center">
                          Teamwork is really all about listening to your team.
                          </p>
                      </div>
                      <div class="card-footer text-center">
                          <a class="btn btn-link btn-just-icon btn-neutral" href="#pablo"><i class="fa fa-twitter"></i></a>
                          <a class="btn btn-link btn-just-icon btn-neutral" href="#pablo"><i class="fa fa-google-plus"></i></a>
                          <a class="btn btn-link btn-just-icon btn-neutral" href="#pablo"><i class="fa fa-linkedin"></i></a>
                      </div>
                  </div>
      </div>
      <div class="col-md-4">
                  <div class="card card-profile card-plain">
                      <div class="card-avatar">
                          <a href="#avatar"><img alt="..." src="../assets/img/faces/erik-lucatero-2.jpg"></a>
                      </div>
                      <div class="card-body">
                          <a href="#paper-kit">
                              <div class="author">
                                  <h4 class="card-title">Cait Smith</h4>
                                  <h6 class="card-category">Designer</h6>
                              </div>
                          </a>
                          <p class="card-description text-center">
                          It's not about the final product, it's about the tiny steps it took to get there.
                          </p>
                      </div>
                      <div class="card-footer text-center">
                          <a class="btn btn-link btn-just-icon btn-neutral" href="#pablo"><i class="fa fa-twitter"></i></a>
                          <a class="btn btn-link btn-just-icon btn-neutral" href="#pablo"><i class="fa fa-google-plus"></i></a>
                          <a class="btn btn-link btn-just-icon btn-neutral" href="#pablo"><i class="fa fa-linkedin"></i></a>
                      </div>
                  </div>
      </div>
    </div>
    </div>
</div>
      @include('parts.forum')
@endsection

@push('css')
@endpush

@push('js')
@endpush
