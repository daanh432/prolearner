<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\userProgress
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_chapter_lesson_id
 * @property int $completed
 * @property string $answer
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|userProgress newModelQuery()
 * @method static Builder|userProgress newQuery()
 * @method static Builder|userProgress query()
 * @method static Builder|userProgress whereAnswer($value)
 * @method static Builder|userProgress whereCompleted($value)
 * @method static Builder|userProgress whereCourseChapterLessonId($value)
 * @method static Builder|userProgress whereCreatedAt($value)
 * @method static Builder|userProgress whereId($value)
 * @method static Builder|userProgress whereUpdatedAt($value)
 * @method static Builder|userProgress whereUserId($value)
 * @mixin Eloquent
 */
class userProgress extends Model
{
    protected $fillable = ['user_id', 'course_chapter_lesson_id', 'completed', 'answer'];
}
