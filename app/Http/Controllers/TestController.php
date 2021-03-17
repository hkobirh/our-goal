<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $data = Product::paginate(2);
        //$data->withPath('test/test/a/b');
        return view('test.manage', compact('data'));
    }
    public function get_data(Request $request){
        $data = Product::paginate(2);
       //$data->withPath('test/test/a/b');
        return view('test.manage', compact('data'));
    }
}
