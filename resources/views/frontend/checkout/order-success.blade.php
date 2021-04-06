
@extends('frontend.components.layout')
@section('title')
    Order success
@endsection
@section('menu')
    @include('frontend.components.stiky_menu')
@endsection

@section('content')
    <div class="container">
        <p class="text-success text-center">Your order id {{session('order_id')}}</p>
        <h1 class="text-success text-center">Your order is submitted.</h1>
    </div>
@endsection
