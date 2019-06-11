@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <div class="container">
        <div class="row mt-3">
            @can('create', App\courses::class)
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="{{ __('pages.search') }}" name="search">
                </div>
                <div class="col-md-3">
                    <a href="{{ route('courses.create') }}" class="btn editButtons">New Course</a>
                </div>
            @else
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="{{ __('pages.search') }}" name="search">
                </div>
            @endcan
        </div>
        <div class="row">
            <div class="courseGridContainer my-5 col-12">
                @foreach($courses as $course)
                    <div class="gridItem p-3 br-20 position-relative containerBackground secondaryText">
                        <h1>{{ $course->name }}</h1>
                        <div class="difficulty position-absolute">
                            @for($i =0; $i <= $course->difficulty; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                        <p>{{ $course->description }}</p>
                        <p class="position-absolute duration">Duration: {{ $course->duration }}. </p>
                        @if(Auth::check() && $course->Completed())
                            <a href="{{ route('courses.completed', [$course->id]) }}" class="btn btn-info w-25 br-20 position-absolute">
                                {{ __('pages.getCertificate') }}
                            </a>
                        @else
                            <a href="{{ route('courses.show', [$course->id]) }}" class="btn btn-info w-25 br-20 position-absolute">
                                @if(Auth::check() && Auth::user()->can('view', $course))
                                    {{ __('pages.continue') }}
                                @else
                                    @if($course->price > 0)
                                        {{ __('pages.unlockFor', ['points' => $course->price]) }}
                                    @else
                                        {{ __('pages.start') }}
                                    @endif
                                @endif
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
