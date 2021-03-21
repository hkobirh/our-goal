<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $categories = Category::where('root', Category::RootCategory)
            ->where('status', Category::ActiveCategory)
            ->get();

        return view('frontend.home', compact('categories'));
    }


    public function products($slug1, $slug2, $slug3 = '')
    {
        if ($slug3) {
            $category = Category::where('slug', $slug3)->pluck('id');
            $products = Product::where('category_id', $category)->get();

            return $products;
        } else {
            $category = Category::where('slug', $slug2)->pluck('id');
        }
    }
}

