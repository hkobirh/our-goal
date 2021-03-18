<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use Exception;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::with('user','brand','category')->paginate(2);
        return view('backend.product.manage', compact('data'));
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::paginate(2);
            return view('backend.product.pagination', compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::select('id', 'name')->get();
        $categories = Category::where('root', 0)->get();
        return view('backend.product.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required|unique:products',
            'category' => 'required',
            'brand' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',
            'status' => 'required'
        ]);
        if ($validator->fails())
            return response()->json([
                'error' => $validator->errors()
            ]);
        else {
            try {
                $thumbnail = $request->file('thumbnail');
                $thumbnailName = date('Ymdhms.') . $thumbnail->getClientOriginalExtension();
                Image::make($thumbnail)->resize(300, 300)->save(public_path('uploads/products/' . $thumbnailName));

                $images = $request->file('image');
                $i = 0;
                $imageName = [];
                foreach ($images as $image) {
                    $name = date('Ymdhms') . $i++ . '.' . $image->getClientOriginalExtension();
                    Image::make($image)->resize(300, 300)->save(public_path('uploads/products/' . $name));
                    array_push($imageName, $name);
                }

                Product::create([
                    'name' => $request->name,
                    'slug' => $request->slug,
                    'category_id' => $request->category,
                    'brand_id' => $request->brand,
                    'model' => $request->model,
                    'buying_price' => $request->buying_price,
                    'selling_price' => $request->selling_price,
                    'special_price' => $request->special_price,
                    'special_price_from' => $request->special_price_from,
                    'special_price_to' => $request->special_price_to,
                    'quantity' => $request->quantity,
                    'sku_code' => $request->sku_code,
                    'color' => $request->color ? json_encode($request->color) : '[]',
                    'size' => $request->size ? json_encode($request->size) : '[]',
                    'thumbnail' => $thumbnailName,
                    'image' => json_encode($imageName),
                    'warranty' => $request->warranty,
                    'warranty_duration' => $request->warranty_duration,
                    'warranty_conditions' => $request->warranty_conditions,
                    'description' => $request->description,
                    'status' => $request->status,
                    'create_by' => auth()->id()
                ]);
                return response()->json(['success' => 'Yea, A product has been successfully created.']);

            } catch (Exception $e) {
                return response()->json(['error' => $e->getMessage()]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $brands = Brand::select('id', 'name')->get();
        $categories = Category::where('root', 0)->get();
        return view('backend.product.edit',compact('brands','categories','product'));
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
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      return  Product::find($id)->delete();
    }
    public function delete(Request $request){
        if (!empty($request->checkbox)){
            foreach ($request->checkbox as $id){
                Product::find($id)->delete();
            }
            echo 'Yes';
        }else{
            echo 'No';
        }
    }
}
