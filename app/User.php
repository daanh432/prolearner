<?php

namespace App;

use Cache;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Carbon;

/**
 * App\User
 *
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @mixin Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property int $credits
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereCredits($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereEmailVerifiedAt($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereUpdatedAt($value)
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'credits',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function PayCredits(int $a_amountOfCoins)
    {
        if ($a_amountOfCoins >= 0 && $this->credits >= $a_amountOfCoins) {
            $this->credits = $this->credits - $a_amountOfCoins;
            $this->save();
            return true;
        } else {
            return false;
        }
    }

    public function AddCredits(int $a_amountOfCoins)
    {
        if ($a_amountOfCoins >= 0) {
            $this->credits = $this->credits + $a_amountOfCoins;
            $this->save();
            return true;
        } else {
            return false;
        }
    }

    public function isAdmin()
    {
        if (Auth()->user()->userLevel === 4) {
            return true;
        } else {
            false;
        }
    }

    public function CourseUnlocks()
    {
        return $this->hasMany('App\userCourseUnlocks', 'user_id', 'id')->get();
    }
}
