@extends('layouts.show')
@section('content')
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
                        <a href="{{route('shop.show',['category_id'=>0])}}">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                        <div>

                        </div>
                    </div>
                    @foreach($cartItems as $item )
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img
                                        src="{{\Illuminate\Support\Facades\Storage::url($item->model->images->where('color_id',$item->options[1])->first()->image)}}"
                                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">{{$item->name}}</p>
                                    <p><span class="text-muted">Size: </span>{{$item->options[2]}} <span class="text-muted">Color: </span>{{$item->options[3]}}</p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <input type="number"    name="quantity" onchange="updateCart(this)" data-rowid="{{$item->rowId}}" value="{{$item->qty}}" class="form-control">
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0">{{$item->subtotal()}}</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <a  onclick="removeitem('{{$item->rowId}}')" class="text-danger"><i class="fa fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @if($cartItems->count()>0)
                    <form method="post" action="{{route('cart.coupon')}}">
                        @csrf
                    <div class="card mb-4">
                        <div class="card-body discount p-4 " >
                            <div class="form-outline flex-fill">
                                <input type="text" id="form1"  name="coupon" @if(!empty(session('coupon')))value="{{session('coupon')}}" @endif class="form-control form-control-lg" />
                                <label class="form-label" for="form1">Discound code</label>
                            </div>
                            <input type="submit"  value="Apply" class="apply  form-outline  btn btn-outline-warning ">
                        </div>
                    </form>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                          <div class="col-6">subtotal</div>
                                <div>{{\Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->subtotal()}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">Shipping</div>
                                <div>{{$shipping}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">Discount</div>
                                @if(!empty(session('discount')))    <div>%{{session('discount')}}</div>
                                @else <div>%0</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">total</div>
                                 <div>{{(float)str_replace(',', '', \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->subtotal())- (($discount / 100)*(float)str_replace(',', '', Cart::instance('cart')->subtotal()))+$shipping
}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a   href="{{route('checkout.index')}}" class="btn btn-warning btn-block btn-lg">Proceed to Pay</a>
                        </div>
                    </div>
                    @else
                        <div class="card">
                        <div class="card-body">
                            <a   href="{{route('shop.show',['category_id'=>0])}}" class="btn btn-warning btn-block btn-lg">Continue shopping</a>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

    <form id="updateCart" method="post" action="{{route('cart.update')}}">
        @csrf
        <input type="hidden" id="rowId" name="rowId">
        <input type="hidden" id="quantity" name="quantity">
    </form>


@endsection
@section('script')
    <script>
    function updateCart(qty)
    {
        $('#rowId').val( $(qty).data('rowid') );
        $('#quantity').val($(qty).val());
        $('#updateCart').submit();
    }

</script>

@endsection
@section('style')
    <style>
.apply{
    margin-left: 1rem;
    height: 48px;
}
.discount { display :flex ; flex-direction: row;}
@media (max-width: 765px) {
   .discount { display: flex ; flex-direction: column;}
    .apply { margin-left: 0 !important; width: 100% !important; }
}
    </style>
@endsection
