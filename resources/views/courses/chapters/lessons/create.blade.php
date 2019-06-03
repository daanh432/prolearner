@extends('layouts.app')

@section('title', 'Create lesson')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('courses.chapters.lessons.store', [ 'course' => $course->id, 'chapter' => $chapter->id]) }}" method="post" id="storeLesson" enctype="multipart/form-data" class="needs-validation col-md-6 mx-auto containerBackground secondaryText p-5 mt-5 br-20" novalidate>
                @csrf
                <h1>Create lesson</h1>
                <div class="form-group">
                    <input type="text" class="form-control" id="lesName" placeholder="Lesson name" name="name" maxlength="200" value="{{ old('name') }}" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" id="lesDes" placeholder="Description" maxlength="4096" name="description" maxlength="5000" required>{{ old('duration') }}</textarea>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" id="lesAssignment" placeholder="Assignment name" maxlength="4096" name="assignment" maxlength="5000" required>{{ old('assignment') }}</textarea>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="lesInputCheck" placeholder="Input check" maxlength="1024" name="inputCheck" value="{{ old('inputCheck') }}" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="lesOutputCheck" placeholder="Output check" maxlength="1024" name="outputCheck" value="{{ old('outputCheck') }}" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 text-center">
                        <a href="{{ route('courses.show', [$course->id]) }}" class="btn btn-secondary w-100 br-20">{{ __('pages.goBack') }}</a>
                    </div>
                    <div class="col-md-6 mt-2 mt-md-0 text-center">
                        <button class="btn btn-primary w-10 br-20" type="submit">{{ __('pages.submit') }}</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
