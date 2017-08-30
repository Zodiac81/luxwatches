<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopSeller extends Model
{
    protected $table = 'order_watch';

    function watch(){
     return $this->belongsTo('App\Watch');
    }
}
