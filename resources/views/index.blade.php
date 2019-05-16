@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>The free programming learner</h1>
            <p>Go from zero to a junior programmer within weeks!</p>
            <div id="homepageRegistrationForm" class="w-40 p-4 bg-light rounded ml-auto">

                <!-- Register form -->
                <form action="{{ route('register') }}" method="post">
                    <h2 class="text-center my-4 text-dark">Sign up</h2>

                    <div class="form-group mb-4">
                        <input type="text" id="fullName" class="form-control" placeholder="Full name"
                               name="fullName" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group mb-4">
                        <input type="email" id="email" class="form-control" placeholder="E-mail" name="email" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group mb-4">
                        <input type="password" id="password" class="form-control" placeholder="Password" name="password"
                               aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group mb-4">
                        <input type="password" id="password" class="form-control" placeholder="Confirm Password"
                               name="confirmPassword"
                               aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="text-center">
                        <a href="{{route ('login')}}" class="btn btn-secondary w-25 mr-5">Sign in</a>
                        <button class="btn btn-info w-25" type="submit">Sign up</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Contact form -->
        <section class="mb-4 text-light">

            <h2 class="text-center my-4 text-dark">Contact ProLearner</h2>

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
                        <a class="btn btn-primary w-40">Send</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection()


