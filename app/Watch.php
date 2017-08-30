<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    public function images(){

    	return $this->hasMany('App\Image', 'watches_id');
    }
}
