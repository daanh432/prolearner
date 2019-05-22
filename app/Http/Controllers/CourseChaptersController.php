<?php

namespace App\Http\Controllers;

use App\courseChapters;
use App\courses;
use Illuminate\Http\Request;

class CourseChaptersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param courses $course
     * @return \Illuminate\Http\Response
     */
    public function index(courses $course)
    {
        $chapters = courseChapters::all();
        return view('courses.chapters.index', [
            'course' => $course,
            'chapters' => $chapters
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param courses $course
     * @return \Illuminate\Http\Response
     */
    public function create(courses $course)
    {
        return view('courses.chapters.create', [
            'course' => $course
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, courses $course)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
        ]);

        $validated['course_id'] = $course->id;

        courseChapters::create($validated);

        return redirect(route('courses.show', ['course_id' => $course->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param courses $course
     * @param courseChapters $chapter
     * @return \Illuminate\Http\Response
     */
    public function show(courses $course, courseChapters $chapter)
    {
        return view('courses.chapters.show', [
            'course' => $course,
            'chapter' => $chapter
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param courses $course
     * @param courseChapters $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit(courses $course, courseChapters $chapter)
    {
        return view('courses.chapters.edit', [
            'course' => $course,
            'chapter' => $chapter
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\courseChapters  $courseChapters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, courses $course, courseChapters $chapter)
    {
        $validated = $request->validate([
            'name' => ['required', 'string']
        ]);

        $validated['course_id'] = $course->id;

        $chapter->update($validated);

        return redirect(route('courses.show', ['course_id' => $course->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\courseChapters  $courseChapters
     * @return \Illuminate\Http\Response
     */
    public function destroy(courses $course, courseChapters $chapter)
    {
        //
    }
}
