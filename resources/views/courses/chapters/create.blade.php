@extends('layouts.app')

@section('title', 'Create Chapter')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('courses.chapters.store', [ 'course' => $course->id]) }}" method="post" id="storeChapter" enctype="multipart/form-data" class="needs-validation col-md-6 mx-auto containerBackground p-5 mt-5 br-20 secondaryText" novalidate>
                @csrf
                <h1>Create chapter</h1>
                <div class="form-group">
                    <input type="text" class="form-control" id="chapName" placeholder="Chapter name" name="name" value="{{ old('name') }}" max="150" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 text-center">
                        <a href="{{ URL::previous() }}" class="btn btn-secondary w-75 br-20">{{ __('pages.goBack') }}</a>
                    </div>
                    <div class="col-md-6 mt-2 mt-md-0 text-center">
                        <button class="btn btn-primary w-75 br-20" type="submit">{{ __('pages.submit') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
