<!-- resources/views/auth/user/login.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                   <center> <div class="card-header" style="background-color: #cfe7d0">{{ __('Connexion  " Etablissement " ') }}</div></center>

                    <div class="card-body">
                        <div class="row mb-3">
                            <img  class="mx-auto d-block" style="margin-bottom: 30px;margin-top: 30px;padding-right: 50px;padding-left: 50px;" src="{{asset('/img/logo.jpg')}}">
                        </div>    
                        <form method="POST" action="{{ route('user.login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="CD_ETAB" class="col-md-4 col-form-label text-md-right">{{ __('Code Etablissement') }}</label>

                                <div class="col-md-6">
                                    <input id="CD_ETAB" type="text" class="form-control @error('CD_ETAB') is-invalid @enderror" name="CD_ETAB" value="{{ old('CD_ETAB') }}" required autocomplete="email" autofocus>

                                    @error('CD_ETAB')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
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
@endsection
