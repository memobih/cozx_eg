<div class="hero mb-md-5">
    <div class="row" style="  width: 100%;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-around;">
        <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12">
            <div class="slider mt-3">
                <div class="product">
                    @foreach($images as $image )
                        <img src="{{$image->image}}" alt=""
                             onclick="clickme(this)">
                    @endforeach
                </div>
                <div class="preview">
                     @if(!empty(($images->first()->image)))
                    <img src="{{$images->first()->image}}" id="imagebox"
                         alt="">
                         @endif
                </div>
            </div>

        </div>

        <div class="col-xl-5 col-lg-5 col-md-4 col-sm-12 p-0">
            <form action="{{route('cart.store')}}" method="post">
                @csrf
                <div class="content">
                    <div class="s-text16"><h4>{{$product->name}}</h4></div>
                    @if(!empty($product->offer->where('color_id' , $color_id)->first()->discount))
                        <div class="product-price">
                            {{$product->offer->where('color_id' , $color_id)->first()->discount}}EGP
                            <span> {{$product->prices->first()->price}}</span>
                        </div>
                    @else
                        <div class="product-price">
                            {{$product->prices->first()->price}}EGP
                        </div>
                    @endif
                    <div class="select-size mb-5">
                        <p class="title">Select Size @error('size_id')
                            @if(!empty($message))
                                <span style="color: red">select the size</span>
                            @endif
                            @enderror</p>

                        <div class="size row pl-3">
                            @foreach($details as $detail)
                                @if($detail->quantity<=0)
                                    <div class="sizes col-2 p-0 m-0">
                                        <div class="product-price">
                                    <label style="opacity: .6" for="{{$detail->size->name}}">{{$detail->size->name}}</label>
                                        </div>
                                    </div>
                                    @else
                                <div class="sizes col-2 p-0 m-0">
                                    <input type="radio" id="{{$detail->size->name}}" name="size_id"
                                           value="{{$detail->size_id}}">
                                    <label for="{{$detail->size->name}}">{{$detail->size->name}}</label>
                                </div>
                                @endif
                            @endforeach

                        </div>
                        <p class="title">Select color</p>
                        <div class="color row pl-3">
                            @foreach($colors as $color)
                                @if($color_id==$color->color_id)
                                    <div class="product col-2 p-0 ">
                                        <input wire:click="change_color({{$color->color_id}})" type="radio"
                                               id="{{$color->color_id}}" name="color_id" checked
                                               value="{{$color->color_id}}">
                                        <label for="{{$color->color_id}}">
                                            @if(!empty( \App\Models\ProductImage::get()->first()->where('color_id',$color->color_id)->where('product_code',$product->code)->first()->image ))
                                            <img style="opacity: 1" width="60px" height="30px"

                                                                               src="{{\App\Models\ProductImage::get()->first()->where('color_id',$color->color_id)->where('product_code',$product->code)->first()->image}}"></label>
                                        @endif
                                    </div>
                                    @elseif(!empty( \App\Models\ProductImage::get()->first()->where('color_id',$color->color_id)->where('product_code',$product->code)->first()->image ))
                                    <div class="product col-2 p-0">
                                        <input wire:click="change_color({{$color->color_id}})" type="radio"
                                               id="{{$color->color_id}}" name="color_id" value="{{$color->color_id}}">
                                        <label for="{{$color->color_id}}"><img width="60px" height="30px"
                                                                               src="{{ \App\Models\ProductImage::get()->first()->where('color_id',$color->color_id)->where('product_code',$product->code)->first()->image}}"></label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                            <p class="title">Description :</p>
                            <p>
                            <h6>{{$product->description}}</h6>
                            </p>
                    </div>
                    <div>
                    </div>
                    <div class="col-10">
                        <input type="submit" class="btn  btn-block mb-4" style="background: orange" value="Add to cart">
                    </div>
                </div>
                <input type="hidden" name="id" value="{{$product->id}}">
            </form>

        </div>
    </div>

</div>
