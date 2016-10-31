<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Steward extends Model
{
    protected $guarded = ['id'];

    public function url()
	{
		$url = url('steward/'.$this->name);

		return $url;
	}

	public function nextSteward()
	{
		$query =
		  static::where('created_at', '>', $this->created_at)
		    ->where('created_at', '<=', Carbon::now())
		    ->orderBy('created_at', 'asc');

		return $query->first();
	}

	/**
	* Return previous steward before this one or null
	*
	* @param 
	* @return Steward
	*/
	public function previousSteward()
	{
		$query =
		  static::where('created_at', '<', $this->created_at)
		    ->orderBy('created_at', 'desc');
		
		return $query->first();
	}
}
