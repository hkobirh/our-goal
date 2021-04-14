@extends('frontend.components.layout')
@section('title')
    Register
@endsection
@section('content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
<div class="card">
    <div class="card-header">
        <div class="heading">
            <h2 class="title text-info text-center">Create An Account</h2>
            <x-auth-validation-errors></x-auth-validation-errors>
            <p class="text-info"><b>Message:</b> By creating an account with our store, you will be able to
                move through the checkout process faster, store multiple shipping addresses,
                view and track your orders in your account and more.</p>
        </div><!-- End .heading -->
    </div>
    <div class="card-body">
        <form action="{{route('customer.register')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>

            <h2 class="title mb-2 text-info text-center">Login information</h2>
            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
            <input type="text" class="form-control" name="phone" placeholder="01*********" required pattern="01[1|3|4|5|6|7|8|9][0-9]{8}">
            <input type="password" class="form-control" name="password" placeholder="Password">

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="newsletter-signup">
                <label class="custom-control-label" for="newsletter-signup">Sing up our Newsletter</label>
            </div><!-- End .custom-checkbox -->

            <div class="form-footer">
                <button type="submit" class="btn btn-primary btn-sm" style="border-radius: 62px">Create Account</button>
            </div><!-- End .form-footer -->
        </form>
    </div>
</div>
                </div><!-- End .col-md-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-5"></div><!-- margin -->
    </main><!-- End .main -->


@endsection
