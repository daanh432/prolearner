<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserCourseUnlocksAmountOfLessons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_course_unlocks', function (Blueprint $table) {
            $table->dropColumn('amountOfLessons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_course_unlocks', function (Blueprint $table) {
            $table->unsignedInteger('amountOfLessons');
        });
    }
}
