<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\courseFeedback
 *
 * @property int $id
 * @property int $course_id
 * @property string $comment
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|courseFeedback newModelQuery()
 * @method static Builder|courseFeedback newQuery()
 * @method static Builder|courseFeedback query()
 * @method static Builder|courseFeedback whereComment($value)
 * @method static Builder|courseFeedback whereCourseId($value)
 * @method static Builder|courseFeedback whereCreatedAt($value)
 * @method static Builder|courseFeedback whereId($value)
 * @method static Builder|courseFeedback whereUpdatedAt($value)
 * @mixin Eloquent
 */
class courseFeedback extends Model
{
    protected $fillable = ['course_id', 'comment'];
    protected $dates = ['created_at', 'updated_at'];
}
