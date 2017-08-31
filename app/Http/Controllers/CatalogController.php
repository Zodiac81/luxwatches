<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Watch;
use App\Image;
use View;

class CatalogController extends MainSiteController
{

    public function __construct(){
        $this->template = 'site-template.item-list';
        $this->breadcrumbs = 'Католог';
    }

    public function index(){

        $data = Watch::paginate(9);
        return View::make('site-template.item-list',compact('data'));

    }
}
