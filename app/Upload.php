<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $guarded = ['id'];

    public function categories()
    {
    	return $this->belongsToMany('App\Category', 'upload_category_pivot');
    }
}
