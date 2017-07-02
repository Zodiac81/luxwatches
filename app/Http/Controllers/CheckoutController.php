<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CheckoutController extends MainSiteController
{

	public function __construct(){
        $this->template = 'site-template.shipping-form';
        $this->breadcrumbs = 'Адрес доставки';
    }

    //  public function step1()
    // {
    // 	if(Auth::check())
    // 	{
    // 		return redirect()->route('shipping');
    // 	}

    // 	return redirect('login');
    // }

    public function shipping()
    {
    	return $this->renderOutput();
    }
}


