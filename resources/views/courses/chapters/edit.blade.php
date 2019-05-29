@extends('layouts.app')

@section('title', 'Edit Chapter')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto containerBackground secondaryText p-5 mt-5 br-20">
                <form action="{{ route('courses.chapters.update', [ 'course' => $course->id, 'chapters' => $chapter->id]) }}" id="editChapter" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PATCH')
                    <h1>Create chapter</h1>
                    <div class="form-group">
                        <input type="text" class="form-control" id="chapName" placeholder="Chapter name" name="name" value="{{ $chapter->name }}" max="150" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </form>
                <form action="{{ route('courses.chapters.destroy', ['course' => $course->id, 'chapters' => $chapter->id]) }}" method="post" id="deleteChapter">
                    @csrf
                    @method('DELETE')
                </form>

                <div class="form-group row">
                    <div class="col-md-4 text-center">
                        <a href="{{ URL::previous() }}" class="btn btn-secondary w-80 br-20">{{ __('pages.goBack') }}</a>
                    </div>
                    <div class="col-md-4 mt-2 mt-md-0 text-center">
                        <button type="submit" form="deleteChapter" class="btn btn-danger w-80 br-20">{{ __('pages.delete') }}</button>

                    </div>
                    <div class="col-md-4 mt-2 mt-md-0 text-center">
                        <button type="submit" form="editChapter" class="btn btn-primary w-80 br-20">{{ __('pages.submit') }}</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
