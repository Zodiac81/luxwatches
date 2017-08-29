<?php

use Illuminate\Database\Seeder;

class addMoreWatches extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('watches')->insert([
		 [
        		'img_id'=>'1',
                'vendor_code'=>'or2447',
                'sex' => 'm',
				'title'=>'Часы Orient Classic Or2447',
				'alias'=>'Orient',
				'price'=>'10 000',    
                'discount'=>'',
                'desc'=>'',
                'status'=>'3',
                         
        	],
			[
        		'img_id'=>'2',
                'vendor_code'=>'or2447',
                'sex' => 'm',
				'title'=>'Часы Orient Classic Chronograph Or2597',
				'alias'=>'Orient',
				'price'=>'6500',    
                'discount'=>'',
                'desc'=>'',
                'status'=>'3',
                         
        	],
			
			[
        		'img_id'=>'3',
                'vendor_code'=>'or1920',
                'sex' => 'm',
				'title'=>'Часы Orient Sport Chronograph Or1920',
				'alias'=>'Orient',
				'price'=>'13 500',    
                'discount'=>'',
                'desc'=>'',
                'status'=>'2',
                         
        	],
			[
        		'img_id'=>'4',
                'vendor_code'=>'or1822',
                'sex' => 'm',
				'title'=>'Часы Orient Sport Chronograph Or1822',
				'alias'=>'Orient',
				'price'=>'17 500',    
                'discount'=>'',
                'desc'=>'-10%',
                'status'=>'3',
                         
        	],
			
			[
        		'img_id'=>'5',
                'vendor_code'=>'or1015',
                'sex' => 'm',
				'title'=>'Часы Orient Sport Chronograph Or1015',
				'alias'=>'Orient',
				'price'=>'14 500',    
                'discount'=>'',
                'desc'=>'',
                'status'=>'3',
                         
        	],
			
			[
        		'img_id'=>'6',
                'vendor_code'=>'or1815',
                'sex' => 'm',
				'title'=>'Часы Orient Sport Chronograph Or1815',
				'alias'=>'Orient',
				'price'=>'9 500',    
                'discount'=>'',
                'desc'=>'',
                'status'=>'3',
                         
        	],
			
			[
        		'img_id'=>'7',
                'vendor_code'=>'or1007',
                'sex' => 'm',
				'title'=>'Часы Orient Or1007',
				'alias'=>'Orient',
				'price'=>'14 500',    
                'discount'=>'',
                'desc'=>'',
                'status'=>'3',
                         
        	],
			
			[
        		'img_id'=>'8',
                'vendor_code'=>'cas1887',
                'sex' => 'm',
				'title'=>'Часы Casio Chronograph Cas1887',
				'alias'=>'Casio',
				'price'=>'18 500',    
                'discount'=>'',
                'desc'=>'',
                'status'=>'3',
                         
        	],
			
			[
        		'img_id'=>'9',
                'vendor_code'=>'cas2489',
                'sex' => 'm',
				'title'=>'Часы Casio Chronograph Cas2489',
				'alias'=>'Casio',
				'price'=>'8 500',    
                'discount'=>'',
                'desc'=>'',
                'status'=>'1',
                         
        	],
			
			[
        		'img_id'=>'10',
                'vendor_code'=>'cas2409',
                'sex' => 'm',
				'title'=>'Часы Casio Chronograph Cas2409',
				'alias'=>'Casio',
				'price'=>'15 500',    
                'discount'=>'',
                'desc'=>'',
                'status'=>'3',
                         
        	],
			
			[
        		'img_id'=>'1',
                'vendor_code'=>'cas2519',
                'sex' => 'm',
				'title'=>'Часы Casio Chronograph Cas2519',
				'alias'=>'Casio',
				'price'=>'15 500',    
                'discount'=>'',
                'desc'=>'',
                'status'=>'3',
                         
        	],
			
			[
        		'img_id'=>'13',
                'vendor_code'=>'hb2519',
                'sex' => 'm',
				'title'=>'Часы Hugo Boss HB2132',
				'alias'=>'Hugo Boss',
				'price'=>'15 500',    
                'discount'=>'-15%',
                'desc'=>'',
                'status'=>'2',
                         
        	],
			
			[
        		'img_id'=>'3',
                'vendor_code'=>'hb3956',
                'sex' => 'm',
				'title'=>'Часы Hugo Boss HB3956',
				'alias'=>'Hugo Boss',
				'price'=>'16 500',    
                'discount'=>'-15%',
                'desc'=>'',
                'status'=>'2',
                         
        	],
			
			[
        		'img_id'=>'8',
                'vendor_code'=>'hb1039',
                'sex' => 'm',
				'title'=>'Часы Hugo Boss HB1039',
				'alias'=>'Hugo Boss',
				'price'=>'10 500',    
                'discount'=>'',
                'desc'=>'',
                'status'=>'3',
                         
        	],
			
			[
        		'img_id'=>'9',
                'vendor_code'=>'hb1589',
                'sex' => 'm',
				'title'=>'Часы Hugo Boss HB1589',
				'alias'=>'Hugo Boss',
				'price'=>'20 500',    
                'discount'=>'',
                'desc'=>'',
                'status'=>'3',
                         
        	],
		]);
	}
}
