<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jan 2021 15:43:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') || An unique business site.</title>

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
        @include('frontend.components.header')
    <main class="main">
        @yield('content')
    </main><!-- End .main -->
         @include('frontend.components.footer')
</div><!-- End .page-wrapper -->

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->
@include('frontend.components.mobile-menu')
<div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url("{{('theme/frontend/assets/images/newsletter_popup_bg.jpg')}}")>
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
