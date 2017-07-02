<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends MainSiteController
{
    //

    public function __construct(){
        parent::__construct();
        $this->template = 'site-template.login';
        $this->breadcrumbs = 'Login';
    }

    public function execute(){
		
    if(view()->exists('site-template.login')){

    	return $this->renderOutput()->with(['title'=>'Вход в личный кабинет',]);
    }

    else(abort(404));

    }
}
