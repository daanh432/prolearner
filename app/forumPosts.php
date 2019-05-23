<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\forumPosts
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forumPosts whereUserId($value)
 * @mixin \Eloquent
 */
class forumPosts extends Model
{
    //
}
