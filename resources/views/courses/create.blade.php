@extends('layouts.app')

@section('title', 'Create course')

@section('content')
    <div class="row">
        <form action="{{ route('courses.store') }}" method="post" id="storeCourse" enctype="multipart/form-data" class="needs-validation col-md-6 mx-auto bg-white p-5 mt-5 rounded" novalidate>
            @csrf
            <h1>Create course</h1>
            <div class="form-group">
                <input type="text" class="form-control" id="cName" placeholder="Course name" name="name" value="{{ old('name') }}" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="cDur" placeholder="Duration" name="duration" value="{{ old('duration') }}" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="row text-center mb-3">
                <div class="col-4 custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="cBeginner" name="difficulty" value="0" checked>
                    <label class="custom-control-label" for="cBeginner">Beginner</label>
                </div>
                <div class="col-4 custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="cAdvanced" name="difficulty" value="1">
                    <label class="custom-control-label" for="cAdvanced">Intermediate</label>
                </div>
                <div class="col-4 custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="cVeteran" name="difficulty" value="2">
                    <label class="custom-control-label" for="cVeteran">Advanced</label>
                </div>
                <div class="col-4 custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="cVeteran" name="difficulty" value="3">
                    <label class="custom-control-label" for="cVeteran">Expert</label>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="cPrice" placeholder="Price" name="price" value="{{ old('price') }}" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <select name="programming_language_id" class="custom-select">
                    <option disabled selected>Custom Select Language</option>
                    @foreach($languages as $language)
                        <option {{ old('language') == $language ? 'selected' : '' }} value="{{ $language->id }}">{{ $language->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="file" class="form-control" id="cImage" placeholder="Image" name="image" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection