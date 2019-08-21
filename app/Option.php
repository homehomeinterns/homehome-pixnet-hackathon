<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
	    'id', 'option_content'
    ];
    public function keywords()
    {
        return $this->belongsToMany(Keyword::class);
    }
}
