<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jan 2021 15:43:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') || An unique business site.</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('theme/frontend/assets/images/icons/favicon.ico')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('theme/frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/frontend/assets/css/toastr.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('theme/frontend/assets/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('theme/frontend/assets/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('theme/frontend/assets/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
</head>
<body>
<div class="page-wrapper">
    @include('frontend.components.header')
    <main class="main">
        @yield('menu')
        @yield('content')
    </main><!-- End .main -->
    @include('frontend.components.footer')
</div><!-- End .page-wrapper -->

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->
@include('frontend.components.mobile-menu')
<!-- Add Cart Modal -->
<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body add-cart-box text-center">
                <p>You've just added this product to the<br>cart:</p>
                <h4 id="productTitle"></h4>
                <img src="#" id="productImage" width="100" height="100" alt="adding cart image">
                <div class="btn-actions">
                    <a href="cart.html">
                        <button class="btn-primary">Go to cart page</button>
                    </a>
                    <a href="#">
                        <button class="btn-primary" data-dismiss="modal">Continue</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="productQuickViewData" class="product-single-container product-single-default product-quick-view">


            </div>
        </div>
    </div>
</div>

<!-- Plugins JS File -->
<script src="{{asset('theme/frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('theme/frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('theme/frontend/assets/js/plugins.min.js')}}"></script>
<script src="{{asset('theme/frontend/assets/js/toastr.min.js')}}"></script>
<script src="{{asset('theme/frontend/assets/js/custom.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('theme/frontend/assets/js/main.min.js')}}"></script>
</body>

</html>
