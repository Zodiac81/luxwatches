<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Watch;
use DB;


class ArmaniController extends MainSiteController
{
    //

    public function __construct(){
        parent::__construct();
        $this->template = 'site-template.item-list';
        $this->breadcrumbs = 'Armani';
        
    }

    public function showArmani(){


	if(view()->exists('site-template.item-list')){

	
           $data = DB::table('watches')
                    ->leftJoin('images','watches.id','=','images.watches_id')
                    ->select(  'watches.*',
                               'images.image')
                    ->where('image_thm','thumbnails')

                    ->paginate(9);

             


     // dump($data);


    	return $this->renderOutput()->with(['data'=>$data,]);
    }

    else(abort(404));

    }

}
