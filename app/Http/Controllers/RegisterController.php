<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends MainSiteController
{
    //

    public function __construct(){
        parent::__construct();
        $this->template = 'site-template.register';
        $this->breadcrumbs = 'Регистрация';
    } 

     public function execute(){

     $data = ['title'=> 'Register',];

			
    if(view()->exists('site-template.register')){

    	 return $this->renderOutput()->with($data);
    }

    else(abort(404));

    }
}
