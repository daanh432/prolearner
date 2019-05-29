<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\userCourseUnlocks
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_id
 * @property int $amountOfCompletedLessons
 * @property int $amountOfLessons
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereAmountOfCompletedLessons($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereAmountOfLessons($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\userCourseUnlocks whereUserId($value)
 * @mixin \Eloquent
 */
class userCourseUnlocks extends Model
{
    protected $fillable = ['user_id', 'course_id', 'amountOfCompletedLessons'];

    public function Finished() {
        $course = $this->belongsTo('App\courses', 'course_id', 'id')->get()->first();
        if ($course != null) {
            return $this->amountOfCompletedLessons >= $course->AmountOfAssignments();
        } else {
            return false;
        }
    }

    public function ProgressPercentage() {
        $course = $this->belongsTo('App\courses', 'course_id', 'id')->get()->first();
        if ($course != null && $course->AmountOfAssignments() > 0) {
            return 100 / $course->AmountOfAssignments() * $this->amountOfCompletedLessons;
        } else {
            return 0;
        }
    }

    public function Course() {
        return $this->belongsTo('App\courses', 'course_id', 'id')->get()->first();
    }
}
