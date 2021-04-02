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
        if (count($cart_items))
            return view('frontend.cart.index', compact('cart_items'));
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
            'attributes' => [
                'slug' => $product->slug,
                'image' => $product->thumbnail,
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
        Cart::update($id, [
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity,
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

    public function ajax_cart_add(Request $request)
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
            'attributes' => [
                'slug' => $product->slug,
                'image' => $product->thumbnail,
            ]
        ]);
        return response()->json([
            'status' => 1,
            'message' => 'Data added successfully.',
        ]);
    }

    public function get_cart_data(){
        return view('frontend.cart.get_cart_data');
    }

    public function ajax_cart_clear(){
        if( request()->ajax()){
            Cart::clear();

            return response()->json([
                'status' => 1,
                'message' => 'Items deleted successfully.',
            ]);
        }
    }

    public function ajax_cart_remove(Request $request){
        $product = Product::find($request->id);
        if( request()->ajax()){
            Cart::remove($request->id);

            return response()->json([
                'status' => 1,
                'message' => $product->name .' deleted successfully.',
            ]);
        }
    }
}
