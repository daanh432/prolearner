@extends('layouts.app')

@section('title', 'Create course')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-8 m-auto">

                            <div class="containerBackground br-30 mx-auto p-4 col-md-10 secondaryText">
                                <h1 class="text-center">Edit profile</h1>

                                <input type="text" id="name" name="name" placeholder="{{ __("pages.name") }}" class="form-control mb-4">


                                <div class="form-group row">
                                    <div class="col-md-6 text-center">
                                        <a href="{{ URL::previous() }}" class="btn btn-secondary w-75 br-20">{{ __('pages.goBack') }}</a>
                                    </div>
                                    <div class="col-md-6 mt-2 mt-md-0 text-center">
                                        <button class="btn btn-primary w-75 br-20" type="button">{{ __('pages.submit') }}</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
