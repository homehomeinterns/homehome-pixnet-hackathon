<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword_spot_mapping extends Model
{
    protected $fillable = [
	    'keyword_id', 'spot_id'
    ];

}
