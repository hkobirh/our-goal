@extends('frontend.components.layout')
@section('title')
    Checkout
@endsection
@section('menu')
    @include('frontend.components.stiky_menu')
@endsection

@section('content')

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <ul class="checkout-progress-bar">
            <li>
                <span>Shipping</span>
            </li>
            <li class="active">
                <span>Review &amp; Payments</span>
            </li>
        </ul>
        <div class="row">
            <div class="col-lg-4">
                <div class="order-summary">
                    <h3>Summary</h3>

                    <h4>
                        <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button"
                           aria-expanded="false" aria-controls="order-cart-section">{{Cart::getContent()->count()}}
                            products in Cart</a>
                    </h4>

                    <div class="collapse show" id="order-cart-section">
                        <table class="table table-mini-cart">
                            <tbody>
                            @foreach(Cart::getContent() as $item)
                                <tr>
                                    <td class="product-col">
                                        <figure class="product-image-container">
                                            <a href="{{route('product',$item->attributes->slug)}}"
                                               class="product-image">
                                                <img src="{{asset('uploads/'.$item->attributes->image)}}" alt="product">
                                            </a>
                                        </figure>
                                        <div style="padding-top: 0">
                                            <h2 class="product-title">
                                                <a href="product.html">{{$item->name}}</a>
                                            </h2>

                                            <span class="product-qty">Qty: {{$item->quantity}}</span>
                                        </div>
                                    </td>
                                    <td class="price-col"> ৳ {{$item->price}}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>Total</td>
                                <td>৳ {{Cart::getSubTotal()}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- End #order-cart-section -->
                </div><!-- End .order-summary -->

                <div class="checkout-info-box">
                    <h3 class="step-title">Ship To:
                        <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                    </h3>

                    <address>
                        Desmond Mason <br>
                        123 Street Name, City, USA <br>
                        Los Angeles, California 03100 <br>
                        United States <br>
                        (123) 456-7890
                    </address>
                </div><!-- End .checkout-info-box -->

                <div class="checkout-info-box">
                    <h3 class="step-title">Shipping Method:
                        <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                    </h3>

                    <p>Flat Rate - Fixed</p>
                </div><!-- End .checkout-info-box -->
            </div><!-- End .col-lg-4 -->

            <div class="col-lg-8 order-lg-first">
                <div class="checkout-payment">

                    <h2 class="step-title">Payment Method:</h2>
                    <form action="{{route('order')}}" method="post">
                     @csrf
                    <label for="cash"> <input type="radio" name="payment_type" value="cash" id="cash" required> Cash </label>
                    <label for="bkash"><input type="radio" name="payment_type" value="bkash" id="bkash" required> bKash </label>
                    <div class="clearfix">
                    <button type="submit" class="btn btn-primary float-right">Place Order</button>
                    </div><!-- End .clearfix -->
                    </form>

                </div><!-- End .checkout-payment -->

            </div><!-- End .col-lg-8 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->

@endsection
