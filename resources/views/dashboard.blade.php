@extends('layouts.app')

@section('title', 'Create course')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12 containerBackground secondaryText" id="accountPage">
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
                <div class="row profileHeader">
                    <h2>Course:</h2>
                    <div class="col-md-9 mx-auto">
                        @foreach($courseUnlocks as $courseProgress)
                            @if($courseProgress->ProgressPercentage() == 100)
                                {{--courses that are unlocked and finished--}}
                                <h1>{{ $courseProgress->Course()->name }}</h1>
                            @else
                                {{--courses that are unlocked but not finished--}}
                                <h1>{{ $courseProgress->Course()->name }}</h1>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
