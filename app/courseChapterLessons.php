<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereAssignment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereCourseChapterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereInputCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereOutputCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseChapterLessons whereUpdatedAt($value)
 * @mixin \Eloquent
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
}
