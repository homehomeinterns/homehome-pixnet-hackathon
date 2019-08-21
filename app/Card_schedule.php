<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Card_schedule extends Model
{
	protected $primaryKey = ['schedule_id', 'card_id'];
	public $incrementing = false;

	protected function setKeysForSaveQuery(Builder $query)
       	{
		return $query->where('schedule_id', $this->getAttribute('schedule_id'))
			->where('card_id', $this->getAttribute('card_id'));
	}
}
