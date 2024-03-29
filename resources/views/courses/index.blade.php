@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <div class="container">
        <div class="row mt-3">
            @can('create', App\courses::class)
                <div class="col-md-9">
                    <input id="courseSearchBar" type="text" class="form-control" placeholder="{{ __('pages.search') }}" name="search">
                </div>
                <div class="col-md-3">
                    <a href="{{ route('courses.create') }}" class="btn editButtons">New Course</a>
                </div>
            @else
                <div class="col-md-12">
                    <input id="courseSearchBar" type="text" class="form-control" placeholder="{{ __('pages.search') }}" name="search">
                </div>
            @endcan
        </div>
        <div class="row">
            <div class="courseGridContainer my-5 col-12">
                @foreach($courses as $course)
                    <div class="gridItem p-3 br-20 position-relative containerBackground secondaryText" data-aos="zoom-in-up" data-title="{{ $course->name }}" data-description="{{ $course->description }}">
                        <h1>{{ $course->name }}</h1>
                        <div class="difficulty position-absolute">
                            @for($i =0; $i <= $course->difficulty; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                        <p>{{ $course->description }}</p>
                        <p class="position-absolute duration">Duration: {{ $course->duration }}. </p>
                        @if(Auth::check() && $course->Completed())
                            <a href="{{ route('courses.completed', [$course->id]) }}" class="btn downloadButton w-25 br-20 position-absolute">
                                {{ __('pages.getCertificate') }}
                            </a>
                        @else
                            @if(Auth::check() && Auth::user()->can('view', $course))
                                <a href="{{ route('courses.show', [$course->id]) }}" class="btn btn-primary w-25 br-20 position-absolute">
                                    {{ __('pages.continue') }}
                                </a>
                            @else
                                <a href="{{ route('courses.show', [$course->id]) }}" class="btn btn-info w-25 br-20 position-absolute">
                                    @if($course->price > 0)
                                        {{ __('pages.unlockFor', ['points' => $course->price]) }}
                                    @else
                                        {{ __('pages.start') }}
                                    @endif
                                </a>
                            @endif
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ mix('assets/js/coursesSearch.js') }}"></script>
@endpush
