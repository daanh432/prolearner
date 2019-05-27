@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto br-20 containerBackground mt-5 py-5 secondaryText">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1 class="text-center">{{ __('auth.login') }}</h1>
                    <div class="form-group px-5">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('auth.E-Mail Address') }}">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('auth.forgotYourPassword') }}</a>
                        @endif
                        @enderror
                    </div>

                    <div class="form-group px-5">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('auth.password') }}">

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

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-primary w-50 br-20" type="submit">{{ __('auth.login') }}</button>
                            <div class="custom-control custom-switch text-center mt-1">
                                <input type="checkbox" class="custom-control-input" id="rememberSwitch" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="rememberSwitch">{{ __('auth.rememberMe') }}</label>
                            </div>
                            @if (Route::has('register'))
                                <a href="{{ 'register' }}" class="btn btn-link w-75">{{ __('auth.dontHaveAccount') }}</a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('head')
    {!! htmlScriptTagJsApi() !!}
@endpush
