<!DOCTYPE html>
<html lang="en">
<?php

$categories = \App\Models\Category::all();
$cartItems = \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->content();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cozx</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/{{asset('dist/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="/public/{{asset('dist/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="/public/{{asset('dist/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="/public/{{asset('dist/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="/public/{{asset('dist/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="/public/{{asset('dist/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="/public/{{asset('dist/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="/public/{{asset('dist/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="/public/dist/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @yield('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<script nonce="1a7b3a82-6314-4f94-857b-aef2ab30b059">
    (function (w, d) {
        !function (j, k, l, m) {
            j[l] = j[l] || {};
            j[l].executed = [];
            j.zaraz = {
                deferred: [],
                listeners: []
            };
            j.zaraz.q = [];
            j.zaraz._f = function (n) {
                return async function () {
                    var o = Array.prototype.slice.call(arguments);
                    j.zaraz.q.push({
                        m: n,
                        a: o
                    })
                }
            };
            for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
            j.zaraz.init = () => {
                var q = k.getElementsByTagName(m)[0],
                    r = k.createElement(m),
                    s = k.getElementsByTagName("title")[0];
                s && (j[l].t = k.getElementsByTagName("title")[0].text);
                j[l].x = Math.random();
                j[l].w = j.screen.width;
                j[l].h = j.screen.height;
                j[l].j = j.innerHeight;
                j[l].e = j.innerWidth;
                j[l].l = j.location.href;
                j[l].r = k.referrer;
                j[l].k = j.screen.colorDepth;
                j[l].n = k.characterSet;
                j[l].o = (new Date).getTimezoneOffset();
                if (j.dataLayer)
                    for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                        ...x[1],
                        ...y[1]
                    })), {}))) zaraz.set(w[0], w[1], {
                        scope: "page"
                    });
                j[l].q = [];
                for (; j.zaraz.q.length;) {
                    const z = j.zaraz.q.shift();
                    j[l].q.push(z)
                }
                r.defer = !0;
                for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith(
                    "_zaraz_"))).forEach((B => {
                    try {
                        j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                    } catch {
                        j[l]["z_" + B.slice(7)] = A.getItem(B)
                    }
                }));
                r.referrerPolicy = "origin";
                r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                q.parentNode.insertBefore(r, q)
            };
            ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded",
                zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
</script>

<body>
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                       data-cfemail="83ebe6efefecade0ecefecf1efeae1c3e4eee2eaefade0ecee">[cozx.eg@gmail.com]</a>
                </div>
                <div class="phone-service">
                    <i class="fa fa-phone"></i> 01012557360
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
                    <a href="{{ route('user.show',['user'=>auth()->user()->id])}}" class="login-panel"><i
                            class="fa fa-user"></i></a>

                @endguest

                <div class="top-social">
                    <a href="https://www.instagram.com/cozx_eg/?igsh=MXVwODNsdHAzYW85ZA%3D%3D"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                </div>
                <div class="col-lg-7 col-md-7">
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="cart-icon">
                            <a href="{{route('cart.index')}}">
                                <i class="icon_bag_alt"></i>
                                <span>{{Cart::instance('cart')->content()->count()}}</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                        @foreach($cartItems as $item)
                                            <tr>
                                                <td class="si-pic"><img
                                                        src="{{\Illuminate\Support\Facades\Storage::url($item->model->images->where('color_id',$item->options[1])->first()->image)}}"
                                                        alt></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>{{$item->price}}</p>
                                                        <h6>{{$item->model->name}}</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <a onclick="removeitem('{{$item->rowId}}')" class="text-danger">
                                                        <i class="ti-close"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>{{\Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->subtotal()}}</h5>
                                </div>
                                <div class="select-button">
                                    <a href="{{route('cart.index')}}" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="{{route('checkout.index')}}" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">{{\Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->subtotal()}}
                            EGP
                        </li>
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
                            <li><a href="{{route('shop.show',['category_id'=>$category->id])}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    <li id="shop" class=""><a href="{{route('shop.show',['category_id'=>0])}}">Shop</a></li>
                    <li><a href="#">Collection</a>
                        <ul class="dropdown">
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{route('shop.show',['category_id'=>$category->id])}}">{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="https://www.instagram.com/cozx_eg/?igsh=MXVwODNsdHAzYW85ZA%3D%3D">Blog</a></li>
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
@yield('content')
<form id="removeItem" method="post" action="{{route('cart.remove')}}">
    @csrf
    @method('delete')
    <input type="hidden" id="rowId_D" name="rowId">
</form>
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="#"><img src="img/footer-logo.png" alt></a>
                    </div>
                    <ul>
                        <li>Address: Qena</li>
                        <li>Phone: 01012557360</li>
                        <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                      data-cfemail="dcb4b9b0b0b3f2bfb3b0b3aeb0b5be9cbbb1bdb5b0f2bfb3b1">[cozx.eg@gmail.com]</a>
                        </li>
                    </ul>
                    <div class="footer-social">
                        <a href="https://www.instagram.com/cozx_eg/?igsh=MXVwODNsdHAzYW85ZA%3D%3D"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="https://www.instagram.com/cozx_eg/?igsh=MXVwODNsdHAzYW85ZA%3D%3D">About Us</a></li>
                        <li><a href="https://www.instagram.com/cozx_eg/?igsh=MXVwODNsdHAzYW85ZA%3D%3D">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="{{route('checkout.index')}}">Checkout</a></li>

                        <li><a href="{{route('cart.index')}}">Shopping Cart</a></li>
                        <li><a href="{{route('shop.show',['category_id'=>0])}}">Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-pic">
                        <img src="img/payment-method.png" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
@yield('script')
<script src="/public/{{asset('dist/js/jquery-3.3.1.min.js')}}"></script>
<script src="/public/{{asset('dist/js/bootstrap.min.js')}}"></script>
<script src="/public/{{asset('dist/js/jquery-ui.min.js')}}"></script>
<script src="/public/{{asset('dist/js/jquery.countdown.min.js')}}"></script>
<script src="/public/{{asset('dist/js/jquery.nice-select.min.js')}}"></script>
<script src="/public/{{asset('dist/js/jquery.zoom.min.js')}}"></script>
<script src="/public/{{asset('dist/js/jquery.dd.min.js')}}"></script>
<script src="/public/{{asset('dist/js/jquery.slicknav.js')}}"></script>
<script src="/public/{{asset('dist/js/owl.carousel.min.js')}}"></script>
<script src="/public/{{asset('dist/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function removeitem(rowId) {
        $('#rowId_D').val(rowId);
        $('#removeItem').submit();
    }
</script>
@livewireScripts
