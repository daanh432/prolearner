<?php

use Illuminate\Database\Seeder;

class CourseChapterLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_chapter_lessons')->insert([
            'course_chapter_id' => 1,
            'name' => Str::random(10),
            'description' => Str::random(50),
            'assignment' => Str::random(50) . '\n<h1>This is a test</h1>',
            'inputCheck' => '<h1>This is a test</h1>',
            'outputCheck' => Str::random(20),
        ]);

        DB::table('course_chapter_lessons')->insert([
            'course_chapter_id' => 1,
            'name' => Str::random(10),
            'description' => Str::random(50),
            'assignment' => Str::random(50) . '\n<h1>This is a test</h1>',
            'inputCheck' => '<h1>This is a test</h1>',
            'outputCheck' => Str::random(20),
        ]);

        DB::table('course_chapter_lessons')->insert([
            'course_chapter_id' => 2,
            'name' => Str::random(10),
            'description' => Str::random(50),
            'assignment' => Str::random(50) . '\n<h1>This is a test</h1>',
            'inputCheck' => '<h1>This is a test</h1>',
            'outputCheck' => Str::random(20),
        ]);

        DB::table('course_chapter_lessons')->insert([
            'course_chapter_id' => 2,
            'name' => Str::random(10),
            'description' => Str::random(50),
            'assignment' => Str::random(50) . '\n<h1>This is a test</h1>',
            'inputCheck' => '<h1>This is a test</h1>',
            'outputCheck' => Str::random(20),
        ]);
    }
}
