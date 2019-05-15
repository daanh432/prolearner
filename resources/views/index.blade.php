@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>The free programming learner</h1>
            <p>Go from zero to a junior programmer within weeks!</p>
            <div id="homepageRegistrationForm" class="w-40 p-4 bg-light rounded ml-auto">
                <form action="{{ route('register') }}" method="post">
                    <p class="h4 mb-4">Sign up</p>

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
    </div>
@endsection()


