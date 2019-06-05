<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => Str::random(10),
            'duration' => '2 hours',
            'difficulty' => 3,
            'image' => '',
            'price' => 10,
            'description' => Str::random(50),
            'programming_language_id' => 1,
        ]);

        DB::table('courses')->insert([
            'name' => Str::random(10),
            'duration' => '2 hours',
            'difficulty' => 3,
            'image' => '',
            'price' => 10,
            'description' => Str::random(50),
            'programming_language_id' => 1,
        ]);
    }
}
