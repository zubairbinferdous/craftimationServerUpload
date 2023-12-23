@extends('fontend.master')
@section('master')
    <div class="container-fluid ">
        <div class="row bg-img trend-position" style="background-image: url('{{ asset('fontend/image/banner/cta.jpg') }}'">
            <div class="col-md-12">
                <div class="data-area-two">
                    <div class="data-twooo">
                        <h1>cart area</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="cart_data_area">
                <h4>this is your cart</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <table class="table border">
                    <thead>
                        <tr>
                            <th scope="col">product image</th>
                            <th scope="col">product name</th>
                            <th scope="col">Unite Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>

                    <tbody id="cartPage">


                    </tbody>

                </table>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="total-price border">
                        <p>total price : <span> {{ Cart::total() }} </span></p>
                        <a href="{{ route('checkout') }}" class="button3">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
