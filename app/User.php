<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nick_name', 'email', 'password', 'gender', 'birth'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'id');
    }
    public function schedule_cards()
    {
        return $this->hasMany(Schedule_card::class, 'id');
    }
    public function stores()
    {
        return $this->hasMany(Store::class, 'id');
    }
}
