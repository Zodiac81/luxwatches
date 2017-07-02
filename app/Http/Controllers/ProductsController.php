<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends MainSiteController
{
    //


    public function __construct(){
        parent::__construct();
        $this->template = 'site-template.products';
        
    }

    public function showProducts(){

    if(view()->exists('site-template.products')){

    	return $this->renderOutput();
    }

    else(abort(404));

    }
}
