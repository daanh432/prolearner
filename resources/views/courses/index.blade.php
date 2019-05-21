@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="courseGridContainer my-5 ">
                @foreach($courses as $course)
                    <div class="gridItem p-3 br-20 position-relative">
                        <h1>{{ $course->name }}</h1>
                        <div class="difficulty position-absolute">
                            @for($i =0; $i <= $course->difficulty; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                        <p>{{ $course->description }}</p>
                        <p class="position-absolute duration">Duration: {{ $course->duration }}. </p>
                        <a href="{{ route('courses.show', [$course->id]) }}" class="btn btn-info w-25 br-20 position-absolute">
                            @if($course->price >= 1)
                                Unlock for {{ $course->price }} points
                            @else
                                Start
                            @endif
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
