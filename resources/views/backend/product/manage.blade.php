@extends('backend.components.layout')
@section('title','Manage Product')
@section('content')
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
        <div class="breadcrumb-title pr-3">Dashboard</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
                </ol>
            </nav>
        </div>
        <div class="ml-auto">
            <div class="btn-group">
                <a href="{{route('staff.product.create')}}" class="btn btn-info ml-1"> <i class="bx bx-plus-circle mr-1"></i> Add Product</a>
            </div>
        </div>
    </div>


<x-show-message></x-show-message>

<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h4 class="mb-0">Manage Product</h4>
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

                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
