<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiggerLimitsLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_chapter_lessons', function (Blueprint $table) {
            $table->text('description')->change();
            $table->text('assignment')->change();
            $table->text('inputCheck')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_chapter_lessons', function (Blueprint $table) {
            //
        });
    }
}
