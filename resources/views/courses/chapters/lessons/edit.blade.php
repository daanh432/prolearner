@extends('layouts.app')

@section('title', 'Edit Lesson')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('courses.lessons.update', [ 'course' => $course->id, 'lesson' => $lesson->id]) }}" method="post" id="storeLesson" enctype="multipart/form-data" class="needs-validation col-md-6 mx-auto bg-white p-5 mt-5 rounded" novalidate>
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
