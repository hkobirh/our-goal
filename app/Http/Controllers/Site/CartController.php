<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart_items = Cart::getContent();
       if(count($cart_items))
        return view('frontend.cart.index',compact('cart_items'));
       else
           return redirect()->route('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::find($request->id);
        $s_price = false;
        if ($product->special_price_from <= date('Y-m-d') && $product->special_price_to >= date('Y-m-d'))
            $s_price = true;

        if ($s_price) {
            $price = $product->special_price;
        } else {
            $price = $product->selling_price;
        }


        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $price,
            'quantity' => 1,
            'attributes'=>[
                'slug'=>$product->slug,
                'image'=>$product->thumbnail,
            ]
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Cart::update($id,[
            'quantity'=>[
                'relative'=> false,
                'value'=>$request->quantity,
            ]
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
}
