<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel_game extends Model
{
    protected $fillable = [
        'id', 'question_title', 'option_A', 'option_B', 'option_C', 'option_D'
    ];
    public function option_A()
    {
        return $this->belongsTo(Option::class, 'option_A');
    }
    public function option_B()
    {
        return $this->belongsTo(Option::class, 'option_B');
    }
    public function option_C()
    {
        return $this->belongsTo(Option::class, 'option_C');
    }
    public function option_D()
    {
        return $this->belongsTo(Option::class, 'option_D');
    }
    
}
