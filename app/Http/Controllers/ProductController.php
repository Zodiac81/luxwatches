<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Watch;
use DB;
use Session;

class ProductController extends MainSiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsList = Watch::all();
        return view('admin.product_list', ['products'=>$productsList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.watch_add.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        if(!empty($request->_token)){
  /*          echo"<pre>";
 print_r($request->all());
 exit;*/
            $vendor = Watch::where('vendor_code', $request->vendor_code)->first();
  
                if(is_null($vendor)){

                    $newProduct = new Watch();
                    $newProduct->vendor_code = $request->vendor_code;
                    $newProduct->title = $request->name;
                    $newProduct->alias = $request->alias;
                    $newProduct->price = $request->price;

                    $newProduct->save();

                    Session::flash('success', 'Товар успешно добавлен.');

                    return redirect()->route('admin.index');
                }

            else{

                Session::flash('alert', 'Товар уже имеется в базе.');
                return redirect()->back();

            }
        }
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
        $product = Watch::find($id);
        
        return view('admin.edit', ['product'=>$product]);
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
        if(!empty($request->_token)){
           /*echo"<pre>";
 print_r($request->all());
 exit;*/
            $update_item = Watch::where('id', $id)->first();
  
                if($update_item){

                    $update_item->vendor_code = $request->vendor_code;
                    $update_item->title = $request->title;
                    $update_item->alias = $request->alias;
                    $update_item->price = $request->price;

                    $update_item->save();
      
                        $value = "Товар успешно обновлен.";
                        $request->session()->flash('success', $value);
                        return redirect()->route('product.index');
                }else{
                     $value = "Что-то пошло не так. Попробуйте ещё раз.";
                        $request->session()->flash('alert', $value);
                        return redirect()->route('product.index');
                }

}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        echo ('hodefhgofehgohnsol;ghn');
       $deleteWatch = Watch::find($id);
       $deleteWatch->delete();

       return redirect()->route('admin.index');
       
        
    }

}
