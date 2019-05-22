@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="w-75 mx-auto p-5 rounded-lg bg-white mt-5">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Sign up</h1>
                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control @error('confirmPassword') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password" placeholder="Confirm password">

                    @error('confirmPassword')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <div class="gc-reset d-inline-block {{ $errors->has('g-recaptcha-response') ? 'border border-danger rounded' : '' }}">
                            {!! htmlFormSnippet() !!}
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 text-center">
                        <button class="btn btn-primary w-75" type="submit">{{ __('auth.register') }}</button>
                    </div>
                    <div class="col-sm-6 text-center">
                        <a href="{{ 'login' }}" class="btn btn-link w-75">{{ __('auth.alreadyRegistered') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('head')
    {!! htmlScriptTagJsApi() !!}
@endpush
