<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable = [
        'id', 'keyword'
    ];
    
    public function spots()
    {
        return $this->belongsToMany(Spot::class);
    }

    public function options()
    {
        return $this->belongsToMany(Option::class);
    }
}
