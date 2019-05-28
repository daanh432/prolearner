@extends('layouts.app')

@section('title', 'Edit Lesson')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto bg-white p-5 mt-5 rounded">
                <form action="{{ route('courses.lessons.update', [ 'course' => $course->id, 'lesson' => $lesson->id]) }}" method="post" id="storeLesson" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PATCH')
                    <h1>Edit lesson</h1>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lesName" placeholder="Lesson name" name="name" value="{{ $lesson->name }}" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="lesDes" placeholder="Description" name="description" maxlength="5000" required>{{ $lesson->description }}</textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="lesAssignment" placeholder="Assignment name" name="assignment" maxlength="5000" required>{{ $lesson->assignment }}</textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lesInputCheck" placeholder="Input check" name="inputCheck" value="{{ $lesson->inputCheck }}" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lesOutputCheck" placeholder="Output check" name="outputCheck" value="{{ $lesson->outputCheck }}" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </form>
                <form action="{{ route('courses.lessons.destroy', [ 'course' => $course->id, 'lesson' => $lesson->id]) }}" id="deleteLesson" method="POST">
                    @csrf
                    @method('DELETE')
                </form>
                <button type="submit" class="btn btn-primary" form="storeLesson">Submit</button>
                <button type="submit" class="btn btn-danger" form="deleteLesson">Delete</button>
            </div>
        </div>
    </div>
@endsection
