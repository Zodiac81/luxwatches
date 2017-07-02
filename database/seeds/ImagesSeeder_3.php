<?php

use Illuminate\Database\Seeder;

class ImagesSeeder_3 extends Seeder
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

	         	'watches_id'    =>'1',
	            'image'     =>'ar2447_thm.jpg', 

            ],

            [

	         	'watches_id'    =>'1',
	            'image'     =>'ar2447.jpg', 

            ],

             [

	         	'watches_id'    =>'1',
	            'image'     =>'ar2447_1.jpg', 

            ],

             [

	         	'watches_id'    =>'1',
	            'image'     =>'ar2447_2.jpg', 

            ],

             [

	         	'watches_id'    =>'1',
	            'image'     =>'ar2447_3.jpg', 

            ],

            ]);
    }
}
