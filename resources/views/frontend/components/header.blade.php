

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
                    <a href="#" class="pl-0"><img src="{{asset('theme/frontend/assets/images/flags/en.png')}}"
                                                  alt="England flag">ENG</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#"><img src="{{asset('theme/frontend/assets/images/flags/en.png')}}"
                                                 alt="England flag">ENG</a></li>
                            <li><a href="#"><img src="{{asset('theme/frontend/assets/images/flags/fr.png')}}"
                                                 alt="France flag">FRA</a></li>
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
                            <li><a href="">Track Order </a></li>
                            <li><a href="l">About</a></li>
                            <li><a href="">Our Stores</a></li>
                            @if(Session::get('customer_id'))
                                <li><a href="{{route('customer.dashboard')}}">My Dashboard</a></li>
                                <li><a href="{{route('customer.logout')}}">Logout</a></li>
                            @else
                                <li><a href="{{route('customer.login.form')}}">Login</a></li>
                                <li><a href="{{route('customer.register.form')}}">Register</a></li>
                            @endif
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
                <a href="{{route('index')}}" class="logo">
                    <img src="{{asset('theme/frontend/assets/images/1.png')}}" alt="Porto Logo">
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
{{--                                    <option value="0">__ROOT__</option>
                                    {!! categories_select_data($categories,2) !!}--}}
                                </select>
                            </div><!-- End .select-custom -->
                            <button class="btn p-0 icon-search-3" type="submit"></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->

                <div class="header-contact d-none d-lg-flex align-items-center pr-xl-5 mr-3 ml-xl-5">
                    <i class="icon-phone-2"></i>
                    <h6 class="pt-1 line-height-1">Call us now<a href="tel:#" class="d-block text-dark ls-10 pt-1">01722-879377</a></h6>
                </div><!-- End .header-contact -->

                <a href="login.html" class="header-icon login-link"><i class="icon-user-2"></i></a>

                <a href="#" class="header-icon"><i class="icon-wishlist-2"></i></a>

                <div class="dropdown cart-dropdown" id="get_cart_data">
                 @include('frontend.cart.get_cart_data')
                </div><!-- End .dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
    @yield('stiky_head')
</header><!-- End .header -->
