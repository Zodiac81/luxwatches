<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends MainSiteController
{
    public function Orders($type='') //не отправленные заказы
    {
    	if($type == 'pending'){

    		$orders = Order::where('delivered','0')->get();
    	}
    	elseif($type == 'delivered'){

    		$orders = Order::where('delivered','1')->get();
    	}
    	else{

    		$orders = Order::all();
    	}

    	return view('admin.orders',['orders'=>$orders]);
    	
    }

    public function toggledeliver(Request $request, $orderId)
    {
        $order = Order::find($orderId);

        if($request->has('delivered')){

            $order->delivered=$request->delivered;
        }
        else{
            
            $order->delivered="0";
        }
        
        $order->save();
        return back();
    }
}
