<?php

namespace App\Http\Controllers;

use App\courseChapterLessons;
use App\courseChapters;
use App\courses;
use Illuminate\Http\Request;

class CourseChapterLessonsController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified')->except(['show']);
        $this->middleware('auth')->only(['show']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param courses $course
     * @param courseChapters $chapter
     * @return \Illuminate\Http\Response
     */
    public function create(courses $course, courseChapters $chapter)
    {
        abort_if($course->id != $chapter->Course()->id, 404);

        return view('courses.chapters.lessons.create', [
            'course' => $course,
            'chapter' => $chapter
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, courses $course, courseChapters $chapter)
    {
        abort_if($course->id != $chapter->Course()->id, 404);
    }

    /**
     * Display the specified resource.
     *
     * @param courses $course
     * @param courseChapterLessons $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(courses $course, courseChapterLessons $lesson)
    {
        abort_if($course->id != $lesson->Chapter()->Course()->id, 404);
        return view('courses.chapters.lessons.show', [
            'lesson' => $lesson
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param courses $course
     * @param courseChapterLessons $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(courses $course, courseChapterLessons $lesson)
    {
        abort_if($course->id == $lesson->Chapter()->Course()->id, 404);
        return view('courses.chapters.lessons.edit', [
            'lesson' => $lesson
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param courses $course
     * @param courseChapterLessons $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, courses $course, courseChapterLessons $lesson)
    {
        abort_if($course->id != $lesson->Chapter()->Course()->id, 404);
        return redirect(route('courses.show', [$course->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param courses $course
     * @param courseChapterLessons $lesson
     * @return void
     * @throws \Exception
     */
    public function destroy(courses $course, courseChapterLessons $lesson)
    {
        abort_if($course->id != $lesson->Chapter()->Course()->id, 404);
        $lesson->delete();
    }
}
