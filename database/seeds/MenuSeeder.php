<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert(
        	
        [
        	[
	            'title' => 'Главная',
	            'path' => 'luxwatches.loc',
	            'parent' => '0'
            ],

            [
            	'title' => 'Мужские',
	            'path' => 'luxwatches.loc\watches\men',
	            'parent' => '0'
            ],

            [
            	'title' => 'Женские',
	            'path' => 'luxwatches.loc\watches\women',
	            'parent' => '0'
            ],

            [
            	'title' => 'Детские',
	            'path' => 'luxwatches.loc\watches\kids',
	            'parent' => '0'
            ],

            [
            	'title' => 'Блог',
	            'path' => 'luxwatches.loc\blog',
	            'parent' => '0'
            ],

            [
            	'title' => 'Контакты',
	            'path' => 'luxwatches.loc\contact',
	            'parent' => '0'
            ],

            [
            	'title' => 'Armani',
	            'path' => 'luxwatches.loc\watches\men\armani',
	            'parent' => '3'
            ],

            [
            	'title' => 'Casio',
	            'path' => 'luxwatches.loc\watches\men\casio',
	            'parent' => '3'
            ],

            [
            	'title' => 'Hugo Boss',
	            'path' => 'luxwatches.loc\watches\men\hugo-boss',
	            'parent' => '3'
            ],

            [
            	'title' => 'Orient',
	            'path' => 'luxwatches.loc\watches\men\orient',
	            'parent' => '3'
            ],

            [
            	'title' => 'Swiss',
	            'path' => 'luxwatches.loc\watches\men\swiss',
	            'parent' => '3'
            ],

             [
            	'title' => 'Alfex',
	            'path' => 'luxwatches.loc\watches\women\alfex',
	            'parent' => '3'
            ],

            [
            	'title' => 'Casio',
	            'path' => 'luxwatches.loc\watches\women\casio',
	            'parent' => '3'
            ],

            [
            	'title' => 'Certina',
	            'path' => 'luxwatches.loc\watches\women\certina',
	            'parent' => '3'
            ],

            [
            	'title' => 'Nautica',
	            'path' => 'luxwatches.loc\watches\women\nautica',
	            'parent' => '3'
            ],

            [
            	'title' => 'Q&Q',
	            'path' => 'luxwatches.loc\watches\women\q&q',
	            'parent' => '3'
            ],

            [
            	'title' => 'Royal London',
	            'path' => 'luxwatches.loc\watches\women\r-london',
	            'parent' => '3'
            ],

            [
            	'title' => 'Calipso',
	            'path' => 'luxwatches.loc\watches\kids\calipso',
	            'parent' => '3'
            ],

             [
            	'title' => 'Calipso',
	            'path' => 'luxwatches.loc\watches\kids\timex',
	            'parent' => '3'
            ],

             [
            	'title' => 'Q&Q',
	            'path' => 'luxwatches.loc\watches\kids\q&q',
	            'parent' => '3'
            ],

             [
            	'title' => 'Disney',
	            'path' => 'luxwatches.loc\watches\kids\disney',
	            'parent' => '3'
            ]
        ]);

    }
}

    