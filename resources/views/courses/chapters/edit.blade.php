@extends('layouts.app')

@section('title', 'Edit Chapter')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('courses.chapters.update', [ 'course' => $course->id, 'chapters' => $chapter->id]) }}" method="post" id="storeChapter" enctype="multipart/form-data" class="needs-validation col-md-6 mx-auto bg-white p-5 mt-5 rounded" novalidate>
                @csrf
                @method('PATCH')
                <h1>Create chapter</h1>
                <div class="form-group">
                    <input type="text" class="form-control" id="chapName" placeholder="Chapter name" name="name" value="{{ $chapter->name }}" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
