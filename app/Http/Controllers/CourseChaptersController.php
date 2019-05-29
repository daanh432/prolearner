<?php

namespace App\Http\Controllers;

use App\courseChapters;
use App\courses;
use Illuminate\Http\Request;

class CourseChaptersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
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
     * @param \Illuminate\Http\Request $request
     * @param courses $course
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, courses $course)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
        ]);

        $validated['course_id'] = $course->id;

        courseChapters::create($validated);

        return redirect(route('courses.show', ['course_id' => $course->id]));
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
        abort_if($course->id != $chapter->Course()->id, 404);
        return view('courses.chapters.edit', [
            'course' => $course,
            'chapter' => $chapter
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param courses $course
     * @param courseChapters $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, courses $course, courseChapters $chapter)
    {
        abort_if($course->id != $chapter->Course()->id, 404);
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
        ]);

        $validated['course_id'] = $course->id;

        $chapter->update($validated);

        return redirect(route('courses.show', ['course_id' => $course->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param courses $course
     * @param courseChapters $chapter
     * @return void
     * @throws \Exception
     */
    public function destroy(courses $course, courseChapters $chapter)
    {
        abort_if($course->id != $chapter->Course()->id, 404);
        $chapter->delete();

        return redirect(route('courses.show', ['course_id' => $course->id]));
    }
}
