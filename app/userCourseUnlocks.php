<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\userCourseUnlocks
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_id
 * @property int $amountOfCompletedLessons
 * @property int $amountOfLessons
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|userCourseUnlocks newModelQuery()
 * @method static Builder|userCourseUnlocks newQuery()
 * @method static Builder|userCourseUnlocks query()
 * @method static Builder|userCourseUnlocks whereAmountOfCompletedLessons($value)
 * @method static Builder|userCourseUnlocks whereAmountOfLessons($value)
 * @method static Builder|userCourseUnlocks whereCourseId($value)
 * @method static Builder|userCourseUnlocks whereCreatedAt($value)
 * @method static Builder|userCourseUnlocks whereId($value)
 * @method static Builder|userCourseUnlocks whereUpdatedAt($value)
 * @method static Builder|userCourseUnlocks whereUserId($value)
 * @mixin Eloquent
 */
class userCourseUnlocks extends Model
{
    protected $fillable = ['user_id', 'course_id'];

    public function Finished()
    {
        $course = $this->belongsTo('App\courses', 'course_id', 'id')->get()->first();
        if ($course != null) {
            return $this->AmountOfCompletedLessons() >= $course->AmountOfAssignments() && $course->AmountOfAssignments() > 0;
        } else {
            return false;
        }
    }

    public function ProgressPercentage()
    {
        $course = $this->belongsTo('App\courses', 'course_id', 'id')->get()->first();
        if ($course != null && $course->AmountOfAssignments() > 0) {
            return 100 / $course->AmountOfAssignments() * $this->AmountOfCompletedLessons();
        } else {
            return 0;
        }
    }

    public function Course()
    {
        return $this->belongsTo('App\courses', 'course_id', 'id')->get()->first();
    }

    public function AmountOfCompletedLessons()
    {
        $amountOfCompletedLessons = 0;
        $course = $this->hasOne('App\courses', 'id', 'course_id')->get()->first();
        foreach ($course->Chapters() as $chapter) {
            foreach ($chapter->Lessons() as $lesson) {
                if ($lesson->Completed()) {
                    $amountOfCompletedLessons++;
                }
            }
        }
        return $amountOfCompletedLessons;
    }
}
