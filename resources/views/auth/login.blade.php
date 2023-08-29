@extends('layouts.app')

@section('content')
<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<!doctype html>
<html lang="en">
<head>
  <title>Webleb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/scss/_variable.scss">
</head>
<body>
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3 mc">
                            <span>Log In </span>
                            <span>Sign Up</span>
                        </h6>
                            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                            <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3 mc">
                                                Log In
                                            </h4>
                                            <div class="form-group">
                                                <input type="email" class="form-style" placeholder="Email">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>	
                                            <div class="form-group mt-2">
                                                <input type="password" class="form-style" placeholder="Password">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <a href="https://www.web-leb.com/code" class="btn mt-4">
                                                Login
                                            </a>
                                            <p class="mb-0 mt-4 text-center">
                                                <a href="https://www.web-leb.com/code" class="link">
                                                    Forgot your password?
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back mc">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-3 pb-3">
                                                Sign Up
                                            </h4>
                                            <div class="form-group">
                                                <input type="text" class="form-style" placeholder="Full Name">
                                                <i class="input-icon uil uil-user"></i>
                                            </div>	
                                            <div class="form-group mt-2">
                                                <input type="tel" class="form-style" placeholder="Phone Number">
                                                <i class="input-icon uil uil-phone"></i>
                                            </div>	
                                            <div class="form-group mt-2">
                                                <input type="email" class="form-style" placeholder="Email">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" class="form-style" placeholder="Password">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <a href="https://www.web-leb.com/code" class="btn mt-4">
                                                Register
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>




@endsection
