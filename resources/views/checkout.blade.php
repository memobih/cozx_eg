@extends('layouts.show')
@section('content')
<section class="checkout-section spad">
    <div class="container">
        <form action="{{route('checkout.store')}}" method="post" class="checkout-form">
            @csrf
            <div class="row">
                <div class="col-12 justify-content-center">
                    <div class="place-order justify-content-center">
                        <div class="row justify-content-center">
                        <div class="justify-content-center"><h4>Your Order</h4></div>
                        </div>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Product <span>{{Cart::instance('cart')->content()->count()}}</span></li>
                                <li class="fw-normal">Subtotal <span>{{Cart::instance('cart')->subtotal()}}</span></li>
                                <li class="fw-normal">Delivery <span>{{$shipping}}</span></li>
                                <li class="fw-normal">discount <span>%{{$discount}}</span></li>
                                <li class="cart-total">total<span>{{(float) str_replace(',', '', Cart::instance('cart')->subtotal())-(($discount/100)*str_replace(',', '', Cart::instance('cart')->subtotal()))+$shipping}}</span></li>
                            </ul>
                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


@endsection

