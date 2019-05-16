<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\courseFeedback
 *
 * @property int $id
 * @property int $course_id
 * @property string $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courseFeedback whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class courseFeedback extends Model
{
    //
}
