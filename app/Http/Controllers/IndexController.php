<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends MainSiteController
{
    //

    public function __construct(){
        parent::__construct();
        $this->template = 'site-template.index';
    }

    public function execute(){

    	/*$menus    = Menu::all();

    	$navMenu = [];
    	foreach ($menus as $menu) {
    		$item = [
    			'title' => $menu->title,
	            'path' => $menu->path,
	            'parent' => $menu->parent
    		];

    	array_push($navMenu, $item);

    	}*/
//dd($navMenu);


    	/*return view('site-template.index', ['menu'=>$navMenu,]);*/
        return $this->renderOutput();
										
    }
}
