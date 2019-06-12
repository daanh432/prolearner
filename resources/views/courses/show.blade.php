@extends('layouts.app')

@section('title', 'Course - ' . $course->name)

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
                <div class="text-right">
                    @can('update', $course)
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary mt-1" id="">Edit Course</a>
                    @endcan
                    @can('create', App\courseChapters::class)
                        <a href="{{ route('courses.chapters.create', $course->id) }}" class="btn editButtons mt-1" id="">New Chapter</a>
                    @endcan
                </div>
                <div id="accordion" class="w-100 mt-4">
                    @foreach($course->Chapters() as $chapter)
                        <div class="card containerBackground">
                            <a class="lessonHeader card-link secondaryText" data-toggle="collapse" href="#collapse{{ $chapter->id }}">
                                <div class="card-header p-3 secondaryText">
                                    <div class="d-inline-block float-left">
                                        <p class="p-0 m-0">{{ $chapter->name }}</p>
                                    </div>
                                    <div class="text-right d-inline-block float-right">
                                        @can('update', $chapter)
                                            <a href="{{ route('courses.chapters.edit', [ 'course' => $course->id, 'chapter' => $chapter->id]) }}" class="btn btn-primary my-0" id="">Edit Chapter</a>
                                        @endcan
                                        @can('create', App\courseChapterLessons::class)
                                            <a href="{{ route('courses.chapters.lessons.create', [ 'course' => $course->id, 'chapter' => $chapter->id]) }}" class="btn editButtons my-0" id="">New Lesson</a>
                                        @endcan
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <div id="collapse{{ $chapter->id }}" class="collapse show">
                                <div class="card-body p-0">
                                    <ul class="pl-0 mb-0 lessons">
                                        @foreach ($chapter->Lessons() as $lesson)
                                            <li class="list-style-type-none p-3 secondaryText">
                                                <a href="{{ route('courses.lessons.show', [$course->id, $lesson->id]) }}" class="text-decoration-none">
                                                    <div class="d-inline-block float-left secondaryText">
                                                        <p class="p-0 m-0">{{ $lesson->name }}</p>
                                                    </div>
                                                    @can('update', $lesson)
                                                        <div class="text-right d-inline-block float-right">
                                                            <a href="{{ route('courses.lessons.edit', [ 'course' => $course->id, 'lesson' => $lesson->id]) }}" class="btn btn-primary my-0" id="">Edit Lesson</a>
                                                        </div>
                                                    @endcan
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
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
