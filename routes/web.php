<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/logout','Auth\LoginController@logout');
Route::get('/', [
    'uses'=>'IndexController@execute',
    'as'  =>'home',
]);

Route::group(['prefix' => '/admin','middleware'=>['auth','admin']], function() {

    Route::get('/', function() {return view('admin.index');
    })->name('admin.index');
    Route::resource('message', 'MessageController');
    Route::resource('/product','ProductController');
    Route::get('orders/{type?}','OrderController@orders');
    Route::post('toggledeliver/{orderId}','OrderController@toggledeliver')->name('toggle.deliver');
                
});

Route::get('catalog',[
                        "uses"=>'CatalogController@index',
                        "as"=>"catalog"
                        ]);
//Route::get('/login', [
	//	'uses'=>'LoginController@execute', 
    //	'as'  =>'login',
		//]);

/*Route::get('/register', [
		'uses'=>'RegisterController@execute', 
    	'as'  =>'register',
		]);*/
/*
Route::get('products', [
                    'uses' => 'ProductsController@showProducts',
                    'as'   => 'products',
                ]);*/

Route::get('/contact', [
        'uses'=>'ContactController@showForm', 
        'as'  =>'contact',
        ]);
Route::post('/contact', [
        'uses'=>'ContactController@getMessage', 
        'as'  =>'send_message',
        ]);


Route::group(['middleware'=>'auth',], function(){
		Route::get('user_dashboard', 'OrderController@showOrders')->name('user_orders');
        Route::resource('/cart','CartController');
       // Route::get('/checkout', 'CheckoutController@step1')->name('checkout');
        Route::get('/shipping-info', 'CheckoutController@shipping')->name('shipping');
        Route::resource('/address', 'AddressController');
        Route::get('/payment', 'PaymentController@payment')->name('payment');
        Route::post('/store-payment', 'PaymentController@storePayment')->name('storePayment');
});
    

Route::group(['prefix' => '/men'], function() {
    
        Route::get('/armani',[
                'uses'=>'ArmaniController@showArmani',
                'as'  =>'armani',
                ] );

        Route::post('/armani',[
                'uses'=>'ArmaniController@getCategoryData',
                'as'  =>'ajax_armani',
                ] );

        Route::get('/armani/{watches_id}',[
                'uses'=>'SingleController@singleItem', 
                'as'  =>'single_item',
                ]);


});
   


//Route::get('/home', 'HomeController@index');
