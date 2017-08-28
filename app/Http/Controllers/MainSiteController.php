<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\NavMenu;
use App\Watch;
use Menu;
use App\Image;




class MainSiteController extends Controller
{
    //

   protected $template;  //храним имя шаблона для конкретной стр
   protected $breadcrumbs;
   protected $tabs;
   
   public function __construct(){

	}


	//метод возвращает конкретный отработанный вид
	protected function renderOutput(){

      //фильтр товаров
          $filter = DB::table('watches')->distinct()->pluck('alias');

      //вывод меню  

		      $menus    = NavMenu::all();

          $mBuilder = Menu::make('mainNavMenu', function($m) use ($menus){

              foreach ($menus as $item) {
                if($item->parent == 0)
                {
                    $m->add($item->title, $item->path)->id($item->id);
                }
                else
                {
                  if($m->find($item->parent))
                  {
                    $m->find($item->parent)->add($item->title, $item->path)->id($item->id);
                  }
                }
              }

            });
                   
 return view($this->template,['menu'=>$mBuilder,
                              'breadcrumbs'=>$this->breadcrumbs,
                              'filters'=>$filter,
                              ]);

	}


}
