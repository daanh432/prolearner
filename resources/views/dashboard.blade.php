@extends('layouts.app')

@section('title', 'Create course')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12" id="accountPage">
                <div class="row" id="profileHeader">
                    <div class="col-md-3">
                        <img src="{{asset('assets/img/user.png')}}" class="rounded-circle mx-auto mx-md-0 d-block d-md-inline-block"
                             alt="User image">
                    </div>
                    <div class="col-md-9 mt-sm-5">
                        <h2 class="text-center text-md-left">{{ Auth::user()->name }}</h2>
                        <h3 class="text-center text-sm-left">Credits: {{ Auth::user()->credits }}</h3>
                        <form action="{{ route('logout') }}" method="post" class="d-inline-block">
                            @csrf
                            <button type="submit" class="btn btn-primary">Logout</button>
                        </form>
                        <a href="" class="btn btn-dark d-inline-block">Edit profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection