@extends('layouts.app')

@section('title', 'Edit Lesson')

@section('content')
    <div class="container">
        <div class="row">
            <div id="pureLiveEditorApp" class="col-md-12 mx-auto containerBackground secondaryText p-5 mt-5 br-20">
                <form action="{{ route('courses.lessons.update', [ 'course' => $course->id, 'lesson' => $lesson->id]) }}" method="post" id="storeLesson" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PATCH')
                    <h1>Edit lesson</h1>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lesName" placeholder="Lesson name" maxlength="200" name="name" value="{{ $lesson->name }}" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="lesDes" placeholder="Description" name="description" maxlength="4096" required>{{ $lesson->description }}</textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <ace-editor class="createEditEditor mb-3" editor-id="MainEditor" v-bind:content="MainEditor.content" v-bind:lang="MainEditor.lang" v-bind:theme="theme" v-on:change-content="ChangeEditorContent"></ace-editor>
                    <input type="hidden" name="assignment" v-model="MainEditor.content">

                    <ace-editor class="createEditEditor mb-3" editor-id="SecondaryEditor" v-bind:content="SecondaryEditor.content" v-bind:lang="MainEditor.lang" v-bind:theme="theme" v-on:change-content="ChangeEditorContent2"></ace-editor>
                    <input type="hidden" name="inputCheck" v-model="SecondaryEditor.content">

                    <input type="hidden" class="form-control" id="lesOutputCheck" placeholder="Output check" maxlength="1024" name="outputCheck" value="{{ $lesson->outputCheck }}" required>
                </form>
                <form action="{{ route('courses.lessons.destroy', [ 'course' => $course->id, 'lesson' => $lesson->id]) }}" id="deleteLesson" method="POST">
                    @csrf
                    @method('DELETE')
                </form>

                <div class="form-group row">
                    <div class="col-md-4 text-center">
                        <a href="{{ route('courses.show', [$course->id]) }}" class="btn btn-secondary w-100 br-20">{{ __('pages.goBack') }}</a>
                    </div>
                    <div class="col-md-4 mt-2 mt-md-0 text-center">
                        <button type="submit" form="deleteLesson" class="btn btn-danger w-100 br-20">{{ __('pages.delete') }}</button>
                    </div>
                    <div class="col-md-4 mt-2 mt-md-0 text-center">
                        <button type="submit" form="storeLesson" class="btn btn-primary w-100 br-20">{{ __('pages.submit') }}</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('ace/ace.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('assets/js/liveEditor.js') }}"></script>
@endpush
