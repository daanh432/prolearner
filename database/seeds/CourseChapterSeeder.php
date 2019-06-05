<?php

use Illuminate\Database\Seeder;

class CourseChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_chapters')->insert([
            'course_id' => 1,
            'name' => Str::random(10),
        ]);

        DB::table('course_chapters')->insert([
            'course_id' => 1,
            'name' => Str::random(10),
        ]);

        DB::table('course_chapters')->insert([
            'course_id' => 1,
            'name' => Str::random(10),
        ]);

        DB::table('course_chapters')->insert([
            'course_id' => 1,
            'name' => Str::random(10),
        ]);
    }
}
