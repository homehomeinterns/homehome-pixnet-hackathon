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
        return $this->hasMany(Schedule::class, 'owner_id');
    }
    public function cards()
    {
        return $this->hasMany(Card::class, 'owner_id');
    }
    public function stores()
    {
        return $this->hasMany(Store::class);
    }
}
