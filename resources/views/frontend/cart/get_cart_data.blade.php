
    <a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown"
       aria-expanded="false" data-display="static">
        <i class="icon-shopping-cart"></i>
        <span class="cart-count badge-circle">{{Cart::getTotalQuantity()}}</span>
    </a>
        <div class="dropdown-menu">
            <div class="dropdownmenu-wrapper">
                @if(!Cart::isEmpty())
                <div class="dropdown-cart-header">
                    <span>{{Cart::getContent()->count()}} Items</span>

                    <a href="{{route('cart.show')}}" class="float-right">View Cart</a>
                    <a href="" class="clear-cart text-danger">Clear</a>
                </div><!-- End .dropdown-cart-header -->

                <div class="dropdown-cart-products">
                    @foreach(Cart::getContent() as $item)
                        <div class="product">
                            <div class="product-details">
                                 <h4 class="product-title">
                                    <a href="product.html">{{$item->name}}</a>
                                </h4>

                                <span class="cart-product-info">
													<span class="cart-product-qty">{{$item->quantity}}</span>
													* ৳ {{$item->price}}
												</span>
                            </div><!-- End .product-details -->

                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="{{asset('uploads/'.$item->thumbnail)}}" alt="product"
                                         width="80" height="80">
                                </a>
                                <a href="#" class="btn-remove icon-cancel item-remove" data-id="{{$item->id}}" title="Remove Product"></a>
                            </figure>
                        </div><!-- End .product -->
                    @endforeach
                </div><!-- End .cart-product -->

                <div class="dropdown-cart-total">
                    <span>Total</span>

                    <span class="cart-total-price float-right">৳ {{Cart::getSubTotal()}}</span>
                </div><!-- End .dropdown-cart-total -->

                <div class="dropdown-cart-action">
                    <a href="checkout-shipping.html" class="btn btn-dark btn-block">Checkout</a>
                </div><!-- End .dropdown-cart-total -->
                @else
                    <p class="text-center p-4">YOUR SHOPPING <br/>BAG IS EMPTY</p>
                @endif
            </div><!-- End .dropdownmenu-wrapper -->
        </div><!-- End .dropdown-menu -->
