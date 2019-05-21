<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateForumPostsAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forum_posts', function (Blueprint $table) {
            $table->dropForeign('course_id');
            $table->dropColumn('course_id');
            $table->unsignedBigInteger('forum_post_reaction_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forum_posts', function (Blueprint $table) {
            $table->dropForeign('forum_post_reaction_id');
            $table->dropColumn('forum_post_reaction_id');
            $table->unsignedBigInteger('course_id');
        });
    }
}
