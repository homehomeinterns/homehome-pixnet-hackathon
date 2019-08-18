<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    public function keywords()
    {
        return $this->belongsToMany(Keyword::class)->withPivot('keyword');
    }
}
