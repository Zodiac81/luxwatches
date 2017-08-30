<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table     ='addresses';
	protected $fillable = ['name','street','house','flat','city','state','zip','country'];
	 
	
	
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
