<?php

namespace App\Http\Controllers;

use App\courseChapterLessons;
use App\courseChapters;
use App\courses;
use Illuminate\Http\Request;

class CourseChapterLessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(courses $course, courseChapters $chapter)
    {
        $lessons = courseChapterLessons::all();
        return view('courses.chapters.lessons.index', [
            'course' => $course,
            'chapter' => $chapter,
            'lessons' => $lessons
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(courses $course, courseChapters $chapter)
    {
        return view('courses.chapters.lessons.create', [
            'course' => $course,
            'chapter' => $chapter
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, courses $course , courseChapters $chapter)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string', 'max:5000'],
            'assignment' => ['required', 'string', 'max:5000'],
            'inputCheck' => ['required', 'string'],
            'outputCheck' => ['required', 'string'],
        ]);

        $validated['course_chapter_id'] = $chapter->id;

        courseChapterLessons::create($validated);

        return redirect(route('courses.show', ['course_id' => $course->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\courseChapterLessons  $courseChapterLessons
     * @return \Illuminate\Http\Response
     */
    public function show(courseChapterLessons $courseChapterLessons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\courseChapterLessons  $courseChapterLessons
     * @return \Illuminate\Http\Response
     */
    public function edit(courseChapterLessons $courseChapterLessons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\courseChapterLessons  $courseChapterLessons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, courseChapterLessons $courseChapterLessons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\courseChapterLessons  $courseChapterLessons
     * @return \Illuminate\Http\Response
     */
    public function destroy(courseChapterLessons $courseChapterLessons)
    {
        //
    }
}
