@extends('layouts.app')

@section('content')
<div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1519292417683-988b1a924c87?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=cdd8a55c54b2c9698a945ce327df89b3&auto=format&fit=crop&w=1950&q=80');" data-parallax="true">
  <div class="filter"></div>
  <div class="container">
      <div class="motto text-center">
        <div class="row justify-content-center">
                <div class="card">
                <div class="card-body p-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="text-left">{{ __('Name') }}</label>

                            <div class="">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="text-left">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password" class="text-left">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" class="text-left">{{ __('Confirm Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                            <div class="">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                    </form>
                </div>
        </div>
    </div>
  </div>
</div>
</div>
@endsection
