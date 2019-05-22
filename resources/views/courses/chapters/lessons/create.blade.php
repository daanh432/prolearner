@extends('layouts.app')

@section('title', 'Create lesson')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('courses.chapters.lessons.store', [ 'course' => $course->id, 'chaper' => $chapter->id]) }}" method="post" id="storeLesson" enctype="multipart/form-data" class="needs-validation col-md-6 mx-auto bg-white p-5 mt-5 rounded" novalidate>
                @csrf
                <h1>Create lesson</h1>
                <div class="form-group">
                    <input type="text" class="form-control" id="lesName" placeholder="Lesson name" name="name" value="{{ old('name') }}" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" id="lesDes" placeholder="Description" name="description" maxlength="5000" required>{{ old('duration') }}</textarea>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" id="lesAssignment" placeholder="Assignment name" name="assignment" maxlength="5000" required>{{ old('assignment') }}</textarea>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="lesInputCheck" placeholder="Input check" name="inputCheck" value="{{ old('inputCheck') }}" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="lesOutputCheck" placeholder="Output check" name="outputCheck" value="{{ old('outputCheck') }}" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection