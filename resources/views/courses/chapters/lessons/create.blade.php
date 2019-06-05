@extends('layouts.app')

@section('title', 'Create lesson')

@section('content')
    <div class="container">
        <div class="row">
            <div id="pureLiveEditorApp" class="col-md-12 containerBackground secondaryText p-5 mt-5 br-20">
                <form action="{{ route('courses.chapters.lessons.store', [ 'course' => $course->id, 'chapter' => $chapter->id]) }}" method="post" id="storeLesson" enctype="multipart/form-data" class="needs-validation" novalidate>
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
                    <ace-editor class="createEditEditor mb-3" editor-id="MainEditor" v-bind:content="MainEditor.content" v-bind:lang="MainEditor.lang" v-bind:theme="theme" v-on:change-content="ChangeEditorContent"></ace-editor>
                    <input type="hidden" name="assignment" v-model="MainEditor.content">

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
                            <button class="btn btn-primary w-100 br-20" type="submit">{{ __('pages.submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('ace/ace.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('assets/js/liveEditor.js') }}"></script>
@endpush
