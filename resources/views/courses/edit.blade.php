@extends('layouts.app')

@section('title', 'Edit course')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto p-5 mt-5 br-20 containerBackground secondaryText">
                <form action="{{ route('courses.update', ['course' => $course->id]) }}" method="POST" id="editCourse" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PATCH')
                    <h1>Edit course</h1>
                    <div class="form-group">
                        <input type="text" class="form-control" id="cName" placeholder="Course name" name="name" value="{{ $course->name }}" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="cDes" placeholder="Description" name="description" maxlength="300" required>{{ $course->description }}</textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="cDur" placeholder="Duration" name="duration" value="{{ $course->duration }}" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="row text-center mb-3">
                        <div class="col-3 custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="cBeginner" name="difficulty" value="0" {{ $course->difficulty == 0 ? 'checked' : '' }}>
                            <label class="custom-control-label" for="cBeginner">Beginner</label>
                        </div>
                        <div class="col-3 custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="cAdvanced" name="difficulty" value="1" {{ $course->difficulty == 1 ? 'checked' : '' }}>
                            <label class="custom-control-label" for="cAdvanced">Intermediate</label>
                        </div>
                        <div class="col-3 custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="cVeteran" name="difficulty" value="2" {{ $course->difficulty == 2 ? 'checked' : '' }}>
                            <label class="custom-control-label" for="cVeteran">Advanced</label>
                        </div>
                        <div class="col-3 custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="cExpert" name="difficulty" value="3" {{ $course->difficulty == 3 ? 'checked' : '' }}>
                            <label class="custom-control-label" for="cExpert">Expert</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="cPrice" placeholder="Price" name="price" value="{{ $course->price }}" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <select name="programming_language_id" class="custom-select">
                            <option disabled selected>Custom Select Language</option>
                            @foreach($languages as $language)
                                <option {{ old('language') == $language ? 'selected' : '' }} value="{{ $language->id }}" {{ $course->programming_language_id == $language->id ? 'selected' : ''}}>{{ $language->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" id="cImage" placeholder="Image" name="image" value="{{ $course->image }}">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please upload a valid image.</div>
                    </div>
                </form>
                <form action="{{ route('courses.destroy', $course->id) }}" method="post" class="" id="deleteCourse">
                    @csrf
                    @method('DELETE')
                </form>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-75 br-20" form="editCourse">Submit</button>
                    <button type="submit" class="btn btn-danger w-75 br-20 mt-md-2" form="deleteCourse">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection
