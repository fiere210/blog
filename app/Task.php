<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

	public function scopeIncomplete($query) //Permite llamarlo Task::incomplete->where('yadayada')->get()
	{
		return $query->where('completed', 0);
	}
}
