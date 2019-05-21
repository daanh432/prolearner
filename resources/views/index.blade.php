@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('/assets/img/parallaxBackground.jpg') }}"></div>
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <div class="row">
                <div class="col-md-7 mt-5">
                    <h1 class="">The free programming learner</h1>
                    <p class="">Go from zero to a junior programmer within weeks!</p>
                </div>
                <div id="homepageRegistrationForm" class="p-4 bg-light br-30 col-md-5">
                    <!-- Register form -->
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <h2 class="text-center my-4">Sign up</h2>

                        <div class="form-group mb-4">
                            <input type="text" id="fullName" class="form-control" placeholder="Full name"
                                   name="fullName" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group mb-4">
                            <input type="email" id="email" class="form-control" placeholder="E-mail" name="email"
                                   required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group mb-4">
                            <input type="password" id="password" class="form-control" placeholder="Password" name="password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group mb-4">
                            <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Password" name="confirmPassword" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="text-center">
                            <a href="{{route ('login')}}" class="btn btn-secondary w-25 mr-5 br-20">Sign in</a>
                            <button class="btn btn-primary w-25 br-20" type="submit">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="homepageAboutUs" class="bg-light br-30 mx-auto my-2 px-5 col-md-10">
            <h2 class="text-center my-4">About ProLearner</h2>
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
    <div class="parallax-window-reserve">
        <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('/assets/img/parallaxBackground.jpg') }}"></div>
    </div>
    <div class="row">
        <!-- Contact form -->
        <div id="homepageContactForm" class="col-md-10 p-4 bg-light br-30 mx-auto">
            <section class="mb-4">

                <h2 class="text-center my-4">Contact ProLearner</h2>

                <div class="row mb-5">
                    <div class="col-md-9 mb-md-0 mx-auto">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" placeholder="Name"
                                               class="form-control mb-4">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="email" placeholder="Email"
                                               class="form-control mb-4">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="subject" name="subject" placeholder="Subject"
                                               class="form-control mb-4">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                    <textarea id="message" name="message" rows="2" maxlength="500" placeholder="Message"
                                              class="form-control md-textarea mb-4"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="text-center">
                            <a class="btn btn-primary w-40 br-20">Send</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('/assets/js/parallax.js') }}"></script>
@endpush