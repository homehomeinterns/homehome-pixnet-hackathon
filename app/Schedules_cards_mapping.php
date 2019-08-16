<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules_cards_mapping extends Model
{
    protected $fillable = [
        'schedule_id', 'card_id'
    ];
    protected $primaryKey = ['schedule_id', 'card_id'];
    public $incrementing = false;

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id');
    }

    public function schedule_card()
    {
        return $this->belongsTo(Schedule_card::class, 'card_id');
    }

    protected function setKeysForSaveQuery(Builder $query)
    {
        $query->where('schedule_id', '=', $this->getAttribute('schedule_id'))
            ->where('card_id', '=', $this->getAttribute('card_id'));
        return $query;
    }
}
