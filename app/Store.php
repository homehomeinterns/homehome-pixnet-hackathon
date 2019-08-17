<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'user_id', 'card_id'
    ];
    protected $primaryKey = ['user_id', 'card_id'];
    public $incrementing = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cards()
    {
        return $this->hasMany(Card::class);
    }

    protected function setKeysForSaveQuery(Builder $query)
    {
        $query->where('user_id', '=', $this->getAttribute('user_id'))
            ->where('card_id', '=', $this->getAttribute('card_id'));
        return $query;
    }
}
