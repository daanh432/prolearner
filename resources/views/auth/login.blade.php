@extends('layouts.app')

@section('content')
    <div class="w-75 mx-auto p-5 rounded-lg bg-white mt-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Sign in</h1>
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('auth.forgotYourPassword') }}</a>
                @endif
                @enderror
            </div>

            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('auth.forgotYourPassword') }}</a>
                @endif
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
                    <button class="btn btn-primary w-75" type="submit">{{ __('auth.login') }}</button>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="rememberSwitch" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="rememberSwitch">{{ __('auth.rememberMe') }}</label>
                    </div>
                </div>
                @if (Route::has('register'))
                    <div class="col-sm-6 text-center">
                        <a href="{{ 'register' }}" class="btn btn-link w-75">{{ __('auth.dontHaveAccount') }}</a>
                    </div>
                @endif
            </div>
        </form>
    </div>
@endsection

@push('head')
    {!! htmlScriptTagJsApi() !!}
@endpush
