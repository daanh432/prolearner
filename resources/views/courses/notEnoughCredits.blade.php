@extends('layouts.app')

@section('title', 'Create course')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="homepageAboutUs" class="containerBackground br-30 mx-auto p-4 col-md-10 secondaryText">
                                <h2 class="text-center my-4">{{ __('pages.notEnoughTitle') }} credits</h2>
                                <p class="text-center">{{ __('pages.notEnoughText') }}</p>

                                <div class="form-group row">
                                    <div class="col-md-6 text-center">
                                        <a href="{{ route('courses.index') }}" class="btn btn-secondary w-75 br-20">{{ __('pages.goBack') }}</a>
                                    </div>
                                    <div class="col-md-6 mt-2 mt-md-0 text-center">
                                        <button class="btn btn-primary w-75 br-20" type="button" data-toggle="modal" data-target="#myModal">{{ __('pages.getMore') }}</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('pages.getMoreCredits') }}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form id="referralForm" class="needs-validation" novalidate>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <input type="text" id="referralCode" class="form-control" placeholder="{{ __('pages.referralCode') }}" name="referral" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <button type="button" class="text-center btn btn-secondary col-md-5 mr-auto br-20" data-dismiss="modal">{{ __('pages.close') }}</button>
                                <button class="text-center btn btn-primary col-md-5 ml-auto br-20 mt-2 mt-md-0" type="submit">{{ __('pages.submit') }}</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
