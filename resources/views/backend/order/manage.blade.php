@extends('backend.components.layout')
@section('title')
    Manage order
@endsection
@section('content')

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">×</span>
            </button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4 class="mb-0">Manage Order</h4>
            </div>
            <hr/>
            <div class="table-responsive">
                <table id="myDatatable" class="table table-striped table-bordered" style="width:100%">
                    <thead class="text-center">
                    <tr>
                        <th>SL NO</th>
                        <th>Order Id</th>
                        <th>Customer Name</th>
                        <th>Customer phone</th>
                        <th>Total</th>
                        <th>Order status</th>
                        <th>Payment status</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($orders as $item)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->id}}</td>
                            <td>{{$item->customer->full_name}}</td>
                            <td>{{$item->customer->phone}}</td>
                            <td>{{$item->total}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
