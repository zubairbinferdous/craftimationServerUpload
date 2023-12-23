@extends('fontend.master')
@section('master')
    {{-- <h1>cash out</h1>
    {{ $data['shipping_area'] }} --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="total-price border m200">

                        @if ($data['shipping_area'] == 'ID')
                            <p>total price : <span> {{ $cartTotal }} </span></p>
                            <p>shipping price : <span> 50 </span></p>
                            <p>sub total price : <span> {{ $cartTotal + 50 }} </span></p>
                        @else
                            <p>total price : <span> {{ $cartTotal }} </span></p>
                            <p>shipping price : <span> 100 </span></p>
                            <p>sub total price : <span> {{ $cartTotal + 100 }} </span></p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <form action="{{ route('cash.order') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <label for="card-element">
                            <input type="hidden" name="name" value="{{ $data['shipping_name'] }}">
                            <input type="hidden" name="email" value="{{ $data['shipping_email'] }}">
                            <input type="hidden" name="phone" value="{{ $data['shipping_number'] }}">
                            <input type="hidden" name="area" value="{{ $data['shipping_area'] }}">
                            <input type="hidden" name="address" value="{{ $data['shipping_adress'] }}">
                        </label>

                        <!-- Used to display form errors. -->

                    </div>
                    <br>
                    <button class="button3">confirm order</button>
                </form>
            </div>
        </div>
    </div>
@endsection
