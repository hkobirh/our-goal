<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::with('user')->select('id', 'name', 'slug', 'create_by', 'status')->get();
        return view('backend.brands.manage', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = $request->validate([
            'name' => 'required|min:2|max:10',
            'status' => 'required'
        ]);
        Brand::create([
            'name' => request()->input('name'),
            'status' => request()->input('status'),
            'slug' => slugify(request()->name),
            'create_by' => auth()->user()->id,
        ]);
        setMessage('success', 'Brand created successfully !');
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
        $brand = Brand::find($id);
        return view('backend.brands.edit', compact('brand'));
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
        $brand = Brand::find($id);
        $request->validate([
            'name' => 'required|min:2|max:10',
            'status' => 'required'
        ]);
        try {
            $brand->name = $request->name;
            $brand->slug = slugify($request->name);
            $brand->status = $request->status;
            $brand->create_by = auth()->user()->id;
            $brand->update();

            setMessage('success', 'Brand update success !');

        } catch (Exception $e) {
            setMessage('danger', 'Somthing wrong !');
        }
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
        $brand = Brand::find($id);
        $brand->delete();
        session()->flash('success', 'Yay! A Brand has been successfully deleted.');
        return redirect()->back();
    }
}
