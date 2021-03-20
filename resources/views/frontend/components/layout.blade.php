<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jan 2021 15:43:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('theme/frontend/assets/images/icons/favicon.ico')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('theme/frontend/assets/css/bootstrap.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('theme/frontend/assets/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/frontend/assets/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/frontend/assets/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
</head>
<body>
<div class="page-wrapper">
    <div class="top-notice text-white bg-dark">
        <div class="container text-center">
            <h5 class="d-inline-block mb-0 mr-2">Get Up to <b>40% OFF</b> New-Season Styles</h5>
            <a href="category.html" class="category">MEN</a>
            <a href="category.html" class="category ml-2 mr-3">WOMEN</a>
            <small>* Limited time only</small>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div><!-- End .container -->
    </div><!-- End .top-notice -->

    <header class="header">
        <div class="header-top bg-primary text-uppercase">
            <div class="container">
                <div class="header-left">
                    <div class="header-dropdown">
                        <a href="#" class="pl-0"><img src="{{asset('theme/frontend/assets/css/bootstrap.min.css')}}assets/images/flags/en.png')}}" alt="England flag">ENG</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#"><img src="{{asset('theme/frontend/assets/css/bootstrap.min.css')}}assets/images/flags/en.png')}}" alt="England flag">ENG</a></li>
                                <li><a href="#"><img src="{{asset('theme/frontend/assets/css/bootstrap.min.css')}}assets/images/flags/fr.png')}}" alt="France flag">FRA</a></li>
                            </ul>
                        </div><!-- End .header-menu -->
                    </div><!-- End .header-dropown -->

                    <div class="header-dropdown ml-4">
                        <a href="#">USD</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">USD</a></li>
                            </ul>
                        </div><!-- End .header-menu -->
                    </div><!-- End .header-dropown -->
                </div><!-- End .header-left -->

                <div class="header-right header-dropdowns ml-0 ml-sm-auto">
                    <p class="top-message mb-0 mr-lg-5 pr-3 d-none d-sm-block">Welcome To Porto!</p>
                    <div class="header-dropdown dropdown-expanded mr-3">
                        <a href="#">Links</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="my-account.html">Track Order </a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="category.html">Our Stores</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="#">Help &amp; FAQs</a></li>
                            </ul>
                        </div><!-- End .header-menu -->
                    </div><!-- End .header-dropown -->

                    <span class="separator"></span>

                    <div class="social-icons">
                        <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                        <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                        <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                    </div><!-- End .social-icons -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-top -->

        <div class="header-middle text-dark">
            <div class="container">
                <div class="header-left col-lg-2 w-auto pl-0">
                    <button class="mobile-menu-toggler mr-2" type="button">
                        <i class="icon-menu"></i>
                    </button>
                    <a href="index.html" class="logo">
                        <img src="{{asset('theme/frontend/assets/css/bootstrap.min.css')}}assets/images/logo.png')}}" alt="Porto Logo">
                    </a>
                </div><!-- End .header-left -->

                <div class="header-right w-lg-max pl-2">
                    <div class="header-search header-icon header-search-inline header-search-category w-lg-max mr-lg-4">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                <div class="select-custom">
                                    <select id="cat" name="cat">
                                        <option value="">All Categories</option>
                                        <option value="4">Fashion</option>
                                        <option value="12">- Women</option>
                                        <option value="13">- Men</option>
                                        <option value="66">- Jewellery</option>
                                        <option value="67">- Kids Fashion</option>
                                        <option value="5">Electronics</option>
                                        <option value="21">- Smart TVs</option>
                                        <option value="22">- Cameras</option>
                                        <option value="63">- Games</option>
                                        <option value="7">Home &amp; Garden</option>
                                        <option value="11">Motors</option>
                                        <option value="31">- Cars and Trucks</option>
                                        <option value="32">- Motorcycles &amp; Powersports</option>
                                        <option value="33">- Parts &amp; Accessories</option>
                                        <option value="34">- Boats</option>
                                        <option value="57">- Auto Tools &amp; Supplies</option>
                                    </select>
                                </div><!-- End .select-custom -->
                                <button class="btn p-0 icon-search-3" type="submit"></button>
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div><!-- End .header-search -->

                    <div class="header-contact d-none d-lg-flex align-items-center pr-xl-5 mr-3 ml-xl-5">
                        <i class="icon-phone-2"></i>
                        <h6 class="pt-1 line-height-1">Call us now<a href="tel:#" class="d-block text-dark ls-10 pt-1">+123 5678 890</a></h6>
                    </div><!-- End .header-contact -->

                    <a href="login.html" class="header-icon login-link"><i class="icon-user-2"></i></a>

                    <a href="#" class="header-icon"><i class="icon-wishlist-2"></i></a>

                    <div class="dropdown cart-dropdown">
                        <a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count badge-circle">2</span>
                        </a>

                        <div class="dropdown-menu">
                            <div class="dropdownmenu-wrapper">
                                <div class="dropdown-cart-header">
                                    <span>2 Items</span>

                                    <a href="cart.html" class="float-right">View Cart</a>
                                </div><!-- End .dropdown-cart-header -->

                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Woman Ring</a>
                                            </h4>

                                            <span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													x $99.00
												</span>
                                        </div><!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="{{asset('theme/frontend/assets/css/bootstrap.min.css')}}assets/images/products/cart/product-1.jpg')}}" alt="product" width="80" height="80">
                                            </a>
                                            <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                        </figure>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Woman Necklace</a>
                                            </h4>

                                            <span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													x $35.00
												</span>
                                        </div><!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="{{asset('theme/frontend/assets/css/bootstrap.min.css')}}assets/images/products/cart/product-2.jpg')}}" alt="product" width="80" height="80">
                                            </a>
                                            <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                        </figure>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price float-right">$134.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="checkout-shipping.html" class="btn btn-dark btn-block">Checkout</a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdownmenu-wrapper -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .dropdown -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-middle -->
    </header><!-- End .header -->

    <main class="main">
        <div class="container mb-2">
            <div class="info-boxes-container row row-joined mb-2 font2">
                <div class="info-box info-box-icon-left col-lg-4">
                    <i class="icon-shipping"></i>

                    <div class="info-box-content">
                        <h4>FREE SHIPPING &amp; RETURN</h4>
                        <p class="text-body">Free shipping on all orders over $99</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->

                <div class="info-box info-box-icon-left col-lg-4">
                    <i class="icon-money"></i>

                    <div class="info-box-content">
                        <h4>MONEY BACK GUARANTEE</h4>
                        <p class="text-body">100% money back guarantee</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->

                <div class="info-box info-box-icon-left col-lg-4">
                    <i class="icon-support"></i>

                    <div class="info-box-content">
                        <h4>ONLINE SUPPORT 24/7</h4>
                        <p class="text-body">Lorem ipsum dolor sit amet.</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->
            </div>

            <div class="row">
                <div class="col-lg-9">
                    <div class="home-slider owl-carousel owl-theme owl-carousel-lazy mb-2" data-owl-options="{
							'loop': false,
							'dots': true,
							'nav': false
						}">
                        <div class="home-slide home-slide1 banner banner-md-vw banner-sm-vw">
                            <img class="owl-lazy slide-bg" src="{{asset('theme/frontend/assets/images/lazy.png')}}" data-src="{{asset('theme/frontend/assets/images/slider/slide-1.png')}}" alt="slider image">
                            <div class="banner-layer banner-layer-middle">
                                <h4 class="text-white pb-4 mb-0">Find the Boundaries. Push Through!</h4>
                                <h2 class="text-white mb-0">Summer Sale</h2>
                                <h3 class="text-white text-uppercase m-b-3">70% Off</h3>
                                <h5 class="text-white text-uppercase d-inline-block mb-0 ls-n-20 align-text-bottom">Starting At <b class="coupon-sale-text bg-secondary text-white d-inline-block">$<em class="align-text-top">199</em>99</b></h5>
                                <a href="category.html" class="btn btn-dark btn-md ls-10">Shop Now!</a>
                            </div><!-- End .banner-layer -->
                        </div><!-- End .home-slide -->

                        <div class="home-slide home-slide2 banner banner-md-vw banner-sm-vw">
                            <img class="owl-lazy slide-bg" src="{{asset('theme/frontend/assets/images/lazy.png')}}" data-src="{{asset('theme/frontend/assets/images/slider/slide-2.jpg')}}" alt="slider image">
                            <div class="banner-layer banner-layer-middle text-uppercase">
                                <h4 class="m-b-2">Over 200 products with discounts</h4>
                                <h2 class="m-b-3">Great Deals</h2>
                                <h5 class="d-inline-block mb-0 align-top mr-5">Starting At <b>$<em>299</em>99</b></h5>
                                <a href="category.html" class="btn btn-dark btn-md ls-10">Get Yours!</a>
                            </div><!-- End .banner-layer -->
                        </div><!-- End .home-slide -->

                        <div class="home-slide home-slide3 banner banner-md-vw banner-sm-vw">
                            <img class="owl-lazy slide-bg" data-src="{{asset('theme/frontend/assets/images/slider/slide-3.jpg')}}"></img>
                            <div class="banner-layer banner-layer-middle text-uppercase">
                                <h4 class="m-b-2">Up to 70% off</h4>
                                <h2 class="m-b-3">New Arrivals</h2>
                                <h5 class="d-inline-block mb-0 align-top mr-5">Starting At <b>$<em>299</em>99</b></h5>
                                <a href="category.html" class="btn btn-dark btn-md ls-10">Get Yours!</a>
                            </div><!-- End .banner-layer -->
                        </div><!-- End .home-slide -->
                    </div><!-- End .home-slider -->

                    <div class="banners-container m-b-2 owl-carousel owl-theme" data-owl-options="{
							'dots': false,
							'margin': 20,
							'loop': false,
							'responsive': {
								'480': {
									'items': 2
								},
								'768': {
									'items': 3
								}
							}
						}">
                        <div class="banner banner1 banner-hover-shadow mb-2">
                            <figure>
                                <img src="{{asset('theme/frontend/assets/images/banners/banner-1.jpg')}}" alt="banner">
                            </figure>
                            <div class="banner-layer banner-layer-middle">
                                <h3 class="m-b-2">Porto Watches</h3>
                                <h4 class="m-b-4 text-primary"><sup class="text-dark"><del>20%</del></sup>30%<sup>OFF</sup></h4>
                                <a href="#" class="text-dark text-uppercase ls-10">Shop Now</a>
                            </div>
                        </div><!-- End .banner -->
                        <div class="banner banner2 text-uppercase banner-hover-shadow mb-2">
                            <figure>
                                <img src="{{asset('theme/frontend/assets/images/banners/banner-2.jpg')}}" alt="banner">
                            </figure>
                            <div class="banner-layer banner-layer-middle text-center pt-2">
                                <h3 class="m-b-1 ls-n-20">Deal Promos</h3>
                                <h4 class="m-b-4 text-body">Starting at $99</h4>
                                <a href="#" class="text-dark text-uppercase ls-10">Shop Now</a>
                            </div>
                        </div><!-- End .banner -->
                        <div class="banner banner3 banner-hover-shadow mb-2">
                            <figure>
                                <img src="{{asset('theme/frontend/assets/images/banners/banner-3.jpg')}}" alt="banner">
                            </figure>
                            <div class="banner-layer banner-layer-middle text-right">
                                <h3 class="m-b-2">Handbags</h3>
                                <h4 class="mb-3 pb-1 text-secondary text-uppercase">Starting at $99</h4>
                                <a href="#" class="text-dark text-uppercase ls-10">Shop Now</a>
                            </div>
                        </div><!-- End .banner -->
                    </div>

                    <h2 class="section-title ls-n-10 m-b-4">Featured Products</h2>

                    <div class="products-slider owl-carousel owl-theme dots-top m-b-1 pb-1">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('theme/frontend/assets/images/products/home-featured-1.jpg')}}">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('theme/frontend/assets/images/products/home-featured-2.jpg')}}">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <div class="product-label label-sale">-20%</div>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('theme/frontend/assets/images/products/home-featured-3.jpg')}}">
                                </a>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('theme/frontend/assets/images/products/home-featured-4.jpg')}}">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <div class="product-label label-sale">-30%</div>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('theme/frontend/assets/images/products/home-featured-5.jpg')}}">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .featured-proucts -->

                    <div class="brands-slider owl-carousel owl-theme images-center mb-3" data-owl-options="{
							'responsive': {
								'768': {
									'items': 5
								}
							}
						}">
                        <img src="{{asset('theme/frontend/assets/images/brands/brand1.png')}}" width="140" height="60" alt="brand">
                        <img src="{{asset('theme/frontend/assets/images/brands/brand2.png')}}" width="140" height="60" alt="brand">
                        <img src="{{asset('theme/frontend/assets/images/brands/brand3.png')}}" width="140" height="60" alt="brand">
                        <img src="{{asset('theme/frontend/assets/images/brands/brand4.png')}}" width="140" height="60" alt="brand">
                        <img src="{{asset('theme/frontend/assets/images/brands/brand5.png')}}" width="140" height="60" alt="brand">
                        <img src="{{asset('theme/frontend/assets/images/brands/brand6.png')}}" width="140" height="60" alt="brand">
                    </div><!-- End .brands-slider -->

                    <div class="row products-widgets">
                        <div class="col-sm-6 col-md-4 pb-4 pb-md-0">
                            <div class="product-column">
                                <h3 class="section-sub-title ls-n-20">Top Rated Products</h3>

                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('theme/frontend/assets/images/products/home-featured-3.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('theme/frontend/assets/images/products/home-featured-4.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('theme/frontend/assets/images/products/small/product-1.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .product-column -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-sm-6 col-md-4 pb-4 pb-md-0">
                            <div class="product-column">
                                <h3 class="section-sub-title ls-n-20">Best Selling Products</h3>

                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('theme/frontend/assets/images/products/home-featured-1.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('theme/frontend/assets/images/products/home-featured-2.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('theme/frontend/assets/images/products/home-featured-5.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .product-column -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-sm-6 col-md-4 pb-4 pb-md-0">
                            <div class="product-column">
                                <h3 class="section-sub-title ls-n-20">Latest Products</h3>

                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('theme/frontend/assets/images/products/home-featured-4.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('theme/frontend/assets/images/products/small/product-1.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('theme/frontend/assets/images/products/home-featured-3.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .product-column -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->

                    <hr class="mt-1 mb-4">

                    <div class="feature-boxes-container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="feature-box px-sm-3 feature-box-simple text-center">
                                    <i class="icon-earphones-alt"></i>

                                    <div class="feature-box-content">
                                        <h3 class="m-b-1">Customer Support</h3>
                                        <h5 class="m-b-3">Need Assistance?</h5>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                    </div><!-- End .feature-box-content -->
                                </div><!-- End .feature-box -->
                            </div><!-- End .col-md-4 -->

                            <div class="col-md-4">
                                <div class="feature-box px-sm-3 feature-box-simple text-center">
                                    <i class="icon-credit-card"></i>

                                    <div class="feature-box-content">
                                        <h3 class="m-b-1">Secured Payment</h3>
                                        <h5 class="m-b-3">Safe & Fast</h5>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                    </div><!-- End .feature-box-content -->
                                </div><!-- End .feature-box -->
                            </div><!-- End .col-md-4 -->

                            <div class="col-md-4">
                                <div class="feature-box px-sm-3 feature-box-simple text-center">
                                    <i class="icon-action-undo"></i>

                                    <div class="feature-box-content">
                                        <h3 class="m-b-1">Returns</h3>
                                        <h5 class="m-b-3">Easy & Free</h5>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                    </div><!-- End .feature-box-content -->
                                </div><!-- End .feature-box -->
                            </div><!-- End .col-md-4 -->
                        </div><!-- End .row -->
                    </div><!-- End .feature-boxes-container -->
                </div><!-- End .col-lg-9 -->

                <div class="sidebar-overlay"></div>
                <div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
                <aside class="sidebar-home col-lg-3 order-lg-first mobile-sidebar">
                    <div class="side-menu-wrapper text-uppercase mb-2 d-none d-lg-block">
                        <h2 class="side-menu-title bg-gray ls-n-25">Browse Categories</h2>

                        <nav class="side-nav">
                            <ul class="menu menu-vertical sf-arrows">
                                <li class="active"><a href="index.html"><i class="icon-home"></i>Home</a></li>
                                <li>
                                    <a href="category.html" class="sf-with-ul"><i class="sicon-badge"></i>Categories</a>
                                    <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">VARIATION 1</a>
                                                <ul class="submenu">
                                                    <li><a href="category.html">Fullwidth Banner</a></li>
                                                    <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                                    <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                                    <li><a href="category.html">Left Sidebar</a></li>
                                                    <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                                    <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                                                    <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                                    <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">VARIATION 2</a>
                                                <ul class="submenu">
                                                    <li><a href="category-list.html">List Types</a></li>
                                                    <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                                    <li><a href="category.html">3 Columns Products</a></li>
                                                    <li><a href="category-4col.html">4 Columns Products</a></li>
                                                    <li><a href="category-5col.html">5 Columns Products</a></li>
                                                    <li><a href="category-6col.html">6 Columns Products</a></li>
                                                    <li><a href="category-7col.html">7 Columns Products</a></li>
                                                    <li><a href="category-8col.html">8 Columns Products</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 p-0">
                                                <img src="{{asset('theme/frontend/assets/images/menu-banner.jpg')}}" alt="Menu banner">
                                            </div>
                                        </div>
                                    </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="product.html" class="sf-with-ul"><i class="sicon-basket"></i>Products</a>
                                    <div class="megamenu megamenu-fixed-width">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <a href="#" class="nolink">Variations 1</a>
                                                <ul class="submenu">
                                                    <li><a href="product.html">Horizontal Thumbs</a></li>
                                                    <li><a href="product-full-width.html">Vertical Thumbnails</a></li>
                                                    <li><a href="product.html">Inner Zoom</a></li>
                                                    <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                                    <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                                </ul>
                                            </div><!-- End .col-lg-4 -->
                                            <div class="col-lg-3">
                                                <a href="#" class="nolink">Variations 2</a>
                                                <ul class="submenu">
                                                    <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                                    <li><a href="product-simple.html">Simple Product</a></li>
                                                    <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                                </ul>
                                            </div><!-- End .col-lg-4 -->
                                            <div class="col-lg-3">
                                                <a href="#" class="nolink">Product Layout Types</a>
                                                <ul class="submenu">
                                                    <li><a href="product.html">Default Layout</a></li>
                                                    <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                                    <li><a href="product-full-width.html">Full Width Layout</a></li>
                                                    <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                                    <li><a href="product-sticky-both.html">Sticky Both Side Info</a></li>
                                                    <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                                </ul>
                                            </div><!-- End .col-lg-4 -->

                                            <div class="col-lg-3 p-0">
                                                <img src="{{asset('theme/frontend/assets/images/menu-bg.png')}}" alt="Menu banner" class="product-promo">
                                            </div><!-- End .col-lg-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul"><i class="sicon-envelope"></i>Pages</a>

                                    <ul>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="#">Checkout</a>
                                            <ul>
                                                <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                                <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                                <li><a href="checkout-review.html">Checkout Review</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Dashboard</a>
                                            <ul>
                                                <li><a href="dashboard.html">Dashboard</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single.html">Blog Post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#" class="login-link">Login</a></li>
                                        <li><a href="forgot-password.html">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="sf-with-ul"><i class="sicon-book-open"></i>Features</a>
                                    <ul>
                                        <li><a href="#">Header Types</a></li>
                                        <li><a href="#">Footer Types</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="sicon-users"></i>About Us</a></li>
                                <li><a href="#"><i class="icon-cat-gift"></i>Special Offer!</a></li>
                                <li><a href="https://1.envato.market/DdLk5" target="_blank"><i class="sicon-star"></i>Buy Porto!<span class="tip tip-hot">Hot</span></a></li>
                            </ul>
                        </nav>
                    </div><!-- End .side-menu-container -->

                    <div class="widget widget-banners px-5 pb-3 text-center">
                        <div class="owl-carousel owl-theme">
                            <div class="banner d-flex flex-column align-items-center">
                                <h3 class="badge-sale bg-primary d-flex flex-column align-items-center justify-content-center text-uppercase"><em class="pt-3 ls-0">Sale</em>Many Item</h3>
                                <h4 class="sale-text font1 text-uppercase m-b-3">45<sup>%</sup><sub>off</sub></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="btn btn-dark btn-md font1">View Sale</a>
                            </div><!-- End .banner -->

                            <div class="banner d-flex flex-column align-items-center">
                                <h3 class="badge-sale bg-primary d-flex flex-column align-items-center justify-content-center text-uppercase"><em class="pt-3 ls-0">Sale</em>Many Item</h3>
                                <h4 class="sale-text font1 text-uppercase m-b-3">45<sup>%</sup><sub>off</sub></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="btn btn-dark btn-md font1">View Sale</a>
                            </div><!-- End .banner -->

                            <div class="banner d-flex flex-column align-items-center">
                                <h3 class="badge-sale bg-primary d-flex flex-column align-items-center justify-content-center text-uppercase"><em class="pt-3 ls-0">Sale</em>Many Item</h3>
                                <h4 class="sale-text font1 text-uppercase m-b-3">45<sup>%</sup><sub>off</sub></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="btn btn-dark btn-md font1">View Sale</a>
                            </div><!-- End .banner -->
                        </div><!-- End .banner-slider -->
                    </div><!-- End .widget -->

                    <div class="widget widget-newsletters bg-gray text-center">
                        <h3 class="widget-title text-uppercase">Subscribe Newsletter</h3>
                        <p class="mb-2">Get all the latest information on Events, Sales and Offers. </p>
                        <form action="#">
                            <div class="form-group position-relative sicon-envolope-letter">
                                <input type="email" class="form-control" name="newsletter-email" placeholder="Email address">
                            </div><!-- Endd .form-group -->
                            <input type="submit" class="btn btn-primary btn-md" value="Subscribe">
                        </form>
                    </div><!-- End .widget -->

                    <div class="widget widget-testimonials">
                        <div class="owl-carousel owl-theme dots-left">
                            <div class="testimonial">
                                <div class="testimonial-owner">
                                    <figure>
                                        <img src="{{asset('theme/frontend/assets/images/clients/client-1.jpg')}}" alt="client">
                                    </figure>

                                    <div>
                                        <h4 class="testimonial-title">john Smith</h4>
                                        <span>CEO &amp; Founder</span>
                                    </div>
                                </div><!-- End .testimonial-owner -->

                                <blockquote class="ml-4 pr-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.</p>
                                </blockquote>
                            </div><!-- End .testimonial -->

                            <div class="testimonial">
                                <div class="testimonial-owner">
                                    <figure>
                                        <img src="{{asset('theme/frontend/assets/images/clients/client-2.jpg')}}" alt="client">
                                    </figure>

                                    <div>
                                        <h4 class="testimonial-title">Dae Smith</h4>
                                        <span>CEO &amp; Founder</span>
                                    </div>
                                </div><!-- End .testimonial-owner -->

                                <blockquote class="ml-4 pr-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.</p>
                                </blockquote>
                            </div><!-- End .testimonial -->

                            <div class="testimonial">
                                <div class="testimonial-owner">
                                    <figure>
                                        <img src="{{asset('theme/frontend/assets/images/clients/client-3.jpg')}}" alt="client">
                                    </figure>

                                    <div>
                                        <h4 class="testimonial-title">John Doe</h4>
                                        <span>CEO &amp; Founder</span>
                                    </div>
                                </div><!-- End .testimonial-owner -->

                                <blockquote class="ml-4 pr-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.</p>
                                </blockquote>
                            </div><!-- End .testimonial -->
                        </div><!-- End .testimonials-slider -->
                    </div><!-- End .widget -->

                    <div class="widget widget-posts post-date-in-media">
                        <div class="owl-carousel owl-theme dots-left dots-m-0" data-owl-options="{
								'margin': 20
							}">
                            <article class="post">
                                <div class="post-media">
                                    <a href="single.html">
                                        <img src="{{asset('theme/frontend/assets/images/blog/home/post-1.jpg')}}" alt="Post">
                                    </a>
                                    <div class="post-date">
                                        <span class="day">29</span>
                                        <span class="month">Jun</span>
                                    </div><!-- End .post-date -->
                                </div><!-- End .post-media -->

                                <div class="post-body">
                                    <h2 class="post-title m-b-2">
                                        <a href="single.html">Fashion Trends</a>
                                    </h2>

                                    <div class="post-content">
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>

                                        <a href="single.html" class="read-more">read more <i class="icon-right-open"></i></a>
                                    </div><!-- End .post-content -->
                                </div><!-- End .post-body -->
                            </article>

                            <article class="post">
                                <div class="post-media">
                                    <a href="single.html">
                                        <img src="{{asset('theme/frontend/assets/images/blog/home/post-2.jpg')}}" alt="Post">
                                    </a>
                                    <div class="post-date">
                                        <span class="day">29</span>
                                        <span class="month">Jun</span>
                                    </div><!-- End .post-date -->
                                </div><!-- End .post-media -->

                                <div class="post-body">
                                    <h2 class="post-title m-b-2">
                                        <a href="single.html">Fashion Trends</a>
                                    </h2>

                                    <div class="post-content">
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>

                                        <a href="single.html" class="read-more">read more <i class="icon-right-open"></i></a>
                                    </div><!-- End .post-content -->
                                </div><!-- End .post-body -->
                            </article>

                            <article class="post">
                                <div class="post-media">
                                    <a href="single.html">
                                        <img src="{{asset('theme/frontend/assets/images/blog/home/post-3.jpg')}}" alt="Post">
                                    </a>
                                    <div class="post-date">
                                        <span class="day">29</span>
                                        <span class="month">Jun</span>
                                    </div><!-- End .post-date -->
                                </div><!-- End .post-media -->

                                <div class="post-body">
                                    <h2 class="post-title m-b-2">
                                        <a href="single.html">Fashion Trends</a>
                                    </h2>

                                    <div class="post-content">
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>

                                        <a href="single.html" class="read-more">read more <i class="icon-right-open"></i></a>
                                    </div><!-- End .post-content -->
                                </div><!-- End .post-body -->
                            </article>
                        </div><!-- End .posts-slider -->
                    </div><!-- End .widget -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </main><!-- End .main -->

    <footer class="footer bg-dark">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
                        <div class="widget">
                            <h4 class="widget-title">About Us</h4>
                            <img src="{{asset('theme/frontend/assets/images/logo-footer.png')}}" alt="Logo" class="m-b-3">
                            <p class="m-b-4 pb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus. Duis nec vestibulum magna, et dapibus lacus.</p>
                            <a href="#" class="read-more text-white">read more...</a>
                        </div><!-- End .widget -->
                    </div><!-- End .col-lg-3 -->

                    <div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
                        <div class="widget mb-2">
                            <h4 class="widget-title mb-1 pb-1">Contact Info</h4>
                            <ul class="contact-info m-b-4">
                                <li>
                                    <span class="contact-info-label">Address:</span>123 Street Name, City, England
                                </li>
                                <li>
                                    <span class="contact-info-label">Phone:</span><a href="tel:">(123) 456-7890</a>
                                </li>
                                <li>
                                    <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
                                </li>
                                <li>
                                    <span class="contact-info-label">Working Days/Hours:</span>
                                    Mon - Sun / 9:00 AM - 8:00 PM
                                </li>
                            </ul>
                            <div class="social-icons">
                                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                            </div><!-- End .social-icons -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-lg-3 -->

                    <div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
                        <div class="widget">
                            <h4 class="widget-title pb-1">Customer Service</h4>

                            <ul class="links">
                                <li><a href="#">Help & FAQs</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">Shipping & Delivery</a></li>
                                <li><a href="#">Orders History</a></li>
                                <li><a href="#">Advanced Search</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">Corporate Sales</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div><!-- End .widget -->
                    </div><!-- End .col-lg-3 -->

                    <div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
                        <div class="widget">
                            <h4 class="widget-title">Popular Tags</h4>

                            <div class="tagcloud">
                                <a href="#">Bag</a>
                                <a href="#">Black</a>
                                <a href="#">Blue</a>
                                <a href="#">Clothes</a>
                                <a href="#">Fashion</a>
                                <a href="#">Hub</a>
                                <a href="#">Jean</a>
                                <a href="#">Shirt</a>
                                <a href="#">Skirt</a>
                                <a href="#">Sports</a>
                                <a href="#">Sweater</a>
                                <a href="#">Winter</a>
                            </div>
                        </div><!-- End .widget -->
                    </div><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .footer-middle -->

        <div class="container">
            <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
                <p class="footer-copyright py-3 pr-4 mb-0">© Porto eCommerce. 2020. All Rights Reserved</p>

                <img src="{{asset('theme/frontend/assets/images/payments.png')}}" alt="payment methods" class="footer-payments py-3">
            </div>
        </div><!-- End .container -->
    </footer><!-- End .footer -->
</div><!-- End .page-wrapper -->

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu mb-3">
                <li class="active"><a href="index.html">Home</a></li>
                <li>
                    <a href="category.html">Categories</a>
                    <ul>
                        <li><a href="category.html">Full Width Banner</a></li>
                        <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                        <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                        <li><a href="category.html">Left Sidebar</a></li>
                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                        <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                        <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                        <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                        <li><a href="#">List Types</a></li>
                        <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                        <li><a href="category.html">3 Columns Products</a></li>
                        <li><a href="category-4col.html">4 Columns Products</a></li>
                        <li><a href="category-5col.html">5 Columns Products</a></li>
                        <li><a href="category-6col.html">6 Columns Products</a></li>
                        <li><a href="category-7col.html">7 Columns Products</a></li>
                        <li><a href="category-8col.html">8 Columns Products</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product.html">Horizontal Thumbs</a></li>
                                <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product.html">Inner Zoom</a></li>
                                <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                <li><a href="product-simple.html">Simple Product</a></li>
                                <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layout Types</a>
                            <ul>
                                <li><a href="product.html">Default Layout</a></li>
                                <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                <li><a href="product-full-width.html">Full Width Layout</a></li>
                                <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                    <ul>
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li>
                            <a href="#">Checkout</a>
                            <ul>
                                <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                <li><a href="checkout-review.html">Checkout Review</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="#" class="login-link">Login</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                    </ul>
                </li>
                <li><a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="single.html">Blog Post</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
                <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
            </ul>

            <ul class="mobile-menu">
                <li><a href="my-account.html">Track Order </a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="category.html">Our Stores</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#">Help &amp; FAQs</a></li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
            <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url{{('theme/frontend/assets/images/newsletter_popup_bg.jpg')}})">
    <div class="newsletter-popup-content">
        <img src="{{asset('theme/frontend/assets/images/logo-black.png')}}" alt="Logo" class="logo-newsletter">
        <h2>BE THE FIRST TO KNOW</h2>
        <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
        <form action="#">
            <div class="input-group">
                <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                <input type="submit" class="btn" value="Go!">
            </div><!-- End .from-group -->
        </form>
        <div class="newsletter-subscribe">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1">
                    Don't show this popup again
                </label>
            </div>
        </div>
    </div><!-- End .newsletter-popup-content -->
</div><!-- End .newsletter-popup -->
<!-- Add Cart Modal -->
<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body add-cart-box text-center">
                <p>You've just added this product to the<br>cart:</p>
                <h4 id="productTitle"></h4>
                <img src="#" id="productImage" width="100" height="100" alt="adding cart image">
                <div class="btn-actions">
                    <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                    <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<!-- Plugins JS File -->
<script src="{{asset('theme/frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('theme/frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('theme/frontend/assets/js/plugins.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('theme/frontend/assets/js/main.min.js')}}"></script>
</body>

</html>
