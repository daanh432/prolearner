<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\course_chapters
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapters newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapters newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapters query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $course_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapters whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapters whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapters whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapters whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\course_chapters whereUpdatedAt($value)
 */
class course_chapters extends Model
{
    //
}
