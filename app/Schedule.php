<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'name', 'start_date', 'end_date', 'owner_id'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function cards()
    {
        return $this->belongsToMany(Card::class)->withPivot('start_time', 'end_time');
    }
}
