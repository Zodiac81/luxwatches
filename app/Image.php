<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function watch(){
    	return $this->belongsTo('App\Watch','watches_id');
    }
}
