@extends('backend.components.layout')
@section('title','Add a new Product')

@section('content')
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
        <div class="breadcrumb-title pr-3">Dashboard</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                </ol>
            </nav>
        </div>
        <div class="ml-auto">
            <div class="btn-group">
                <a href="" class="btn btn-info ml-1"> <i class="bx bx-plus-circle mr-1"></i> Manage Product</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="card radius-15">
                <div class="card-body">
                    <form action="{{route('staff.product.store')}}" class="create-product" method="post">
                        @csrf
                        <div class="card-title">
                            <h4 class="mb-0">Product Add Form</h4>
                        </div>
                        <hr>
                        <div class="alert alert-danger error-message" style="display: none">
                            <ul> </ul>
                        </div>
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="name">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Product Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="category">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category" id="category">
                                        <option value="">Select Category</option>
                                      {!! categories_select_data($categories,3) !!}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="brand">Brand</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="brand" id="brand">
                                        <option value="">Select Brand</option>
                                        <option value="0">No Brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="model">Model</label>
                                <div class="col-sm-10">
                                    <input type="text" name="model" id="model" class="form-control" placeholder="Product Model">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10 text-center">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" checked id="active" value="active" name="status" class="custom-control-input">
                                        <label class="custom-control-label" for="active">Active</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="inactive" value="inactive"  name="status" class="custom-control-input">
                                        <label class="custom-control-label" for="inactive">Inctive</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10 text-right">
                                    <button type="submit" class="btn btn-primary px-4">Add Product</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
