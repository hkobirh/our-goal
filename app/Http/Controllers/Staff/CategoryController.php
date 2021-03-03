<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::select('id','root','name','create_by','slug','status')->where('root',0)->get();

        return view('backend.category.manage',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('root',0)->get();
        return view('backend.category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'root'=>'required',
            'name'=>'required|min:4|max:40|unique:categories',
            'status'=>'required'
        ]);
        Category::create([
            'root'=>request()->input('root'),
            'name'=>request()->input('name'),
            'status'=>request()->input('status'),
            'slug'=>slugify(request()->name),
            'create_by'=>auth()->user()->id,
        ]);
        setMessage('success','Brand created successfully !');
        return redirect()->back();
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
        $cat = Category::find($id);
        $categories = Category::where('root',0)->get();
        return view('backend.category.edit',compact('cat','categories'));
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
        $category = Category::find($id);
        $request->validate([
            'root'=>'required',
            'name'=>'required|min:4|max:40|unique:categories,id,' . $id,
            'status'=>'required'
        ]);
        try {
            $category->name = $request->name;
            $category->slug = slugify($request->name);
            $category->status = $request->status;
            $category->create_by = auth()->user()->id;
            $category->update();

            setMessage('success','Category update success !');

        }catch (Exception $e){
            setMessage('danger','Somthing wrong !');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat  = Category::where('root',$id)->get();
        if(!count($cat)){
        $category = Category::find($id);
        $category->delete();
            setMessage('success','Yay! A category has been successfully deleted.');
    } else{
            setMessage('danger','Yay! Delete child item first.');
    }
        return redirect()->back();
    }
}
