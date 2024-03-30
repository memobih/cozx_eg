<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="83ebe6efefecade0ecefecf1efeae1c3e4eee2eaefade0ecee">[email&#160;protected]</a>
                </div>
                <div class="phone-service">
                    <i class="fa fa-phone"></i>
                </div>
            </div>
            <div class="ht-right">

                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="login-panel">Login</a>
                        <a href="{{ route('login') }}" class="login-panel"><i class="fa fa-user"></i></a>
                    @endif
                @else

                    <a class="login-panel" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="{{ route('user.show',['user'=>auth()->user()->id])}}" class="login-panel"><i class="fa fa-user"></i></a>

                @endguest

















                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value="yt" data-image="../img/flag-1.jpg" data-imagecss="flag yt" data-title="English">English</option>
                        <option value="yu" data-image="../img/flag-2.jpg" data-imagecss="flag yu" data-title="Bangladesh">German </option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="./welcome.blade.php">
                            <img id='cozxlogo' height="" width="" src="" alt=" logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">All Categories</button>
                        <div class="input-group">
                            <input type="text" placeholder="What do you need?">
                            <button type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="{{route('cart.index')}}">
                                <i class="icon_bag_alt"></i>
                                <span>{{Cart::instance('cart')->content()->count()}}</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                        {{--                                        @foreach($cartItems as $item)--}}
                                        {{--                                        <tr>--}}
                                        {{--                                            <td class="si-pic"><img src="{{\Illuminate\Support\Facades\Storage::url($item->model->images->where('color_id',$item->options[1])->first()->image)}}" alt></td>--}}
                                        {{--                                            <td class="si-text">--}}
                                        {{--                                                <div class="product-selected">--}}
                                        {{--                                                    <p>{{$item->price}}</p>--}}
                                        {{--                                                    <h6>{{$item->model->name}}</h6>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </td>--}}
                                        {{--                                            <td class="si-close">--}}
                                        {{--                                                <i class="ti-close"></i>--}}
                                        {{--                                            </td>--}}
                                        {{--                                        </tr>--}}
                                        {{--                                        @endforeach--}}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>$120.00</h5>
                                </div>
                                <div class="select-button">
                                    <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">$150.00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>All departments</span>
                    <ul class="depart-hover">
                        @foreach($categories as $category)
                            <li><a href="">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class=""><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('shop.show')}}">Shop</a></li>
                    <li><a href="#">Collection</a>
                        <ul class="dropdown">
                            @foreach($categories as $category)
                                <li><a href="">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="">Blog</a></li>
                    <li><a href="{{route('track.index')}}">Orders</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="dropdown">
                            <li><a href="{{route('cart.index')}}">Shopping Cart</a></li>
                            <li><a href="{{route('checkout.index')}}">Checkout</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
