@extends('layouts.home')

@section('content')

<div class="home-container">
    <div class="home-wrapper">
            <h1>Scouting </br> &nbsp; De Hoeve</h1>
    </div>
    <div class="home-login-wrapper">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="home-login-email">
                        <label for="email" class="label-email">{{ __('E-Mail') }}</label>

                        <div class="col-email">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="home-login-password">
                        <label for="password" class="label-password">{{ __('Wachtwoord') }}</label>

                        <div class="col-password">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="home-login-btn">
                        <div class="col-btn">
                            <button type="submit" class="login-button-home">
                                {{ __('Inloggen') }}
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
