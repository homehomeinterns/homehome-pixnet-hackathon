<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule_card extends Model
{
    protected $fillable = [
        'title', 'describe', 'article_url', 'article_content', 'image_url', 'owner_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function schedule_card_mapping()
    {
        return $this->hasMany(Schedule_card_mapping::class, 'id');
    }
}
