<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|courses newModelQuery()
 * @method static Builder|courses newQuery()
 * @method static Builder|courses query()
 * @method static Builder|courses whereCreatedAt($value)
 * @method static Builder|courses whereDifficulty($value)
 * @method static Builder|courses whereDuration($value)
 * @method static Builder|courses whereId($value)
 * @method static Builder|courses whereImage($value)
 * @method static Builder|courses whereName($value)
 * @method static Builder|courses wherePrice($value)
 * @method static Builder|courses whereProgrammingLanguageId($value)
 * @method static Builder|courses whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string $description
 * @method static Builder|courses whereDescription($value)
 */
class courses extends Model
{
    protected $fillable = ['name', 'duration', 'difficulty', 'programming_language_id', 'image', 'price', 'description'];

    /** Returns all the chapters from this course
     * @return Collection
     */
    public function Chapters()
    {
        return $this->hasMany('App\courseChapters', 'course_id', 'id')->orderBy('id', 'ASC')->get();
    }

    /** Returns all the comments from this course
     * @return Collection
     */
    public function Comments()
    {
        return $this->hasMany('App\courseFeedback', 'course_id', 'id')->orderBy('created_at', 'DESC')->get();
    }

    /** Returns the amount of assignments in this course
     * @return int
     */
    public function AmountOfAssignments()
    {
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
    public function Unlocked()
    {
        if (Auth::check()) {
            return userCourseUnlocks::where('course_id', $this->id)->where('user_id', Auth()->user()->id)->get()->count() > 0;
        } else {
            return false;
        }
    }

    /** Checks if the user has completed the course
     * @return bool
     */
    public function Completed()
    {
        if (Auth::check()) {
            $courseUnlock = $this->hasOne('App\userCourseUnlocks', 'course_id', 'id')->where('user_id', '=', Auth()->user()->id)->get()->first();
            if ($courseUnlock != null) {
                return $courseUnlock->Finished();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
