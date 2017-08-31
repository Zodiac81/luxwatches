<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Watch;
use App\Image;
use DB;


class SingleController extends MainSiteController
{
    

     public function __construct(){
        parent::__construct();
        $this->template = 'site-template.single';
        $this->breadcrumbs = '/Каталог';
        
    }


     public function singleItem($id){

     	 if(view()->exists('site-template.single')){

            $dataItem = DB::table('watches')
                    ->leftJoin('images','watches.id','=','images.watches_id')
                    ->select(  'watches.*',
                               'images.image')
                    ->where('image_thm','main')
                    ->where('watches_id',$id)
                    ->get();

                 return $this->renderOutput()->with(['data'=>$dataItem,]);
            }
   
     

     else(abort(404));

     }

}

