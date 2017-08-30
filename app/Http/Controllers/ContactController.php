<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends MainSiteController
{
    //
	public function __construct(){
        parent::__construct();
        $this->template = 'site-template.contact';
        $this->breadcrumbs = 'Контакты';
    }
    
    public function showForm(){

    	if(view()->exists('site-template.contact')){
	
    	return $this->renderOutput();
    }

    else(abort(404));

    }
}
