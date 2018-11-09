@extends('layouts.app')

@component('parts.body', [
    'cover_image'=> 'https://images.unsplash.com/photo-1450387635522-8ecb968079bf?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6b5775d3405488ff233694e545c2ad7f&auto=format&fit=crop&w=1822&q=80',
    'parallax'=> 'true',
    'title'=> 'Open Source Event Hosting',
    'tag_line'=> 'Community Run, How Events Should Be.',
    'button'=>  json_encode([
        ['text' => 'Get Started', 'link' => '#justin', 'class' => "btn btn-outline-neutral btn-round"],
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
                  <a class="btn btn-danger btn-round" href="#paper-kit">See Details</a>
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
          <h4 class="info-title">Beautiful Gallery</h4>
          <p class="description">Spend your time generating new ideas. You don't have to think of implementing.</p>
          <a class="btn btn-link btn-danger" href="#pkp">See more</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="info">
        <div class="icon icon-danger">
          <i class="nc-icon nc-bulb-63"></i>
        </div>
        <div class="description">
          <h4 class="info-title">New Ideas</h4>
          <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p>
          <a class="btn btn-link btn-danger" href="#pkp">See more</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="info">
        <div class="icon icon-danger">
          <i class="nc-icon nc-chart-bar-32"></i>
        </div>
        <div class="description">
          <h4 class="info-title">Statistics</h4>
          <p>Choose from a veriety of many colors resembling sugar paper pastels.</p>
          <a class="btn btn-link btn-danger" href="#pkp">See more</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="info">
        <div class="icon icon-danger">
          <i class="nc-icon nc-sun-fog-29"></i>
        </div>
        <div class="description">
          <h4 class="info-title">Delightful design</h4>
          <p>Find unique and handmade delightful designs related items directly from our sellers.</p>
          <a class="btn btn-link btn-danger" href="#pkp">See more</a>
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
                                  <h4 class="card-title">Henry Ford</h4>
                                  <h6 class="card-category">Product Manager</h6>
                              </div>
                          </a>
                          <p class="card-description text-center">
                          Teamwork is so important that it is virtually impossible for you to reach the heights of your capabilities or make the money that you want without becoming very good at it.
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
                                  <h4 class="card-title">Sophie West</h4>
                                  <h6 class="card-category">Designer</h6>
                              </div>
                          </a>
                          <p class="card-description text-center">
                          A group becomes a team when each member is sure enough of himself and his contribution to praise the skill of the others. No one can whistle a symphony. It takes an orchestra to play it.
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
                                  <h4 class="card-title">Robert Orben</h4>
                                  <h6 class="card-category">Developer</h6>
                              </div>
                          </a>
                          <p class="card-description text-center">
                          The strength of the team is each individual member. The strength of each member is the team. If you can laugh together, you can work together, silence isn’t golden, it’s deadly.
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
