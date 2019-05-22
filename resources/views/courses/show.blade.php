@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <div class="row-full parallax-row" data-parallax="scroll" data-image-src="{{ asset('/assets/img/parallaxBackground.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="secondaryText">{{ $course->name }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="accordion" class="w-100">
                @foreach($course->Chapters() as $chapter)
                    <div class="card containerBackground">
                        <a class="lessonHeader card-link" data-toggle="collapse" href="#collapseOne">
                            <div class="card-header secondaryText">
                                {{ $chapter->name }}
                            </div>
                        </a>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
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
@endsection

@push('scripts')
    <script src="{{ asset('/assets/js/parallax.js') }}"></script>
@endpush
