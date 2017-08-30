<?php

use Illuminate\Database\Seeder;

class Upadate_Img_Table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert(
        	[
        		[
        			'watches_id'    =>'2',
	                'image'     =>'ar2501_thm.jpg', 
	                'image_thm' =>'thumbnails',
        		],

        		[
        			'watches_id'    =>'2',
	                'image'     =>'ar2501.jpg', 
	                'image_thm' =>'main',
        		],

        		[
        			'watches_id'    =>'2',
	                'image'     =>'ar2501_1.jpg', 
	                'image_thm' =>'main',
        		],

        		[
        			'watches_id'    =>'3',
	                'image'     =>'ar0431_thm.jpg', 
	                'image_thm' =>'thumbnails',
        		],

        		[
        			'watches_id'    =>'3',
	                'image'     =>'ar0431.jpg', 
	                'image_thm' =>'main',
        		],

        		[
        			'watches_id'    =>'4',
	                'image'     =>'ar1737_thm.jpg', 
	                'image_thm' =>'thumbnails',
        		],

        		[
        			'watches_id'    =>'4',
	                'image'     =>'ar1737.jpg', 
	                'image_thm' =>'main',
        		],

        		[
        			'watches_id'    =>'4',
	                'image'     =>'ar1737_1.jpg', 
	                'image_thm' =>'main',
        		],




        	]);
    }
}
