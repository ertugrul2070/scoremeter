@extends('layouts.home')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="home-container">
    <div class="home-wrapper">
            <h1>Scouting </br> &nbsp; Marnix</h1>
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

                    {{-- <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Onthouden') }}
                                </label>
                            </div>
                        </div>
                    </div> --}}

                    <div class="home-login-btn">
                        <div class="col-btn">
                            <button type="submit" class="login-button-home">
                                {{ __('Inloggen') }}
                            </button>

                            {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
