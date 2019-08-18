<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    public function spots()
    {
        return $this->belongsToMany(Spot::class)->withPivot('spot_name', 'start_point');
    }

    public function options()
    {
        return $this->belongsToMany(Option::class)->withPivot('option_content');
    }
}
