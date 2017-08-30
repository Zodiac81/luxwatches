<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TopSeller;
use App\Watch;
use App\Image;

class IndexController extends MainSiteController
{
    //

    public function __construct(){
        parent::__construct();
        $this->template = 'site-template.index';
    }

   /* public function execute(){
        return $this->renderOutput();								
    }*/

public function execute(){
     $image=Image::all();

        $products = Watch::orderBy('topseller_counter', 'desc')->take(3)->get();
        return $this->renderOutput()->with(['products'=>$products, 'images'=>$image]);

    }
}
