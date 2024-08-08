@extends('layouts.show')
@section('content')

    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                @if(!empty($departments->category1))

                <div class="col-lg-4">
                    <div class="single-banner">
                        <a href="{{route('shop.show',['category_id'=>$departments->category1->id])}}"> <img
                                src="{{category1->image}}" alt></a>
                        <div class="inner-text">
                            <h4>{{$departments->category1->name}}</h4>
                        </div>
                    </div>
                </div>
                @endif
                @if(!empty($departments->category3))

                <div class="col-lg-4">
                    <div class="single-banner">
                        <a href="{{route('shop.show',['category_id'=>$departments->category3->id])}}"> <img
                                src="{{\Illuminate\Support\Facades\Storage::url($departments->category3->image)}}" alt></a>
                        <div class="inner-text">
                            <h4>{{$departments->category3->name}}</h4>
                        </div>
                    </div>
                </div>
                @endif
                @if(!empty($departments->category2))

                <div class="col-lg-4">
                    <div class="single-banner">
                        <a href="{{route('shop.show',['category_id'=>$departments->category2->id])}}">
                            <img src="{{\Illuminate\Support\Facades\Storage::url($departments->category2->image)}}" alt>
                        </a>
                        <div class="inner-text">
                            <h4>{{$departments->category2->name}}</h4>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    @if(!empty($departments->category1))

        <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">{{$departments->category1->name}}</li>
                            <li>{{$departments->category2->name}}</li>
                            <li>{{$departments->category3->name}}</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach($departments->category1->products as $product)
                            @if(!empty($product->prices->first()->price))
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img width="100%" height="100%"
                                             src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}" alt>
                                        @if(!empty($product->offer->first()->discount))
                                        <div class="sale">Sale</div>
                                        @endif

                                        <ul>
                                            <li class="quick-view"><a
                                                    href="{{route('productView.show',['id'=>$product->id])}}">Quick
                                                    View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$product->category->name}}</div>
                                        <a href="#">
                                            <h5>{{$product->name}}</h5>
                                        </a>
                                        @if(!empty($product->offer->first()->discount))
                                            <div class="product-price">
                                                {{$product->offer->first()->discount }}EGP
                                                <span> {{$product->prices->first()->price}}</span>
                                            </div>
                                        @else
                                            <div class="product-price">
                                                {{$product->prices->first()->price}}EGP
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large"
                         data-setbg="{{\Illuminate\Support\Facades\Storage::url($departments->category1->image)}}">
                        <h2>{{$departments->category1->name}}</h2>
                        <a href="{{route('shop.show',['category_id'=>$departments->category1->id])}}">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @if(!empty($departments->category2))

        <section class="deal-of-week set-bg spad" data-setbg=""
             style="background-image: url(&quot;../image/banner-1.jpg&quot;);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg"
                         data-setbg="{{\Illuminate\Support\Facades\Storage::url($departments->category2->image)}}"
                         style="background-image: url(&quot;../image/banner-1.jpg&quot;);">
                        <h2>{{$departments->category2->name}}</h2>
                        <a href="{{route('shop.show',['category_id'=>$departments->category2->id])}}">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li>{{$departments->category1->name}}</li>
                            <li class="active">{{$departments->category2->name}}</li>
                            <li>{{$departments->category3->name}}</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach($departments->category2->products as $product)

                            @if(!empty($product->prices->first()->price))
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img width="100%" height="100%"
                                             src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}" alt>
                                        @if(!empty($product->offer->first()->discount))
                                            <div class="sale">Sale</div>
                                        @endif
                                        <ul>
                                            <li class="quick-view"><a
                                                    href="{{route('productView.show',['id'=>$product->id])}}">Quick
                                                    View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$product->category->name}}</div>
                                        <a href="#">
                                            <h5>{{$product->name}}</h5>
                                        </a>
                                        @if(!empty($product->offer->first()->discount))
                                            <div class="product-price">
                                                {{$product->offer->first()->discount }}EGP
                                                <span> {{$product->prices->first()->price}}</span>
                                            </div>
                                        @else
                                            <div class="product-price">
                                                {{$product->prices->first()->price}}EGP
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>
    @endif
    @if(!empty($departments->category3))

        <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li>{{$departments->category1->name}}</li>
                            <li>{{$departments->category2->name}}</li>
                            <li class="active">{{$departments->category3->name}}</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach($departments->category3->products as $product)
                            @if(!empty($product->prices->first()->price))
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img width="100%" height="100%"
                                             src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}" alt>
                                        @if(!empty($product->offer->first()->discount))
                                            <div class="sale">Sale</div>
                                        @endif

                                        <ul>
                                            <li class="quick-view"><a
                                                    href="{{route('productView.show',['id'=>$product->id])}}">Quick
                                                    View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$product->category->name}}</div>
                                        <a href="#">
                                            <h5>{{$product->name}}</h5>
                                        </a>
                                        @if(!empty($product->offer->first()->discount))
                                            <div class="product-price">
                                                {{$product->offer->first()->discount }}EGP
                                                <span> {{$product->prices->first()->price}}</span>
                                            </div>
                                        @else
                                            <div class="product-price">
                                                {{$product->prices->first()->price}}EGP
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large"
                         data-setbg="{{\Illuminate\Support\Facades\Storage::url($departments->category3->image)}}">
                        <h2>{{$departments->category3->name}}</h2>
                        <a href="{{route('shop.show',['category_id'=>$departments->category3->id])}}">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection('content')
