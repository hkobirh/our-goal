@extends('backend.components.layout')
@section('title')
    View Order Details
@endsection
@section('content')

    <div class="card">
        <div class="row">
            <div class="col-md-6">

                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Customer Info</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table  table-bordered">
                            <tr>
                                <td>Name</td>
                                <th>{{$orders->customer->full_name}}</th>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <th>{{$orders->customer->phone}}</th>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <th>{{$orders->customer->email}}</th>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <th>{{$orders->customer->address}}</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Order Info</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table  table-bordered">
                            <tr>
                                <td>Order ID</td>
                                <th>{{$orders->id}}</th>
                            </tr>
                            <tr>
                                <td>Order Date</td>
                                <th>{{date('d/m/y',strtotime($orders->created_at))}}</th>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <th>{{$orders->total}}</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Shippin Info</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table  table-bordered">
                            <tr>
                                <td>Name</td>
                                <th>{{$orders->shipping->full_name}}</th>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <th>{{$orders->shipping->phone}}</th>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <th>{{$orders->shipping->address}}</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Product Info</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table  table-bordered">
                            <tr>
                                <td>Sl</td>
                                <td>Thumbnail</td>
                                <td>Name</td>
                                <td>Qty</td>
                                <td>Unit Price</td>
                                <td>Total Price</td>
                            </tr>
                            @php($sum=0)
                            @foreach($order_info as $item)
                                <tr>
                                    <td>{{$loop->index++}}</td>
                                    <td><img src="{{asset('uploads/'.$item->product->thumbnail)}}" alt="" style="width:100px;"></td>
                                    <td>{{$item->product_name}}</td>
                                    <td>{{$item->product_qty}}</td>
                                    <td class="text-right">{{$item->product_price}}</td>
                                    <td class="text-right">{{$item->product_price * $item->product_qty}}</td>

                                    @php($sum+=$item->product_price * $item->product_qty)
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="5">Total</td>
                                <td class="text-right">{{$sum}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
