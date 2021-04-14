
<!--sidebar-wrapper-->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="{{ asset('theme/backend/assets/images/logo-icon.png') }}" class="logo-icon-2" alt=""/>
        </div>
        <div>
            <h4 class="logo-text">Syndash</h4>
        </div>
        <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('staff.dashboard') }}">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('staff.brand.index') }}">
                <div class="parent-icon icon-color-1"><i class="bx bx-list-ol"></i></div>
                <div class="menu-title">Brands</div>
            </a>
        </li>

        <li>
            <a href="{{ route('staff.category.index') }}">
                <div class="parent-icon icon-color-1"><i class="bx bx-list-ol"></i></div>
                <div class="menu-title">Categories</div>
            </a>
        </li>
        <li>
            <a href="{{ route('staff.product.index') }}">
                <div class="parent-icon icon-color-1"><i class="bx bx-list-ol"></i></div>
                <div class="menu-title">Products</div>
            </a>
        </li>
        <li>
            <a href="{{ route('staff.orders.index') }}">
                <div class="parent-icon icon-color-1"><i class="bx bx-list-ol"></i></div>
                <div class="menu-title">Orders</div>
            </a>
        </li>

{{--        <li>--}}
{{--            <a href="#" class="has-arrow">--}}
{{--                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i></div>--}}
{{--                <div class="menu-title">Items</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="{{route('staff.brand.create')}}"><i class="bx bx-right-arrow-alt"></i>Add Brand</a></li>--}}
{{--                <li><a href="#"><i class="bx bx-right-arrow-alt"></i>Manage Brands</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar-wrapper-->
