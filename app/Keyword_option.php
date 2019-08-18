<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword_option extends Model
{
    protected $fillable = [
	'option_id', 'keyword_id'
    ];

    protected $table = 'keyword_option';
}
