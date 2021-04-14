<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Brand;
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
        $featured = Product::where('featured', 1)->active()->get();

        return view('frontend.home', compact('categories','featured'));
    }


    public function products($slug1, $slug2, $slug3 = '')
    {
        $categories = [];
        if ($slug3) {
            $categories = Category::where('slug', $slug3)->get();
            $category = $categories->pluck('id');
            $products = Product::select('id', 'name', 'slug', 'category_id', 'brand_id', 'model', 'buying_price', 'selling_price', 'special_price', 'special_price_from', 'special_price_to', 'quantity', 'sku_code', 'color', 'size', 'title', 'thumbnail', 'image', 'warranty', 'warranty_duration', 'warranty_conditions', 'description', 'status', 'create_by', 'update_by')
                ->where('category_id', $category)->active()->paginate(12);
            $brand = $products->pluck('brand_id')->unique();
            $brands = Brand::with('products')->select('id', 'name', 'slug')->whereIn('id', $brand)->where('status', 'active')->get();
        } else {
            $category = Category::where('slug', $slug2)->pluck('id');
            $categories = Category::where('root', $category)->get();
            $categories_ids = $categories->pluck('id');
            $cat_ids = collect($categories_ids)->merge(collect($categories_ids));
            $products = Product::select('id', 'name', 'slug', 'category_id', 'brand_id', 'model', 'buying_price', 'selling_price', 'special_price', 'special_price_from', 'special_price_to', 'quantity', 'sku_code', 'color', 'size', 'title', 'thumbnail', 'image', 'warranty', 'warranty_duration', 'warranty_conditions', 'description', 'status', 'create_by', 'update_by')
                ->whereIn('category_id', $cat_ids)->active()->get();
            $brand = $products->pluck('brand_id')->unique();
            $brands = Brand::select('id', 'name', 'slug')->whereIn('id', $brand)->where('status', 'active')->get()
                ->map(function ($brand) use ($products) {
                    $brand->products = $products->where('brand_id', $brand->id);
                    return $brand;
                });
        }

        $featured = Product::where('featured', 1)->active()->get();
        return view('frontend/products', compact('products', 'brands', 'categories', 'featured'));
    }

    public function product($slug)
    {
        $product = Product::where('slug', $slug)->first();

        $colors = json_decode($product->color);

        $sizes = json_decode($product->size);

        $related_product = Product::select('id', 'name', 'slug', 'category_id', 'brand_id', 'model', 'buying_price', 'selling_price', 'special_price', 'special_price_from', 'special_price_to', 'quantity', 'sku_code', 'color', 'size', 'title', 'thumbnail', 'image', 'warranty', 'warranty_duration', 'warranty_conditions', 'description', 'status', 'create_by', 'update_by')
            ->where('category_id', $product->category_id)->active()->get();
        return view('frontend/product', compact('product', 'related_product','colors','sizes'));
    }

    public function brand($slug)
    {

    }

    public function product_quick_view($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $images = json_decode($product->image);
        array_splice($images, 0, 0, $product->thumbnail);
        return view('frontend.product_quick_view', compact('product','images'));
    }

    public function load_more_data(Request $request)
    {
        if ($request->ajax()) {
            if ($request->id) {
                $data = Product::where('brand_id',2)->where('id','<',$request->id)->where('status','active')->orderBy('id','DESC')->limit(15)->get();
            }else{
                $data = Product::where('brand_id',2)->where('status','active')->orderBy('id','DESC')->limit(15)->get();
            }
            return view('frontend.products',compact('data'));
        }
    }
}

