@extends('frontend.components.layout')
@section('title')
    Login
@endsection
@section('content')
    <div class="row justify-content-center">
    <div class="col-md-6">
<div class="card">
    <div class="card-header">
        <div class="heading">
            <h2 class="title">Login</h2>
            <p>If you have an account with us, please log in.</p>
        </div><!-- End .heading -->
    </div>
    <div class="card-body">

        <form action="{{route('customer.login')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
            <input type="password" class="form-control" name="password" placeholder="Password" required>

            <div class="form-footer">
                <button type="submit" class="btn btn-primary">LOGIN</button>
                <a href="{{route('customer.register.form')}}" class="forget-pass"> Register </a>
                <a href="#" class="forget-pass"> Forgot your password?</a>
            </div><!-- End .form-footer -->
        </form>
    </div>
</div>
    </div>
    </div><!-- End .col-md-6 -->


@endsection
