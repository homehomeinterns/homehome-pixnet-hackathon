<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option_keyword_mapping extends Model
{
    protected $fillable = [
	'option_id', 'keyword_id'
    ];
}
