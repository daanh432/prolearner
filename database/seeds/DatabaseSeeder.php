<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UsersTableSeeder::class,
             CourseTableSeeder::class,
             CourseChapterSeeder::class,
             CourseChapterLessonSeeder::class,
         ]);
    }
}
