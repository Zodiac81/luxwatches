<?php

namespace App\Http\Controllers;
use App\Watch;
use Cart;
use Session;
use Illuminate\Http\Request;

class CartController extends MainSiteController
{

 public function __construct(){
        $this->template = 'site-template.cart';
        $this->breadcrumbs = 'Корзина';
    }
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $cartItems = Cart::content();
        //dd($cartItems);
         return $this->renderOutput()->with(['cartItems'=>$cartItems,]);
  
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order_watch = Watch::find($id);
        if($order_watch->discount > 0){
            $discount = floor(($order_watch->price/100)*$order_watch->discount);
            $newPrice = ($order_watch->price)-$discount;
        }else{
            $newPrice = $order_watch->price;
        }
       
        Cart::add($id, $order_watch->title, 1, $newPrice);
		Session::flash('success','Товар добавлен в корзину');
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Cart::update($id,$request->qnty);
        $watches_count = Watch::where("id", $request->watch_id)->first();
        $watches_count->topseller_counter = $watches_count->topseller_counter + $request->qnty;
        $watches_count->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Cart::remove($id);
        return back();
    }

}
