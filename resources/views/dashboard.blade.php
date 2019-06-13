@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12 containerBackground secondaryText br-20" id="">
                <div class="row profileHeader">
                    <div class="col-md-3">
                        <img src="{{asset('assets/img/user.png')}}" class="rounded-circle mx-auto mx-md-0 d-block d-md-inline-block"
                             alt="User image">
                    </div>
                    <div class="col-md-9 mt-sm-5">
                        <h2 class="text-center text-md-left">{{ Auth::user()->name }}</h2>
                        <h3 class="text-center text-sm-left">Credits: {{ Auth::user()->credits }}</h3>
                        <form action="{{ route('logout') }}" method="post" class="d-inline-block">
                            @csrf
                            <button type="submit" class="btn btn-secondary br-20">{{ __('pages.logout') }}</button>
                        </form>
                        <a href="" class="btn btn-primary br-20 d-inline-block">{{ __('pages.editProfile') }}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>@lang('pages.courses')</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="coursesGrid text-center">
                            @foreach($courseUnlocks as $courseProgress)
                                <div>
                                    <a class="secondaryText mx-auto d-inline-block" href="{{ route('courses.show', [$courseProgress->Course()->id]) }}">
                                        <div class="progress position-relative" data-percentage="{{ round($courseProgress->ProgressPercentage()) }}">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>
                                            <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                            <div class="progress-value">
                                                <div>
                                                    {{ round($courseProgress->ProgressPercentage()) }}%
                                                </div>
                                            </div>
                                        </div>
                                        <p>{{ $courseProgress->Course()->name }}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>@lang('pages.certificates')</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="coursesGrid text-center">
                            @foreach($courseUnlocks as $courseProgress)
                                @if($courseProgress->Finished())
                                    <div>
                                        <a class="secondaryText mx-auto d-inline-block" href="{{ route('courses.certificate', [$courseProgress->Course()->id]) }}" download>
                                            <div class="progress position-relative" data-percentage="{{ round($courseProgress->ProgressPercentage()) }}">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <div class="progress-value">
                                                    <div class="small">
                                                        Download
                                                    </div>
                                                </div>
                                            </div>
                                            <p>{{ $courseProgress->Course()->name }}</p>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
