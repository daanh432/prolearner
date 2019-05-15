<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\courses
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $programming_language_id
 * @property string $name
 * @property string $duration
 * @property string $difficulty
 * @property string $image
 * @property int $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereDifficulty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereProgrammingLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\courses whereUpdatedAt($value)
 */
class courses extends Model
{
    //
}
