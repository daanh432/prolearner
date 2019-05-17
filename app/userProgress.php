<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\userProgress
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_chapter_lesson_id
 * @property int $completed
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereCourseChapterLessonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userProgress whereUserId($value)
 * @mixin \Eloquent
 */
class userProgress extends Model
{
    //
}
