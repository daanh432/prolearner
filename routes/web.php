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

Route::get('/', 'GeneralController@Homepage')->name('index');
Route::get('/locale/{locale}', 'GeneralController@changeLocale')->name('locale.update');
Route::get('/contact', 'GeneralController@Contact')->name('contact');
Route::post('/contact', 'GeneralController@ContactSubmission')->name('contact.submission');
Route::get('/courses', 'CoursesController@index')->name('courses.index');
Route::get('/dashboard', 'GeneralController@Dashboard')->name('dashboard')->middleware('auth');

#region Courses Routes
Route::get('/courses/create', 'CoursesController@create')->name('courses.create');
Route::post('/courses', 'CoursesController@store')->name('courses.store');
Route::get('/courses/{course}', 'CoursesController@show')->name('courses.show');
Route::get('/courses/{course}/edit', 'CoursesController@edit')->name('courses.edit');
Route::patch('/courses/{course}', 'CoursesController@update')->name('courses.update');
Route::delete('/courses/{course}', 'CoursesController@destroy')->name('courses.destroy');
#endregion

#region Chapter Routes
Route::middleware('verified')->group(function () {
    Route::get('/courses/{course}/chapters/create', 'CourseChaptersController@create')->name('courses.chapters.create');
    Route::post('/courses/{course}/chapters', 'CourseChaptersController@store')->name('courses.chapters.store');
    Route::get('/courses/{course}/chapters/{chapter}', 'CourseChaptersController@edit')->name('courses.chapters.edit');
    Route::patch('/courses/{course}/chapters/{chapter}', 'CourseChaptersController@update')->name('courses.chapters.update');
    Route::delete('/courses/{course}/chapters/{chapter}', 'CourseChaptersController@destroy')->name('courses.chapters.destroy');
});
#endregion

Route::get('/courses/{course}/chapters/{chapter}/lessons/create', 'CourseChapterLessonsController@create')->name('courses.chapters.lessons.create');
Route::post('/courses/{course}/chapters/{chapter}/lessons', 'CourseChapterLessonsController@store')->name('courses.chapters.lessons.store');
Route::get('/courses/{course}/lessons/{lesson}', 'CourseChapterLessonsController@show')->name('courses.lessons.show');
Route::get('/courses/{course}/lessons/{lesson}/edit', 'CourseChapterLessonsController@edit')->name('courses.lessons.edit');
Route::patch('/courses/{course}/lessons/{lesson}', 'CourseChapterLessonsController@update')->name('courses.lessons.update');
Route::delete('/courses/{course}/lessons/{lesson}', 'CourseChapterLessonsController@destroy')->name('courses.lessons.destroy');
