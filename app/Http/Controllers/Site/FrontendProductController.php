<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend_products');
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


    public function load_more_data(Request $request)
    {
        if ($request->ajax()) {
              if ($request->id) {
                  $data = Product::where('brand_id',2)->where('id','<',$request->id)->where('status','active')->orderBy('id','DESC')->limit(15)->get();
              }else{
                  $data = Product::where('brand_id',2)->where('status','active')->orderBy('id','DESC')->limit(15)->get();
              }
              return view('load_more_data',compact('data'));
          }
    }
}
