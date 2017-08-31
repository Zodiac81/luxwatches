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
        $this->breadcrumbs = 'Католог';
    }

    public function showArmani(){


	if(view()->exists('site-template.item-list')){
		
		//$thumbnails = Watch::first();
		
		//echo($thumbnails->images->image_thm)."<br>";

           $data = DB::table('watches')
                    ->leftJoin('images','watches.id','=','images.watches_id')
                    ->select(  'watches.*',
                               'images.image')
                    ->where('image_thm','thumbnails')
                    ->paginate(9);

    	return $this->renderOutput()->with(['data'=>$data,]);
    }

    else(abort(404));

    }


    public function getCategoryData(Request $request)
    {

        $query = Watch::where('sex',$request->sex['0'])->paginate(9);
		return response()->json([
                "query" => $query,
            ]);

        //return $this->renderOutput()->with(['data'=>$query,]);
    }

}
