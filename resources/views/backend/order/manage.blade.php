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
                            <td class="text-capitalize">{{$item->status}}</td>
                            <td class="text-capitalize">{{$item->payment->status}}</td>
                            <td>
                                <div class="btn-group m-1 btn-group-sm" role="group" aria-label="Basic example">
                                    <a href="{{route('staff.orders.details', $item->id)}}" class="btn btn-outline-info"><i class="bx bx-info-circle"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-dark"><i class="bx bx-pencil"></i>
                                    </a>
                                    <a href="{{route('staff.orders.invoice', $item->id)}}" class="btn btn-outline-danger"><i class="bx bx-download"></i>
                                    </a>
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
