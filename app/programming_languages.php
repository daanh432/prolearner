<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\programming_languages
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programming_languages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programming_languages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programming_languages query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programming_languages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programming_languages whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programming_languages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programming_languages whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programming_languages whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\programming_languages whereUpdatedAt($value)
 */
class programming_languages extends Model
{
    //
}
