<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\forum_posts
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_posts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_posts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_posts query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int $course_id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_posts whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_posts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_posts whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_posts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_posts whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_posts whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_posts whereUserId($value)
 */
class forum_posts extends Model
{
    //
}
