<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function uploads()
    {
    	return $this->belongsToMany('App\Upload', 'upload_category_pivot');
    }
}
