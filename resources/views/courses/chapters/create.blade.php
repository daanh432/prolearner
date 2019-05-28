@extends('layouts.app')

@section('title', 'Create Chapter')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('courses.chapters.store', [ 'course' => $course->id]) }}" method="post" id="storeChapter" enctype="multipart/form-data" class="needs-validation col-md-6 mx-auto bg-white p-5 mt-5 rounded" novalidate>
                @csrf
                <h1>Create chapter</h1>
                <div class="form-group">
                    <input type="text" class="form-control" id="chapName" placeholder="Chapter name" name="name" value="{{ old('name') }}" max="150" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
