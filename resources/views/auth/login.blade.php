@extends('layouts.app')

@section('content')
<link href="{{ asset('/admin/css/logincss/logincss.css') }}" rel="stylesheet">
<br></br>
<div class="container">

<br></br><br></br>
                <div class="wrapper"> 
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <form class="login">
                        <h1 align="center">Greetings</h1><br>
                        <div class="row mb-3">
                        <label for="email" class="row mb-0">{{ __('Email Address') }}</label>

                            <div class="col-mcol-md-6 col-form-label text-md-endd-5">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="row mb-1">{{ __('Password') }}</label>

                            <div class="col-mcol-md-6 col-form-label text-md-endd-5">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8 offset-md-5">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Login') }}
                                </button>
                                <br><br>
                        </div>

                        <div class="col-md-8 offset-md-0">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>  

                        <div class="col-md-8 offset-md-9">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <label class="" for="">
                                    {{ __('Dont have an account?') }}
                                </label>    
                            </div>
                            <div class="col-md-8">
                                <a class="btn btn-light float-md-end" href="{{ route('register') }}">
                                    {{ __('Register Now') }}
                                </a>
                            </div>
                        </div>
                        <br><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
