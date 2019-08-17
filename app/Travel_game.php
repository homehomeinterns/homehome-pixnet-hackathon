<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel_game extends Model
{
    protected $fillable = [
	'id', 'question_title', 'option_A', 'option_B', 'option_C', 'option_D'
    ];
}
