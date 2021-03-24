@extends('frontend.components.layout')
@section('title')
    Products
@endsection
@section('content')
    <main class="main">
        <div class="category-banner-container bg-gray">
            <div class="category-banner banner text-uppercase"
                 style="background: no-repeat 60%/cover url({{ asset('theme/frontend/assets/images/banners/banner-top.jpg') }});">
                <div class="container position-relative">
                    <div class="row">
                        <div class="pl-lg-5 pb-5 pb-md-0 col-md-5 col-xl-4 col-lg-4 offset-1">
                            <h3 class="ml-lg-5 mb-2 ls-10">Electronic<br>Deals</h3>
                            <a href="#" class="ml-lg-5 btn btn-dark btn-black ls-10">Get Yours!</a>
                        </div>
                        <div class="pl-lg-5 col-md-4 offset-md-0 offset-1 pt-4">
                            <div class="coupon-sale-content">
                                <h4 class="m-b-2 coupon-sale-text bg-white ls-10 text-transform-none">Exclusive
                                    COUPON</h4>
                                <h5 class="mb-2 coupon-sale-text d-block ls-10 p-0"><i class="ls-0">UP TO</i><b
                                        class="text-dark">$100</b> OFF</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Men</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Accessories</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-lg-9 main-content">
                    <nav class="toolbox">
                        <div class="toolbox-left">
                            <div class="toolbox-item toolbox-sort">
                                <label>Sort By:</label>

                                <div class="select-custom">
                                    <select name="orderby" class="form-control">
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div><!-- End .select-custom -->


                            </div><!-- End .toolbox-item -->
                        </div><!-- End .toolbox-left -->

                        <div class="toolbox-right">
                            <div class="toolbox-item toolbox-show">
                                <label>Show:</label>

                                <div class="select-custom">
                                    <select name="count" class="form-control">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                    </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .toolbox-item -->

                            <div class="toolbox-item layout-modes">
                                <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                                    <i class="icon-mode-grid"></i>
                                </a>
                                <a href="category-list.html" class="layout-btn btn-list" title="List">
                                    <i class="icon-mode-list"></i>
                                </a>
                            </div><!-- End .layout-modes -->
                        </div><!-- End .toolbox-right -->
                    </nav>
                    <div class="row">
                        @foreach($products as $product)
                            @php($s_price = false)
                           @if($product->special_price_from <= date('Y-m-d') && $product->special_price_to >= date('Y-m-d'))
                               @php($s_price = true)
                            @endif
                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="{{route('product',$product->slug)}}">
                                            <img src="{{$product->thumbnail}}" alt="">
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
                                        <a href="{{route('product.quick.view',$product->slug)}}" class="btn-quickview">Quick View</a>
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
                            </div><!-- End .col-sm-4 -->
                        @endforeach
                    </div>
                </div><!-- End .col-lg-9 -->

                <div class="sidebar-overlay"></div>
                <div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
                <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                    <div class="sidebar-wrapper">
                        <div class="widget">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true"
                                   aria-controls="widget-body-2">Categories</a>
                            </h3>

                            <div class="collapse show" id="widget-body-2">
                                <div class="widget-body">
                                    <ul class="cat-list">
                                        @foreach($categories as $category)
                                            <li>
                                                <a href="{{route('products',[$category->slug,$category->slug])}}">{{$category->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true"
                                   aria-controls="widget-body-3">Price</a>
                            </h3>

                            <div class="collapse show" id="widget-body-3">
                                <div class="widget-body">
                                    <form action="#">
                                        <div class="price-slider-wrapper">
                                            <div id="price-slider"></div><!-- End #price-slider -->
                                        </div><!-- End .price-slider-wrapper -->

                                        <div
                                            class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                            <button type="submit" class="btn btn-primary">Filter</button>

                                            <div class="filter-price-text">
                                                Price:
                                                <span id="filter-price-range"></span>
                                            </div><!-- End .filter-price-text -->
                                        </div><!-- End .filter-price-action -->
                                    </form>
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true"
                                   aria-controls="widget-body-5">Brand</a>
                            </h3>

                            <div class="collapse show" id="widget-body-5">
                                <div class="widget-body">
                                    <ul class="cat-list">
                                        @foreach($brands as $brand)
                                            <li><a href="{{route('brand',$brand->slug)}}">{{$brand->name}}
                                                    ({{$brand->products->count()}})</a></li>
                                        @endforeach
                                    </ul>
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->


                        <div class="widget widget-featured">
                            <h3 class="widget-title">Featured</h3>

                            <div class="widget-body">
                                <div class="owl-carousel widget-featured-products">
                                    @php($sl = 1)
                                    @foreach($featured as $feature)
                                        @if(($sl % 3) == 1)
                                        <div class="featured-col">
                                           @endif
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="{{route('product',$feature->slug)}}">
                                                        <img src="{{$feature->thumbnail}}" alt="">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title">
                                                        <a href="{{route('product',$feature->slug)}}">{{$feature->name}}</a>
                                                    </h2>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div><!-- End .price-box -->
                                                </div><!-- End .product-details -->
                                            </div>
                                            @if(($sl % 3) == 0)
                                        </div><!-- End .featured-col -->
                                        @endif
                                        @php($sl++)
                                    @endforeach
                                </div><!-- End .widget-featured-slider -->
                            </div><!-- End .widget-body -->
                        </div><!-- End .widget -->
                    </div><!-- End .sidebar-wrapper -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-3"></div><!-- margin -->
    </main><!-- End .main -->


@endsection
