@extends('backend.components.layout')
@section('title','Manage Category')
@section('content')
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
        <div class="breadcrumb-title pr-3">Dashboard</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Categories</li>
                </ol>
            </nav>
        </div>
        <div class="ml-auto">
            <div class="btn-group">
                <a href="{{route('staff.category.create')}}" class="btn btn-info ml-1"> <i class="bx bx-plus-circle mr-1"></i> Add Category</a>
            </div>
        </div>
    </div>


    @if(session()->has('type') && session('message'))
        <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">{{session('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">×</span>
            </button>
        </div>
    @endif

<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h4 class="mb-0">Manage Category</h4>
        </div>
        <hr/>
        <div class="table-responsive">
            <table id="myDatatable" class="table table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                <tr>
                    <th>SL NO</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Create by</th>
                    <th style="width: 100px">Action</th>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>
                        <td>{{$category->status}}</td>
                        <td>{{$category->user->name}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="dropdown-item text-info" href="{{route('staff.category.edit',$category->id)}}"> <i class="bx bx-edit"></i> Edit</a>

                                <form action="{{route('staff.category.destroy',$category->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item text-danger"><i class="bx bx-trash"></i> Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @if(count($category->sub_category))
                        @foreach($category->sub_category as $sub)
                            <tr>
                                <td>{{$sub->id}}</td>
                                <td>{{$category->name}}>{{$sub->name}}</td>
                                <td>{{$sub->slug}}</td>
                                <td>{{$sub->status}}</td>
                                <td>{{$sub->user->name}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="dropdown-item text-info" href="{{route('staff.category.edit',$sub->id)}}"> <i class="bx bx-edit"></i> Edit</a>

                                        <form action="{{route('staff.category.destroy',$sub->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item text-danger"><i class="bx bx-trash"></i> Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @if(count($sub->sub_category))
                                @foreach($sub->sub_category as $sub1)
                                    <tr>
                                        <td>{{$sub1->id}}</td>
                                        <td>{{$category->name}}>{{$sub->name}}>{{$sub1->name}}</td>
                                        <td>{{$sub1->slug}}</td>
                                        <td>{{$sub1->status}}</td>
                                        <td>{{$sub1->user->name}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="dropdown-item text-info" href="{{route('staff.category.edit',$sub1->id)}}"> <i class="bx bx-edit"></i> Edit</a>

                                                <form action="{{route('staff.category.destroy',$sub1->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger"><i class="bx bx-trash"></i> Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        @endforeach
                        @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
