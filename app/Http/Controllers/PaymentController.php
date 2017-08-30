<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Error\Card;
use Stripe\Error\Stripe_InvalidRequest;
use Cart;
use Auth;
use App\Order;
use Session;

class PaymentController extends MainSiteController
{
    public function __construct(){
        $this->template = 'site-template.payment';
        $this->breadcrumbs = 'Оплата';
    }

     public function payment()
    {
    	return $this->renderOutput();
    	
    }

    public function storePayment(Request $request)
    {
		// Set your secret key: remember to change this to your live secret key in production
		// See your keys here: https://dashboard.stripe.com/account/apikeys
		//\Stripe\Stripe::setApiKey("sk_test_BA5vPObjv0ubeUxD8EymhZNK");

		// Token is created using Stripe.js or Checkout!
		// Get the payment token submitted by the form:
		//$token = $_POST['stripeToken'];
		//$token = $request->stripeToken;

		// Charge the user's card:
		// $charge = \Stripe\Charge::create([
		//   "amount" => Cart::total(),
		//   "currency" => "uah",
		//   "description" => "Example charge",
		//   "source" => $token,
		// ]);
		
		
		Order::createOrder();
		Cart::destroy();
		Session::flash('success', "Поздравляем. Заказ офорлмен успешно.");
		return redirect()->route('home');
    	
    	
    }
	
    
}

