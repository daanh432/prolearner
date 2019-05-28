<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\courses
 *
 * @property int $id
 * @property int $programming_language_id
 * @property string $name
 * @property string $duration
 * @property string $difficulty
 * @property string $image
 * @property int $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereDifficulty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereProgrammingLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereDescription($value)
 */
class courses extends Model
{
    protected $fillable = ['name', 'duration', 'difficulty', 'programming_language_id', 'image', 'price', 'description'];

    /** Returns all the chapters from this course
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function Chapters() {
        return $this->hasMany('App\courseChapters', 'course_id', 'id')->orderBy('id', 'ASC')->get();
    }

    /** Returns the amount of assignments in this course
     * @return int
     */
    public function AmountOfAssignments() {
        $m_amountOfAssignments = 0;

        foreach ($this->Chapters() as $chapter) {
            foreach ($chapter->Lessons() as $lesson) {
                $m_amountOfAssignments++;
            }
        }

        return $m_amountOfAssignments;
    }

    /** Checks if user has unlocked and bought the course
     * @return bool
     */
    public function Unlocked() {
        if (Auth::check()) {
            return userCourseUnlocks::where('course_id', $this->id)->where('user_id', Auth()->user()->id)->get()->count() > 0;
        } else {
            return false;
        }
    }
}
