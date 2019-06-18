<?php

use Illuminate\Database\Seeder;

class ProgrammingLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programming_languages')->insert([
            'name' => 'PHP',
            'image' => '',
            'description' => Str::random(50),
        ]);

        DB::table('programming_languages')->insert([
            'name' => 'HTML',
            'image' => '',
            'description' => Str::random(50),
        ]);

        DB::table('programming_languages')->insert([
            'name' => 'CSS',
            'image' => '',
            'description' => Str::random(50),
        ]);

        DB::table('programming_languages')->insert([
            'name' => 'Javascript',
            'image' => '',
            'description' => Str::random(50),
        ]);
    }
}
