@extends('layouts.app')

@section('title', $lesson->name . ' - ' . $lesson->Chapter()->name . ' - ' .$lesson->Chapter()->Course()->name)

@push('head')
    <link rel="stylesheet" href="{{ asset('assets/css/liveEditor.css') }}">
@endpush

@section('content')
    <div id="liveEditorApp">
        <live-editor v-bind:courseurl="'{{ route('courses.show', $lesson->Chapter()->Course())}}'" v-bind:theme="theme" v-bind:lesson="{{ $lesson }}" v-bind:chapter="{{ $lesson->Chapter() }}" v-bind:course="{{ $lesson->Chapter()->Course() }}"></live-editor>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('ace/ace.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('assets/js/liveEditor.js') }}"></script>
@endpush
