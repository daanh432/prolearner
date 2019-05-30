@extends('layouts.app')

@section('title', 'SHOW LESSON CHANGE')

@push('head')
    <link rel="stylesheet" href="{{ asset('assets/css/liveEditor.css') }}">
@endpush

@section('content')
    <div id="lessonEditorContainer">
        <div id="lessonAssignmentTitle" class="editorHeaderBackground secondaryText text-center">
            <h1>{{ $lesson->name }}</h1>
            <p>{{ $lesson->Chapter()->name }} - {{ $lesson->Chapter()->Course()->name }}</p>
        </div>

        <div class="editorHeaderBackground text-center" id="menuHeader">
{{--            <div class="btn-group btn-group-lg mt-4">--}}
{{--                <button type="button" class="btn btn-primary">HTML</button>--}}
{{--                <button type="button" class="btn btn-primary">CSS</button>--}}
{{--                <button type="button" class="btn btn-primary">JS</button>--}}
{{--            </div>--}}
        </div>

        <div id="outputHeader" class="editorHeaderBackground secondaryText text-center">
            <h1>Output:</h1>
        </div>

        <div class="editorBackground secondaryText" id="lessonAssignmentDescription">
            {!! $lesson->description !!}
        </div>

        <div class="liveEditorLesson" id="htmlEditor">{{ $lesson->assignment }}</div>
        <textarea name="htmlEditor" style="display: none;"></textarea>

        <div id="editorRun secondaryText"></div>

        <div id="output">
            <iframe src="{{ route('index') }}" style="width: 100%; height: 99%; margin: 0; padding: 0;" frameborder="0"></iframe>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('ace/ace.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('assets/js/liveEditor.js') }}"></script>
@endpush
