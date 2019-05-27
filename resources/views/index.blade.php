@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container-fluid">
        <div class="row parallax-row" data-parallax="scroll" data-image-src="{{ asset('/assets/img/parallaxBackground.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto mt-5 p-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 mt-5 lightText">
                                    <h1>{{ __('pages.homepageTitle') }}</h1>
                                    <p>Go from zero to a junior programmer within weeks!</p>
                                </div>
                                <!-- Register form -->
                                <form action="{{ route('register') }}" id="homepageRegistrationForm" class="needs-validation p-4 br-20 col-lg-6 secondaryText containerBackground" method="post" novalidate>
                                    @csrf
                                    <h2 class="text-center my-4">{{ __('auth.register') }}</h2>
                                    <div class="form-group mb-4">
                                        <input type="text" id="fullName" class="form-control" placeholder="{{ __('pages.fullName') }}" name="name" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <input type="email" id="email" class="form-control" placeholder="{{ __('auth.E-Mail Address') }}" name="email" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <input type="password" id="password" class="form-control" placeholder="{{ __('auth.password') }}" name="password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <input type="password" id="confirmPassword" class="form-control" placeholder="{{ __('pages.confirmPassword') }}" name="password_confirmation" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="text-center">
                                            <div class="gc-reset d-inline-block {{ $errors->has('g-recaptcha-response') ? 'border border-danger rounded' : '' }}">
                                                {!! htmlFormSnippet() !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center row no-gutters">
                                        <button class="btn btn-primary col-md-12 br-20" type="submit">{{ __('auth.register') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div id="homepageAboutUs" class="containerBackground br-30 mx-auto p-4 col-md-10 secondaryText">
                    <h2 class="text-center my-4">{{ __('pages.about') }} ProLearner</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis elit elit. Nam luctus finibus nisi,
                        ac imperdiet
                        nibh. Sed rhoncus, magna eget fringilla tempor, diam lorem mattis ante, tristique fringilla enim nisi
                        vitae erat.
                        Aenean ut neque congue magna convallis dignissim nec vel nisi. Proin aliquam sit amet mi nec pharetra.
                        Proin varius, ligula quis semper commodo, purus mauris volutpat orci, varius mollis dui odio ut lacus.
                        In vel sapien vitae velit consequat molestie vel non urna. Cras sollicitudin nulla sit amet sodales
                        gravida.
                        Fusce blandit gravida viverra. Donec vulputate nisi at augue varius sollicitudin. hendrerit quis, tempus
                        eu tortor.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row parallax-row" data-parallax="scroll" data-image-src="{{ asset('/assets/img/parallaxBackground.jpg') }}"></div>
    </div>
    <div class="container mt-5">
        <div id="homepageContactForm" data-scroll-anchor="contact" class="col-md-10 p-4 containerBackground secondaryText br-30 mx-auto">
            <!-- Contact form -->
            <div class="row">
                <div class="container">
                    <section>
                        <h2 class="text-center my-4">{{ __("pages.contact") }} ProLearner</h2>
                        <div class="row">
                            <div class="col-md-9 mx-auto">
                                <form action="{{ route('contact.submission') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="name" name="name" placeholder="{{ __("pages.name") }}" class="form-control mb-4">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="emailContact" name="email" placeholder="{{ __("auth.E-Mail Address") }}" class="form-control mb-4">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <input type="text" id="subject" name="subject" placeholder="{{ __("pages.subject") }}" class="form-control mb-4">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <textarea id="message" name="message" rows="2" maxlength="500" placeholder="{{ __("pages.message") }}" class="form-control md-textarea mb-4"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form text-center">
                                                <div class="d-inline-block {{ $errors->has('g-recaptcha-response') ? 'border border-danger rounded' : '' }}">
                                                    {!! htmlFormSnippet() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary w-50 br-20">{{ __("pages.send") }}</button>
                                    </div>
                                </form>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('head')
    {!! htmlScriptTagJsApi() !!}
@endpush

@push('scripts')
    <script src="{{ asset('/assets/js/parallax.js') }}"></script>
@endpush
