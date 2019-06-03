<?php

namespace App\Http\Controllers;

use App\courseChapterLessons;
use App\courseChapters;
use App\courses;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CourseChapterLessonsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['show']);
        $this->middleware('can:view,lesson')->only(['show']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param courses $course
     * @param courseChapters $chapter
     * @return Response
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
     * @param Request $request
     * @return Response
     */
    public function store(Request $request, courses $course, courseChapters $chapter)
    {
        abort_if($course->id != $chapter->Course()->id, 404);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:200'],
            'description' => ['required', 'string', 'max:4096'],
            'assignment' => ['required', 'string', 'max:4096'],
            'inputCheck' => ['required', 'string', 'max:1024'],
            'outputCheck' => ['required', 'string', 'max:1024']
        ]);

        $validated['course_chapter_id'] = $chapter->id;

        courseChapterLessons::create($validated);

        return redirect(route('courses.show', ['course_id' => $course->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param courses $course
     * @param courseChapterLessons $lesson
     * @return Response
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
     * @return Response
     */
    public function edit(courses $course, courseChapterLessons $lesson)
    {
        abort_if($course->id != $lesson->Chapter()->Course()->id, 404);
        return view('courses.chapters.lessons.edit', [
            'lesson' => $lesson,
            'course' => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param courses $course
     * @param courseChapterLessons $lesson
     * @return Response
     */
    public function update(Request $request, courses $course, courseChapterLessons $lesson)
    {
        abort_if($course->id != $lesson->Chapter()->Course()->id, 404);
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:200'],
            'description' => ['required', 'string', 'max:4096'],
            'assignment' => ['required', 'string', 'max:4096'],
            'inputCheck' => ['required', 'string', 'max:1024'],
            'outputCheck' => ['required', 'string', 'max:1024']
        ]);

        $validated['course_id'] = $course->id;

        $lesson->update($validated);


        return redirect(route('courses.show', [$course->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param courses $course
     * @param courseChapterLessons $lesson
     * @return void
     * @throws Exception
     */
    public function destroy(courses $course, courseChapterLessons $lesson)
    {
        abort_if($course->id != $lesson->Chapter()->Course()->id, 404);
        $lesson->delete();

        return redirect(route('courses.show', [$course->id]));
    }
}
