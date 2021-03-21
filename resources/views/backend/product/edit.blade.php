@extends('backend.components.layout')
@section('title','Update Product')

@section('content')
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
        <div class="breadcrumb-title pr-3">Dashboard</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Update Product</li>
                </ol>
            </nav>
        </div>
        <div class="ml-auto">
            <div class="btn-group">
                <a href="" class="btn btn-info ml-1"> <i class="bx bx-plus-circle mr-1"></i> Add Product</a>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-12 col-lg-12 ">
            <div class="card radius-15 border-lg-top-primary">
                <div class="card-body px-5 pb-5 pt-3 ">
                    <div class="card-title d-flex align-items-center">
                        <div>
                            <h4 class="text-primary">Product update form</h4>
                        </div>
                        <div class="ml-auto">
                            <a href="" class="btn btn-outline-info m-1 radius-10"><i class="bx bx-customize mr-1"> </i>
                                Add product</a>
                        </div>
                    </div>
                    <hr/>
                    <div class="alert alert-danger error-message" style="display: none">
                        <ul></ul>
                    </div>
                    <div class="alert alert-success success-message" style="display: none">
                        <ul></ul>
                    </div>
                    <x-show-message></x-show-message>
                    <form class="update-product" action="{{ route('staff.product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Product Name: </label>
                                    <input type="text" value="{{$product->name}}" class="form-control radius-5" name="name" id="name"
                                           onkeyup="convertToSlug(this.value,'#slug')"
                                           placeholder="Enter Your Product Name"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="slug">Product Slug Name: </label>
                                    <input type="text" value="{{$product->slug}}" class="form-control radius-5" name="slug" id="slug"
                                           onkeyup="convertToSlug(this.value,'#slug')"
                                           placeholder="Enter Your Product Slug Name"/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="category">Select Category Name: </label>
                                    <select class="form-control category radius-5" name="category" id="advance-select">
                                        <option value="0">Root</option>
                                        {!! categories_select_data($categories , 3)!!}
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="brand">Select Brand Name: </label>
                                    <select class="form-control brand radius-5" name="brand" id="advance-select2">
                                        <option value="">Select Brand</option>
                                        {{-- <option value="0">No Brand</option> --}}
                                        @foreach($brands as $brand)
                                            <option {{$product->brand_id == $brand->id ? 'selected':''}} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="model">Model Name: </label>
                                    <input type="text" value="{{$product->model}}" class="form-control radius-5 " name="model"
                                           placeholder="Enter Your Product Model Name"/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="buying_price">Buying Price : </label>
                                    <input type="number" value="{{$product->buying_price}}" class="form-control radius-5 " name="buying_price"
                                           placeholder=" Enter Your Buying Price "/>
                                </div>
                                <div class=" form-group col-md-4 ">
                                    <label for=" selling_price ">Selling Price : </label>
                                    <input type="number" value="{{$product->selling_price}}" class=" form-control radius-5" name="selling_price"
                                           placeholder="Enter Your Selling Price"/>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for=" special_price ">Featured: </label><br>
                                    <div class="custom-control custom-checkbox ">
                                        <input type="checkbox" id="featured" value="1" name="featured"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="featured">Yes </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-2 ">
                                    <label for=" special_price ">Special Offer : </label><br>
                                    <div class="custom-control custom-checkbox ">
                                        <input type="checkbox" id="chkspecialoffer" class="custom-control-input"
                                               onclick="specialoffer(this)" {{$product->special_price != '' ? 'checked':''}}>
                                        <label class="custom-control-label" for="chkspecialoffer">Yes </label>
                                    </div>
                                </div>
                            </div>
                            <div id="specialoffershow" style="display:{{$product->special_price != '' ? 'block':'none'}}">
                                <div class=" form-row ">
                                    <div class=" form-group col-md-4 ">
                                        <label for=" special_price ">Special Selling Price : </label>
                                        <input type="number" value="{{$product->special_price}}" class=" form-control radius-5 " name="special_price"
                                               placeholder="Enter Your Special Selling Price "/>
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label>Special Price Form</label>
                                        <input type="date" value="{{$product->special_price_from}}" class="form-control input" name="special_p_from"
                                               placeholder="DD-MM-YYYY"/>
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label>Special Price To</label>
                                        <input type="date" value="{{$product->special_price_to}}" class="form-control input" name="special_p_to"
                                               placeholder="DD-MM-YYYY ">
                                    </div>
                                </div>
                            </div>
                            <div class=" form-row ">
                                <div class="form-group col-md-4 ">
                                    <label for="quantity ">Quantity : </label>
                                    <input type="number " value="{{$product->quantity}}" class="form-control radius-5 " name="quantity"
                                           placeholder=" Enter Your Quantity "/>
                                </div>
                                <div class=" form-group col-md-4 ">
                                    <label for=" sku_code ">Stock Keeping Unit Code (SKU code) : </label>
                                    <input type=" number " value="{{$product->sku_code}}" class=" form-control radius-5 " name="sku_code"
                                           placeholder="Enter Your Stock Keeping Unit Code (sku_code) "/>
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label for=" special_price ">Warranty: </label><br>
                                    <div class="custom-control custom-checkbox ">
                                        <input type="checkbox" id="warrantyhidden" value="1" name="warranty"
                                               class="custom-control-input" onclick="warrantyshow(this)" {{$product->warranty_duration != '' ? 'checked':''}}>
                                        <label class="custom-control-label" for="warrantyhidden">Yes </label>
                                    </div>
                                </div>
                            </div>
                            <div id="warrantyshow" style="display:{{$product->warranty_duration != '' ? 'block':'none'}} ">
                                <div class=" form-row ">
                                    <div class=" form-group col-md-12">
                                        <label for="warranty_duration ">Warranty Duration: </label>
                                        <input type="text " value="{{$product->warranty_duration}}" class=" form-control radius-5" name="warranty_duration"
                                               placeholder="Enter Your Warranty Duration"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Warranty Conditions</label>
                                        <textarea id="texteditor" name="warranty_conditions" class="texteditor"
                                                  placeholder="Product Warranty Conditions">{!! $product->warranty_conditions !!} </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class=" form-row">
                                <div class="form-group col-md-6">
                                    <label for="formControlRange">Color</label>
                                    <div class="form-group navbar">
                                        @foreach (color() as $key=>$color)
                                            <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" name="color[]" id="color{{ $color }}"
                                                       value="{{ $key }}" {{in_array($key,json_decode($product->color)) ? 'checked':''}} class="custom-control-input">
                                                <label class="custom-control-label"
                                                       for="color{{ $color }}">{{ $color }} </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="formControlRange">Size</label>
                                    <div class="form-group  navbar ">
                                        @foreach (size() as $key=>$size)
                                            <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" name="size[]" id="size{{ $size }}"
                                                       value="{{ $key }}" {{in_array($key,json_decode($product->size)) ? 'checked':''}} class="custom-control-input">
                                                <label class="custom-control-label"
                                                       for="size{{ $size }}">{{ $size }} </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class=" form-row ">
                                <div class=" form-group col-md-6 ">
                                    <label> Product Thumbnail : </label><br>
                                    <input id="thumbnail" type="file" name="thumbnail">
                                    <div class="thumbnail ml-2 mt-2">
                                        <img src="{{asset('uploads/products/'.$product->thumbnail)}}" class="img-fluid img-thumbnail" style="height: 100px; width: 100px;">
                                    </div>
                                </div>
                                <div class=" form-group col-md-6 ">
                                    <label> Product Image : </label><br>
                                    <input id="image" type="file" name="image[]" multiple>
                                    <div class="product-gallery ml-2 mt-2">
                                        @foreach(json_decode($product->image) as $image)
                                        <img src="{{asset('uploads/products/'.$image)}}" class="img-fluid img-thumbnail" style="height: 100px; width: 100px;">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class=" form-row ">
                                <div class=" form-group col-md-12 ">
                                    <label for="title"> Product Shot Title : </label>
                                    <input type="text" id="title" value="{!! $product->title !!}" name="title" class="texteditor form-control"
                                           placeholder="Product Shot Title">
                                </div>
                                <div class=" form-group col-md-12 ">
                                    <label for="description"> Product Description : </label>
                                    <textarea id="texteditor2" name="description" class="texteditor"
                                              placeholder="Product Shot Title">{!!$product->description!!}</textarea>
                                </div>
                            </div>
                            <label for="status">Product Status: </label>
                            <div class=" form-row">
                                <div class="form-group">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="status" name="status" value="active"
                                               class="custom-control-input" {{$product->status == 'Active' ? 'checked':''}}>
                                        <label class="custom-control-label" for="status">Active</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="status2" name="status" value="inactive"
                                               class="custom-control-input" {{$product->status == 'Inactive' ? 'checked':''}}>
                                        <label class="custom-control-label" for="status2">Inactive</label>
                                    </div>
                                </div>
                            </div>
                            <div class=" form-row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-info m-1">
                                        <i class='bx bx-check-circle mr-1'> </i>Update Product
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
