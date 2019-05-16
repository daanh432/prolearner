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
        return view('courses.chapters.index', [
            'course' => $course
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param courses $course
     * @param \App\courseChapters $courseChapters
     * @return \Illuminate\Http\Response
     */
    public function show(courses $course, courseChapters $courseChapters)
    {
        return view('courses.chapters.show', [
            'course' => $course,
            'courseChapters' => $courseChapters
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param courses $course
     * @param \App\courseChapters $courseChapters
     * @return \Illuminate\Http\Response
     */
    public function edit(courses $course, courseChapters $courseChapters)
    {
        return view('courses.chapters.show', [
            'course' => $course,
            'courseChapters' => $courseChapters
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\courseChapters  $courseChapters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, courses $course, courseChapters $courseChapters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\courseChapters  $courseChapters
     * @return \Illuminate\Http\Response
     */
    public function destroy(courses $course, courseChapters $courseChapters)
    {
        //
    }
}
