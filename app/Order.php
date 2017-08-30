<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Cart;

class Order extends Model
{

    protected $fillable = ['total', 'delivered'];

    public function orderItems()
    {
    	return $this->belongsToMany('App\Watch')->withPivot('quantity','total')->withTimestamps();
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public static function createOrder()
    {
    	$user=Auth::user();
    
    $order = $user->orders()->create([
    	'total'=>Cart::subtotal(),
    	'delivered'=> 0,
    	]);

    $cartItems = Cart::content();
    //dd($user);	
    foreach ($cartItems as $cartItem) {
    	$order->orderItems()->attach($cartItem->id,[
    		'quantity'=>$cartItem->qty,
    		'total'=>$cartItem->qty*$cartItem->price,
    		 ]);
    }
    }

}
