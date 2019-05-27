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
    protected $guarded = [];

    public function Finished() {
        return $this->amountOfCompletedLessons == $this->amountOfLessons;
    }

    public function ProgressPercentage() {
        return 100 / $this->amountOfLessons * $this->amountOfCompletedLessons;
    }
}
