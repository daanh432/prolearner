<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\forum_post_reactions
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_post_reactions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_post_reactions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_post_reactions query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int $form_post_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_post_reactions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_post_reactions whereFormPostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_post_reactions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_post_reactions whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\forum_post_reactions whereUserId($value)
 */
class forum_post_reactions extends Model
{
    //
}
