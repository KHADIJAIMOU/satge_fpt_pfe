<!-- resources/views/auth/admin/register.blade.php -->

@extends('layoutsAdmin.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center> <div class="card-header" style="background-color: #cfe7d0">{{  __(' Register') }}</div></center>

                    <div class="card-body">
                        <div class="row mb-3">
                            <img  class="mx-auto d-block" style="margin-bottom: 30px;margin-top: 30px;padding-right: 50px;padding-left: 50px;" src="{{asset('/img/logo.jpg')}}">
                        </div> 
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="NOM_ETABL" class="col-md-4 col-form-label text-md-right">{{ __('NOM COMPLETE') }}</label>

                                <div class="col-md-6">
                                    <input id="NOM_ETABL" type="text" class="form-control @error('NOM_ETABL') is-invalid @enderror" name="NOM_ETABL" value="{{ old('NOM_ETABL') }}" required autocomplete="NOM_ETABL" autofocus>

                                    @error('NOM_ETABL')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for='CD_ETAB' class="col-md-4 col-form-label text-md-right">{{ __('CODE') }}</label>

                                <div class="col-md-6">
                                    <input id='CD_ETAB' type='text' class="form-control @error('CD_ETAB') is-invalid @enderror" name='CD_ETAB' value="{{ old('CD_ETAB') }}" required autocomplete='CD_ETAB'>

                                    @error('CD_ETAB')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit"  class="btn btn-primary">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"  style="color: white" href="{{ route('user.login') }}">
                                            {{ __('Déjà inscrit?') }}
                                        </a>
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
