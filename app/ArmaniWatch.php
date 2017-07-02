<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArmaniWatch extends Model
{
    //
    protected $table     ='men_watches_armani';
   // protected $primaryKey = 'product_id';

   	  public static function armani_images(){

	    return $this->hasOne('App\ArmaniImages','product_id_img','id');
	        
      }
}