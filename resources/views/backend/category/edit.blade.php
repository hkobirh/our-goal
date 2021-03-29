@extends('backend.components.layout')
@section('title','Update category')

@section('content')
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
        <div class="breadcrumb-title pr-3">Dashboard</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Update Category</li>
                </ol>
            </nav>
        </div>
        <div class="ml-auto">
            <div class="btn-group">
                <a href="" class="btn btn-info ml-1"> <i class="bx bx-plus-circle mr-1"></i> Manage category</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-9 mx-auto">
            @if(session()->has('type') && session()->has('message'))
                <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">{{session('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
            <div class="card radius-15">
                <div class="card-body">
                    <form action="{{route('staff.category.update',$cat->id)}}" method="post">
                        @method("PUT")
                        @csrf
                        <div class="card-title">
                            <h4 class="mb-0">Category Update Form</h4>
                        </div>
                        <hr>
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="name">Root Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="root" id="root">
                                        <option value="0">__Root__</option>

                                        {!! categories_select_data($categories , 3, $cat->root) !!}

                                    </select>
                                    @error('root') <span class="text-danger font-italic">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="name">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" id="name" value="{{$cat->name}}" class="form-control">
                                    @error('name') <span class="text-danger font-italic">{{$message}}</span> @enderror
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9 text-center">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" checked id="active" value="active" {{$cat->status === 'active'? 'checked':''}} name="status" class="custom-control-input">
                                        <label class="custom-control-label" for="active">Active</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="inactive" value="inactive" {{$cat->status === 'inactive'? 'checked':''}}  name="status" class="custom-control-input">
                                        <label class="custom-control-label" for="inactive">Inctive</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10 text-right">
                                    <button type="submit" class="btn btn-primary px-4">Update Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
