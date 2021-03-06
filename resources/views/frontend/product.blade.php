@extends('frontend.components.layout')
@section('title')
    Product
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Shoes</a></li>
            </ol>
        </nav>
        <div class="product-single-container product-single-default">
            <div class="row">
                <div class="col-md-5 product-single-gallery">
                    <div class="product-slider-container">
                        <div class="product-single-carousel owl-carousel owl-theme">
                            @foreach(json_decode($product->image) as $image)
                                <div class="product-item">
                                    <img class="product-single-image" src="{{asset('uploads/products/'.$image)}}"
                                         data-zoom-image="{{asset('uploads/products/'.$image)}}"/>
                                </div>
                            @endforeach
                        </div>
                        <!-- End .product-single-carousel -->
                        <span class="prod-full-screen">
									<i class="icon-plus"></i>
								</span>
                    </div>
                    <div class="prod-thumbnail owl-dots" id='carousel-custom-dots'>
                        @foreach(json_decode($product->image) as $image)
                            <div class="owl-dot">
                                <img src="{{asset('uploads/products/'.$image)}}"/>
                            </div>
                        @endforeach
                    </div>
                </div><!-- End .product-single-gallery -->

                <div class="col-md-7 product-single-details">
                    <h1 class="product-title">{{$product->name}}</h1>

                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:{{$product->get_rating()*20}}%"></span><!-- End .ratings -->
                        </div><!-- End .product-ratings -->

                        <a href="#" class="rating-link">( {{$reviews->count()}} Reviews )</a>
                    </div><!-- End .ratings-container -->

                    <hr class="short-divider">

                    <div class="price-box">
                        <span class="product-price">$49</span>
                    </div><!-- End .price-box -->

                    <div class="product-desc">
                        <p>
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla
                            pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse.
                            <a href="#">(read more)</a>
                        </p>
                    </div><!-- End .product-desc -->

                    <div class="product-filters-container">
                        <div class="product-single-filter">
                            <label>Colors:</label>
                            <ul class="config-swatch-list">
                                @foreach($colors as $color)
                                    <li class="color-item" data-value="{{$color}}">
                                        <a href="javascript:" style="background-color: {{$color}};"></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="product-single-filter mb-2">
                            <label>Sizes:</label>
                            <ul class="config-size-list">
                                @foreach($sizes as $size)
                                    <li class="size-item"><a href="javascript:">{{$size}}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End .product-single-filter -->
                    </div><!-- End .product-filters-container -->

                    <hr class="divider">

                    <div class="product-action">
                        <div class="product-single-qty">
                            <input class="horizontal-quantity form-control" type="text">
                        </div><!-- End .product-single-qty -->

                        <a href="" class="btn btn-dark add-cart icon-shopping-cart add-to-cart"
                           data-id="{{$product->id}}" title="Add to Cart">Add to Cart</a>
                    </div><!-- End .product-action -->

                    <hr class="divider mb-1">

                    <div class="product-single-share">
                        <label class="sr-only">Share:</label>

                        <div class="social-icons mr-2">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"
                               title="Facebook"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                               title="Twitter"></a>
                            <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank"
                               title="Linkedin"></a>
                            <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank"
                               title="Google +"></a>
                            <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                        </div><!-- End .social-icons -->

                        <a href="#" class="add-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                    </div><!-- End .product single-share -->
                </div><!-- End .product-single-details -->
            </div><!-- End .row -->
        </div><!-- End .product-single-container -->

        <div class="product-single-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content"
                       role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-tab-more-info" data-toggle="tab" href="#product-more-info-content"
                       role="tab" aria-controls="product-more-info-content" aria-selected="false">More Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab"
                       aria-controls="product-tags-content" aria-selected="false">Tags</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content"
                       role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews
                        ( {{$reviews->count()}} )</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                     aria-labelledby="product-tab-desc">
                    <div class="product-desc-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                        <ul>
                            <li><i class="fa fa-check-circle"></i>Any Product types that You want - Simple, Configurable
                            </li>
                            <li><i class="fa fa-check-circle"></i>Downloadable/Digital Products, Virtual Products</li>
                            <li><i class="fa fa-check-circle"></i>Inventory Management with Backordered items</li>
                        </ul>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            <br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div><!-- End .product-desc-content -->
                </div><!-- End .tab-pane -->

                <div class="tab-pane fade fade" id="product-more-info-content" role="tabpanel"
                     aria-labelledby="product-tab-more-info">
                    <div class="product-desc-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div><!-- End .product-desc-content -->
                </div><!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                    <div class="product-tags-content">
                        <form action="#">
                            <h4>Add Your Tags:</h4>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" required>
                                <input type="submit" class="btn btn-dark" value="Add Tags">
                            </div><!-- End .form-group -->
                        </form>
                        <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                    </div><!-- End .product-tags-content -->
                </div><!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-reviews-content" role="tabpanel"
                     aria-labelledby="product-tab-reviews">
                    <div class="product-reviews-content">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="text-center">
                                    <div>
                                        <span style="font-size: 40px;color:#1a202c;">{{$product->get_rating()}}</span>
                                        <span style="font-size: 25px;">/5</span>
                                    </div>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                        <span class="ratings"
                                                              style="width:{{$product->get_rating()*20}}%"></span>
                                                <!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .ratings-container -->
                                    <p class="reviews-title">{{$reviews->count()}} reviews for Product</p>
                                </div>
                                @foreach($reviews as $reviews)
                                    <ol class="comment-list">
                                        <li class="comment-container">
                                            <div class="comment-avatar">
                                                <img
                                                    src="{{asset('uploads/customers/')}}{{$reviews->customer->profile ? '$reviews->customer->profile':'/avatar1.jpg'}}"
                                                    width="65" height="65"
                                                    alt="avatar"/>
                                            </div><!-- End .comment-avatar-->

                                            <div class="comment-box">
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings"
                                                              style="width:{{$reviews->rating}}%"></span>
                                                        <!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .ratings-container -->

                                                <div class="comment-info mb-1">
                                                    <h4 class="avatar-name">{{$reviews->customer->full_name}}</h4> -
                                                    <span
                                                        class="comment-date">{{date('F d,y',strtotime($reviews->created_at))}}</span>
                                                </div><!-- End .comment-info -->

                                                <div class="comment-text">
                                                    <p>
                                                        {{$reviews->message}}
                                                    </p>
                                                </div><!-- End .comment-text -->
                                            </div><!-- End .comment-box -->
                                        </li><!-- comment-container -->
                                    </ol><!-- End .comment-list -->
                                @endforeach
                            </div>

                            <div class="col-xl-5">
                                @if($review_create && $buy)
                                    <div class="add-product-review">
                                        <form action="{{route('review.create')}}" method="post"
                                              class="comment-form m-0 create-review">
                                            @csrf
                                            <h3 class="review-title">Add a Review</h3>

                                            <div class="rating-form">
                                                <label for="rating">Your rating</label>
                                                <span class="rating-stars">
                                                <a class="star-1" href="#">1</a>
                                                <a class="star-2" href="#">2</a>
                                                <a class="star-3" href="#">3</a>
                                                <a class="star-4" href="#">4</a>
												<a class="star-5" href="#">5</a>
											</span>

                                                <select name="rating" id="rating" required="" style="display: none;">
                                                    <option value="">Rate…</option>
                                                    <option value="5">Perfect</option>
                                                    <option value="4">Good</option>
                                                    <option value="3">Average</option>
                                                    <option value="2">Not that bad</option>
                                                    <option value="1">Very poor</option>
                                                </select>
                                                <input type="hidden" name="product" value="{{$product->id}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="message">Your Review</label>
                                                <textarea id="message" cols="5" rows="4" name="message"
                                                          class="form-control form-control-sm"></textarea>
                                            </div><!-- End .form-group -->

                                            <input type="submit" class="btn btn-dark ls-n-15" value="Submit">
                                        </form>
                                    </div><!-- End .add-product-review -->
                                @endif
                            </div>
                        </div>
                    </div><!-- End .product-reviews-content -->
                </div><!-- End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .product-single-tabs -->

        <div class="products-section pt-0">
            <h2 class="section-title">Related Products</h2>

            <div class="products-slider owl-carousel owl-theme dots-top">
                @foreach($related_product as $product)
                    @php($s_price = false)
                    @if($product->special_price_from <= date('Y-m-d') && $product->special_price_to >= date('Y-m-d'))
                        @php($s_price = true)
                    @endif
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{route('product',$product->slug)}}">
                                <img src="{{asset('uploads/Kobir.jpg')}}" alt="">
                            </a>
                            <div class="label-group">
                                @if($s_price)
                                    <div class="product-label label-sale">-20%</div>
                                @endif
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal"
                                        data-target="#addCartModal"><i class="icon-shopping-cart"></i>
                                </button>
                            </div>
                            <a href="" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="{{route('product',$product->slug)}}">{{$product->name}}</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                @if($s_price)
                                    <span class="old-price">{{$product->selling_price}}</span>
                                    <span class="product-price">{{$product->special_price}}</span>
                                @else
                                    <span class="product-price">{{$product->selling_price}}</span>
                                @endif
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                @endforeach
            </div><!-- End .products-slider -->
        </div><!-- End .products-section -->
    </div><!-- End .container -->

@endsection
