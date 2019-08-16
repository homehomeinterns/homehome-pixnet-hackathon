<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'name', 'start_date', 'end_date', 'owner_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function schedule_card_mapping()
    {
        return $this->hasMany(Schedules_cards_mapping::class, 'id');
    }
}
