@extends('layouts.app')

@section('title', 'Completed Course')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <img src="{{ asset('assets/img/Logo_ProLearner_white.png') }}" alt="Logo website" id="completedImage" class="mw-100">
            </div>
            <div class="col-md-12 text-center">
                <h1 class="text-white">@lang('pages.congratsWithCompletingCourse')</h1>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 mt-md-0 mt-1">
                <a href="{{ route('courses.certificate', $course->id) }}" class="btn downloadButton w-100">Download @lang('pages.getCertificate')</a>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4 mt-md-0 mt-1">
                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary w-100">@lang('pages.showCourse')</a>
            </div>
            <div class="col-md-1"></div>

            <!-- Review button -->
            <div class="col-md-4 mx-auto mt-md-3 mt-1">
                <button type="button" class="btn btn-secondary w-100" data-toggle="modal" data-target="#myModal">
                    @lang('pages.giveFeedback')
                </button>
            </div>

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Give feedback!</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <p>@lang('pages.feedbackRequest')</p>
                            <form action="{{ route('courses.feedback', $course->id) }}" name="feedback" id="feedback" method="post">
                                @csrf
                                <textarea name="comment" id="comment" class="w-100" rows="6" ></textarea>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" form="feedback">Send</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
