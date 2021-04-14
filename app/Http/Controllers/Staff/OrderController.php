<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\OrderInfo;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('customer', 'payment')->select('id', 'customer_id', 'shipping_id', 'total', 'shipping_cost', 'status')->latest('id')->get();

        return view('backend.order.manage', compact('orders'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders     = Order::with('customer', 'payment', 'shipping', 'order_items')->findOrFail($id);
        $order_info = OrderInfo::with('product')->select('id', 'order_id', 'product_id', 'product_name', 'product_price', 'product_qty')->where('order_id', $id)->get();

        return view('backend.order.view', compact('orders', 'order_info'));
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function invoice($id)
    {
        $orders     = Order::with('customer', 'payment', 'shipping', 'order_items')->findOrFail($id);
        $order_info = OrderInfo::with('product')->select('id', 'order_id', 'product_id', 'product_name', 'product_price', 'product_qty')->where('order_id', $id)->get();

        return view('backend.order.invoice', compact('orders', 'order_info'));
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function invoice_print($id)
    {
        $orders     = Order::with('customer', 'payment', 'shipping', 'order_items')->findOrFail($id);
        $order_info = OrderInfo::with('product')->select('id', 'order_id', 'product_id', 'product_name', 'product_price', 'product_qty')->where('order_id', $id)->get();

        return view('backend.order.print_invoice');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
