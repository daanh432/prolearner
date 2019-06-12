@extends('layouts.app')

@section('title', 'Create lesson')

@push('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.1.92/jodit.min.css">
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div id="pureLiveEditorApp" data-assignment="{{ old('assignment') ? old('assignment') : 'Example Code' }}" data-input-check="{{ old('inputCheck') ? old('inputCheck') : 'Input Check Code' }}" class="col-md-12 containerBackground secondaryText p-5 mt-5 br-20">
                <form action="{{ route('courses.chapters.lessons.store', [ 'course' => $course->id, 'chapter' => $chapter->id]) }}" method="post" id="storeLesson" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <h1>Create lesson</h1>
                    <div class="form-group">
                        <input type="text" class="form-control shortcutCheck" id="lesName" placeholder="Lesson name" name="name" maxlength="200" value="{{ old('name') }}" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group text-dark">
                        <textarea type="text" class="form-control fancyEditor shortcutCheck" id="lesDes" placeholder="Description" maxlength="4096" name="description" maxlength="5000" required>{{ old('duration') }}</textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <ace-editor class="createEditEditor mb-3" editor-id="MainEditor" v-bind:content="MainEditor.content" v-bind:lang="MainEditor.lang" v-bind:theme="theme" v-on:change-content="ChangeEditorContent"></ace-editor>
                    <input type="hidden" name="assignment" class="shortcutCheck" v-model="MainEditor.content">

                    <ace-editor class="createEditEditor mb-3" editor-id="SecondaryEditor" v-bind:content="SecondaryEditor.content" v-bind:lang="MainEditor.lang" v-bind:theme="theme" v-on:change-content="ChangeEditorContent2"></ace-editor>
                    <input type="hidden" name="inputCheck" class="shortcutCheck" v-model="SecondaryEditor.content">

                    <input type="hidden" class="form-control" id="lesOutputCheck" placeholder="Output check" maxlength="1024" name="outputCheck" value="NULL" required>

                    <div class="form-group row">
                        <div class="col-md-6 text-center">
                            <a href="{{ route('courses.show', [$course->id]) }}" class="btn btn-secondary w-100 br-20">{{ __('pages.goBack') }}</a>
                        </div>
                        <div class="col-md-6 mt-2 mt-md-0 text-center">
                            <button class="btn btn-primary w-100 br-20 shortcutButton" type="submit">{{ __('pages.submit') }}</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.1.92/jodit.min.js"></script>
    <script>
        $('.fancyEditor').each(function () {
            let editor = new Jodit(this, {
                "language": "nl",
                "buttons": "|,bold,strikethrough,underline,italic,|,superscript,subscript,|,ul,ol,|,outdent,indent,|,font,fontsize,brush,paragraph,|,image,file,video,table,link,|,align,undo,redo,\n,cut,hr,eraser,copyformat,|"
            });
        });
    </script>
@endpush
