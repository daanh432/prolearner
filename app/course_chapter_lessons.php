<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\course_chapter_lessons
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapter_lessons newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapter_lessons newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapter_lessons query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $course_chapter_id
 * @property string $name
 * @property string $description
 * @property string $assignment
 * @property string $inputCheck
 * @property string $outputCheck
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapter_lessons whereAssignment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapter_lessons whereCourseChapterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapter_lessons whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapter_lessons whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapter_lessons whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapter_lessons whereInputCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapter_lessons whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapter_lessons whereOutputCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapter_lessons whereUpdatedAt($value)
 */
class course_chapter_lessons extends Model
{
    //
}
