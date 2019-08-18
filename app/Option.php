<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public function keywords()
    {
        return $this->belongsToMany(Keyword::class);
    }
}
