@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <div class="container-fluid">
        <div id="courseHeaderImage" class="row parallax-row" data-parallax="scroll" data-image-src="{{ Storage::url($course->image) }}">
            <div class="container">
                <div class="row h-100">
                    <div class="col-md-10 mx-auto h-100">
                        <div id="courseName">
                            <h1 class="lightText">{{ $course->name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="accordion" class="w-100 mt-4">
                    @foreach($course->Chapters() as $chapter)
                        <div class="card containerBackground">
                            <a class="lessonHeader card-link" data-toggle="collapse" href="#collapse{{ $chapter->id }}">
                                <div class="card-header secondaryText">
                                    {{ $chapter->name }}
                                </div>
                            </a>
                            <div id="collapse{{ $chapter->id }}" class="collapse show" data-parent="#accordion">
                                <div class="card-body p-0">
                                    <ul class="pl-0 mb-0 lessons">
                                        @foreach ($chapter->Lessons() as $lesson)
                                            <a href="" class="text-decoration-none">
                                                <li class="list-style-type-none p-3 secondaryText">{{ $lesson->name }}</li>
                                            </a>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('/assets/js/parallax.js') }}"></script>
@endpush
