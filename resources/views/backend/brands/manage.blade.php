@extends('backend.components.layout')
@section('title')
    Manage brands
@endsection
@section('content')
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
        <div class="breadcrumb-title pr-3">Dashboard</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('staff.brand.index') }}"></a>Manage Brands</li>
                </ol>
            </nav>
        </div>
        <div class="ml-auto">
            <div class="btn-group">
                <a href="{{route('staff.brand.create')}}" class="btn btn-info ml-1"> <i class="bx bx-plus-circle mr-1"></i> Add brand</a>
            </div>
        </div>
    </div>


    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">×</span>
            </button>
        </div>
    @endif

<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h4 class="mb-0">Manage Brands</h4>
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
                @foreach($brands as $brand)
                    <tr>
                        <td>{{$brand->id}}</td>
                        <td>{{$brand->name}}</td>
                        <td>{{$brand->slug}}</td>
                        <td>{{$brand->status}}</td>
                        <td>{{$brand->user->name}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="dropdown-item text-info" href="{{route('staff.brand.edit',$brand->id)}}"> <i class="bx bx-edit"></i> Edit</a>

                                <form action="{{route('staff.brand.destroy',$brand->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item text-danger"><i class="bx bx-trash"></i> Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
