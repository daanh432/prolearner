<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true, 'register' => true]);

Route::get('/','GeneralController@Homepage')->name('index');
Route::get('/contact','GeneralController@Contact')->name('contact');
Route::post('/contact','GeneralController@ContactSubmission')->name('contact.submission');
Route::get('/dashboard', 'GeneralController@Dashboard')->name('dashboard');

Route::resource('/courses', 'CoursesController');
Route::resource('/courses.chapters', 'CourseChaptersController');
Route::resource('/courses.chapters.lessons', 'CourseChapterLessonsController');