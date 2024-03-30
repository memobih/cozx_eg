<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-lg-12 col-md-12">
                            <div class="select-option">
                                <div class="container">
                                    <div class="row justify-content-center">

                                        <select wire:model="sort" wire:change="filter2($event.target.value)"
                                                class="select-items col-5" aria-label="Default select example">
                                            <option value="0">Default Sorting</option>
                                            <option value="1">High price</option>
                                            <option value="2">Low price</option>
                                            <option value="3">New in</option>

                                        </select>
                                        <div class="col-1"></div>
                                        <select wire:model="category" wire:change="filter1($event.target.value)"
                                                class="select-items col-5" aria-label="Default select example">
                                            <option value="0">departments</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="product-list col-12">
                    <div class="row ">
                        @foreach($products as $product )
                            @if(!empty($product->prices->first()->price))
                                <div class="col-lg-3 col-sm-4">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img style="width: 350px ; height: 350px"
                                                 src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}"
                                                 alt>
                                            @if(!empty($product->offer->first()->discount))
                                            <div class="sale pp-sale">Sale</div>
                                            @endif
                                            <ul>
                                                <li class="quick-view"><a
                                                        href="{{route('productView.show', ['id'=>$product->id])}}">+
                                                        Quick View</a></li>
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
                                </div>
                            @endif
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

