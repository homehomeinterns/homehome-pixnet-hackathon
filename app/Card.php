<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'title', 'describe', 'article_url', 'article_content', 'image_url', 'owner_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'owner_id');
    }

    public function schedules()
    {
        return $this->belongsToMany(Schedule::class);
    }
}
