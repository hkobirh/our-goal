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
            <li class="active">
                <span>Shipping</span>
            </li>
            <li>
                <span>Review &amp; Payments</span>
            </li>
        </ul>
        <div class="row">
            <div class="col-lg-8">
                <ul class="checkout-steps">
                    <li>
                        <h2 class="step-title">Shipping Address</h2>
                        <form action="{{route('shipping')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group required-field">
                                <label>First Name </label>
                                <input type="text" name="first_name" class="form-control" required>
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label>Last Name </label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label>Address </label>
                                <input type="text" name="address" class="form-control" required>
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label>Phone </label>
                                <div class="form-control-tooltip">
                                    <input type="tel" name="phone" class="form-control" required>
                                    <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions."
                                          data-placement="right"><i class="icon-question-circle"></i></span>
                                </div><!-- End .form-control-tooltip -->
                            </div><!-- End .form-group -->

                            <div class="checkout-steps-action">
                                <button type="submit" class="btn btn-primary float-lg-right">NEXT</button>
                            </div><!-- End .checkout-steps-action -->
                        </form>
                    </li>
                </ul>
            </div><!-- End .col-lg-8 -->

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
            </div><!-- End .col-lg-4 -->
        </div><!-- End .row -->

        <div class="mb-6"></div><!-- margin -->

@endsection
