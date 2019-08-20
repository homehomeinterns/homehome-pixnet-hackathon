<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword_spot extends Model
{
    protected $fillable = [
	    'keyword_id', 'spot_id'
    ];

    protected $table = 'keyword_option';
}
