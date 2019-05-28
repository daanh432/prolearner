@extends('layouts.app')

@section('title', 'Edit Chapter')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto bg-white p-5 mt-5 rounded">
                <form action="{{ route('courses.chapters.update', [ 'course' => $course->id, 'chapters' => $chapter->id]) }}" id="editChapter" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PATCH')
                    <h1>Create chapter</h1>
                    <div class="form-group">
                        <input type="text" class="form-control" id="chapName" placeholder="Chapter name" name="name" value="{{ $chapter->name }}" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </form>
                <form action="{{ route('courses.chapters.destroy', ['course' => $course->id, 'chapters' => $chapter->id]) }}" method="post" id="deleteChapter">
                    @csrf
                    @method('DELETE')
                </form>
                <button type="submit" form="editChapter" class="btn btn-primary">Submit</button>
                <button type="submit" form="deleteChapter" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
@endsection
