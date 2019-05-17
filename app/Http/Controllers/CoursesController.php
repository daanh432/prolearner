<?php

namespace App\Http\Controllers;

use App\courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = courses::all();
        return view('courses.index', [
            'courses' => $courses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\courses  $course
     * @return \Illuminate\Http\Response
     */
    public function show(courses $course)
    {
        return view('courses.show', [
            'course' => $course
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\courses  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(courses $course)
    {
        return view('courses.edit', [
            'course' => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, courses $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(courses $courses)
    {
        //
    }
}
