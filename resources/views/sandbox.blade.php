@extends('layouts.app')

@section('title', 'Code Sandbox - Prolearner')

@push('head')
    <link rel="stylesheet" href="{{ asset('assets/css/liveEditor.css') }}">
@endpush

@section('content')
    <div id="liveEditorApp">
        <live-editor v-bind:theme="theme"></live-editor>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('ace/ace.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('assets/js/liveEditor.js') }}"></script>
@endpush
