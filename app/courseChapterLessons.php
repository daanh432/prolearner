<?php

namespace App;

use Auth;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\courseChapterLessons
 *
 * @property int $id
 * @property int $course_chapter_id
 * @property string $name
 * @property string $description
 * @property string $assignment
 * @property string $inputCheck
 * @property string $outputCheck
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|courseChapterLessons newModelQuery()
 * @method static Builder|courseChapterLessons newQuery()
 * @method static Builder|courseChapterLessons query()
 * @method static Builder|courseChapterLessons whereAssignment($value)
 * @method static Builder|courseChapterLessons whereCourseChapterId($value)
 * @method static Builder|courseChapterLessons whereCreatedAt($value)
 * @method static Builder|courseChapterLessons whereDescription($value)
 * @method static Builder|courseChapterLessons whereId($value)
 * @method static Builder|courseChapterLessons whereInputCheck($value)
 * @method static Builder|courseChapterLessons whereName($value)
 * @method static Builder|courseChapterLessons whereOutputCheck($value)
 * @method static Builder|courseChapterLessons whereUpdatedAt($value)
 * @mixin Eloquent
 */
class courseChapterLessons extends Model
{
    protected $fillable = [
        'course_chapter_id',
        'name',
        'description',
        'assignment',
        'inputCheck',
        'outputCheck'
    ];

    /** Returns the chapter that belongs to this lesson
     * @return mixed
     */
    public function Chapter()
    {
        return $this->belongsTo('App\courseChapters', 'course_chapter_id', 'id')->get()->first();
    }

    /** Returns the status if you have completed the lesson or not
     * @return bool
     */
    public function Completed()
    {
        if (Auth::check() && Auth::user()->id != null) {
            $userProgress = $this->hasOne('App\userProgress', 'course_chapter_lesson_id', 'id')->where('user_id', '=', Auth::user()->id)->get()->first();
            if ($userProgress != null && $userProgress->completed === 1) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /** Returns the url to the next lesson / page
     * @return string
     */
    public function NextLesson()
    {
        if ($this->Chapter()->Course()->Completed()) {
            return route('courses.completed', $this->Chapter()->Course()->id);
        } else {
            $nextLesson = courseChapterLessons::where('course_chapter_id', '=', $this->course_chapter_id)->where('id', '>', $this->id)->get()->first();
            if ($nextLesson != null && $nextLesson->id != null) {
                return route('courses.lessons.show', [$nextLesson->Chapter()->Course()->id, $nextLesson->id]);
            } else {
                $nextLesson = courseChapters::where('course_id', '=', $this->Chapter()->Course()->id)->where('id', '>', $this->Chapter()->id)->get()->first();
                if ($nextLesson != null && $nextLesson->id != null) {
                    if ($nextLesson->Lessons()->first() != null) {
                        $nextLessonId = $nextLesson->Lessons()->first()->id;
                        return route('courses.lessons.show', [$nextLesson->Course()->id, $nextLessonId]);
                    } else {
                        return route('courses.show', [$this->Chapter()->Course()->id]);
                    }
                } else {
                    return route('courses.show', [$this->Chapter()->Course()->id]);
                }
            }
        }
    }
}
