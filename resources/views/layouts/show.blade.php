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
     <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @yield('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
    <style>
        /*------------------------------------------------------------------
[Table of contents]

1.  Template default CSS
	1.1	Variables
	1.2	Mixins
	1.3	Flexbox
	1.4	Reset
2.  Helper Css
3.  Header Section
4.  Hero Section
5.  Banner Section
6.  Deal Of The Week
7.  Latest Blog
8.  Logo Carousel
9.  Contact
10.  Footer

-------------------------------------------------------------------*/

/*----------------------------------------*/
/* Template default CSS
/*----------------------------------------*/

html,
body {
    height: 100%;
    font-family: "Muli", sans-serif;
    -webkit-font-smoothing: antialiased;
    font-smoothing: antialiased;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0;
    color: #111111;
    font-weight: 400;
    font-family: "Muli", sans-serif;
}

h1 {
    font-size: 70px;
}

h2 {
    font-size: 36px;
}

h3 {
    font-size: 30px;
}

h4 {
    font-size: 24px;
}

h5 {
    font-size: 18px;
}

h6 {
    font-size: 16px;
}

p {
    font-size: 16px;
    font-family: "Muli", sans-serif;
    color: #636363;
    font-weight: 400;
    line-height: 26px;
    margin: 0 0 15px 0;
}

img {
    max-width: 100%;
}

input:focus,
select:focus,
button:focus,
textarea:focus {
    outline: none;
}

a:hover,
a:focus {
    text-decoration: none;
    outline: none;
    color: #fff;
}

ul,
ol {
    padding: 0;
    margin: 0;
}

/*---------------------
  Helper CSS
-----------------------*/

.section-title {
    margin-bottom: 40px;
    text-align: center;
}

.section-title .product-price {
    font-size: 24px;
    font-weight: 700;
    color: #e7ab3c;
}

.section-title .product-price span {
    font-size: 16px;
    font-weight: 400;
    color: #636363;
}

.section-title h2 {
    color: #252525;
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 38px;
    position: relative;
}

.section-title h2:before {
    position: absolute;
    left: 0;
    right: 0;
    bottom: -14px;
    width: 80px;
    height: 3px;
    background: #5f5c57;
    content: "";
    margin: 0 auto;
}

.section-title p {
    color: #6e6e6e;
}

.set-bg {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top center;
}

.spad {
    padding-top: 100px;
    padding-bottom: 100px;
}

/* buttons */

.primary-btn {
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
    padding: 12px 30px;
    color: #ffffff;
    background: #e7ab3c;
    text-transform: uppercase;
}

.site-btn {
    color: #ffffff;
    background: #e7ab3c;
    border: 1px solid #e7ab3c;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 13px 45px 11px;
    cursor: pointer;
}

/* Preloder */

#preloder {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 999999;
    background: #000;
}

.loader {
    width: 40px;
    height: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    border-radius: 60px;
    animation: loader  0.6s linear infinite;
    -webkit-animation: loader 0.6s linear infinite;
}

@keyframes loader {
0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        border: 4px solid #f44336;
        border-left-color: transparent;
}
50%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        border: 4px solid #673ab7;
        border-left-color: transpare;
}
100%{
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        border: 4px solid #f44336;
        border-left-color: transparent;
}

}

/*---------------------
  Header
-----------------------*/

.ht-right .lan-selector {
    max-width: 142px;
    cursor: pointer;
    display: inline-block;
    position: relative;
}

.ht-right .lan-selector .ddcommon {
    max-width: 142px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline: none;
    cursor: pointer;
    padding: 0 20px;
}

.ht-right .lan-selector .ddcommon .ddTitle .ddTitleText img {
    padding-right: 5px;
}

.ht-right .lan-selector .ddcommon .ddTitle .ddTitleText span {
    font-size: 14px;
    color: #252525;
}

.ht-right .lan-selector .ddcommon .ddTitle .ddArrow:before {
    content: "3";
    font-family: "ElegantIcons";
    font-size: 14px;
    color: #636363;
    float: right;
    position: relative;
    right: 0;
    line-height: 26px;
}

.ht-right .lan-selector .ddcommon .ddChild {
    background: #fff;
    max-width: 142px;
    width: 100%;
    position: relative;
    left: 0;
}

.ht-right .lan-selector .ddcommon .ddChild ul {
    width: 100%;
    max-width: 142px;
}

.ht-right .lan-selector .ddcommon .ddChild ul li {
    line-height: 23px;
    padding: 0px 10px;
    list-style: none;
}

.ht-right .lan-selector .ddcommon .ddChild ul li img {
    padding-right: 10px;
}

.ht-right .lan-selector .ddcommon .ddChild ul li span {
    font-size: 13px;
    color: #000;
    letter-spacing: 0.325px;
}

.header-top {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-bottom: 1px solid #e5e5e5;
}

.header-top .ht-left {
    float: left;
}

.header-top .ht-left .mail-service {
    font-size: 16px;
    color: #252525;
    float: left;
    border-right: 1px solid #E5E5E5;
    padding-top: 15px;
    padding-bottom: 15px;
    padding-right: 20px;
}

.header-top .ht-left .mail-service i {
    margin-right: 5px;
}

.header-top .ht-left .phone-service {
    float: right;
    font-size: 14px;
    color: #252525;
    line-height: 27px;
    padding-top: 15px;
    padding-bottom: 12px;
    padding-left: 20px;
}

.header-top .ht-left .phone-service i {
    margin-right: 5px;
}

.header-top .ht-right {
    float: right;
}

.header-top .ht-right .login-panel {
    float: right;
    font-size: 14px;
    color: #252525;
    display: inline-block;
    padding-left: 20px;
    border-left: 1px solid #e5e5e5;
    padding-top: 18px;
    padding-bottom: 15px;
}

.header-top .ht-right .login-panel i {
    margin-right: 8px;
}

.header-top .ht-right .lan-selector {
    float: right;
    margin-top: 15px;
    margin-bottom: 13px;
}

.header-top .ht-right .top-social {
    float: right;
    padding-right: 20px;
    padding-top: 15px;
    padding-bottom: 15px;
    border-right: 1px solid #e5e5e5;
}

.header-top .ht-right .top-social a {
    color: #252525;
    font-size: 14px;
    display: inline-block;
    margin-left: 15px;
}

.inner-header {
}

.inner-header .logo {
    padding: 12px 0;
}

.inner-header .logo a {
    display: inline-block;
}

.inner-header .advanced-search {
    height: 50px;
    border: 1px solid #ebebeb;
}

.inner-header .advanced-search .category-btn {
    max-width: 30%;
    float: left;
    background: transparent;
    border: none;
    padding-left: 23px;
    padding-top: 11px;
    padding-bottom: 13px;
    padding-right: 60px;
    font-size: 16px;
    color: #252525;
    position: relative;
}

.inner-header .advanced-search .category-btn:before {
    position: absolute;
    right: 0;
    top: 14px;
    width: 1px;
    height: 20px;
    background: #e5e5e5;
    content: "";
}

.inner-header .advanced-search .category-btn:after {
    position: absolute;
    right: 11px;
    top: 10px;
    content: "3";
    font-family: "ElegantIcons";
    font-size: 16px;
    color: #b2b2b2;
}

.inner-header .advanced-search .input-group {
    max-width: 70%;
    height: 100%;
}

.inner-header .advanced-search .input-group input {
    width: 100%;
    height: 100%;
    border: none;
    font-size: 16px;
    color: #d1d1d1;
    padding-left: 20px;
}

.inner-header .advanced-search .input-group button {
    font-size: 16px;
    color: #ffffff;
    position: absolute;
    right: -3px;
    top: -1px;
    border: 1px solid #e7ab3c;
    background: #e7ab3c;
    padding: 12px 16px 12px;
    cursor: pointer;
}

.inner-header .nav-right {
    padding: 10px 0;
}

.inner-header .nav-right li {
    list-style: none;
    display: inline-block;
    font-size: 20px;
    margin-left: 15px;
}

.inner-header .nav-right li.heart-icon a {
    color: #252525;
    position: relative;
    display: inline-block;
}

.inner-header .nav-right li.heart-icon a span {
    position: absolute;
    right: -8px;
    top: -1px;
    height: 15px;
    width: 15px;
    background: #e7ab3c;
    color: #ffffff;
    border-radius: 50%;
    font-size: 11px;
    font-weight: 700;
    text-align: center;
    line-height: 15px;
}

.inner-header .nav-right li.cart-icon {
    position: relative;
}

.inner-header .nav-right li.cart-icon:hover .cart-hover {
    opacity: 1;
    visibility: visible;
    top: 60px;
}

.inner-header .nav-right li.cart-icon a {
    color: #252525;
    position: relative;
    display: inline-block;
}

.inner-header .nav-right li.cart-icon a span {
    position: absolute;
    right: -8px;
    top: -1px;
    height: 15px;
    width: 15px;
    background: #e7ab3c;
    color: #ffffff;
    border-radius: 50%;
    font-size: 11px;
    font-weight: 700;
    text-align: center;
    line-height: 15px;
}

.inner-header .nav-right li.cart-icon .cart-hover {
    position: absolute;
    right: -70px;
    top: 100px;
    width: 350px;
    background: #ffffff;
    z-index: 99;
    text-align: left;
    padding: 30px;
    opacity: 0;
    visibility: hidden;
    -webkit-box-shadow: 0 13px 32px rgba(51, 51, 51, 0.1);
    box-shadow: 0 13px 32px rgba(51, 51, 51, 0.1);
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-items table {
    width: 100%;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-items table tr td {
    padding-bottom: 20px;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-items table tr td.si-pic img {
    border: 1px solid #ebebeb;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-items table tr td.si-text {
    padding-left: 18px;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-items table tr td.si-text .product-selected p {
    color: #e7ab3c;
    line-height: 30px;
    margin-bottom: 7px;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-items table tr td.si-text .product-selected h6 {
    color: #232530;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-items table tr td.si-close {
    color: #252525;
    font-size: 16px;
    cursor: pointer;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-total {
    overflow: hidden;
    border-top: 1px solid #e5e5e5;
    padding-top: 26px;
    margin-bottom: 30px;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-total span {
    font-size: 14px;
    color: #e7ab3c;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    float: left;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-total h5 {
    color: #e7ab3c;
    float: right;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-button .view-card {
    font-size: 12px;
    letter-spacing: 2px;
    display: block;
    text-align: center;
    background: #191919;
    color: #ffffff;
    padding: 15px 30px 12px;
    margin-bottom: 10px;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-button .checkout-btn {
    font-size: 12px;
    letter-spacing: 2px;
    display: block;
    text-align: center;
    color: #ffffff;
    padding: 15px 30px 12px;
}

.inner-header .nav-right li.cart-price {
    font-size: 18px;
    font-weight: 700;
    color: #252525;
}

.nav-item {
    background: #252525;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.nav-item .nav-depart {
    float: left;
}

.nav-item .nav-depart .depart-btn {
    background: #3b3b3b;
    color: #ffffff;
    padding: 14px 84px 14px 18px;
    cursor: pointer;
    position: relative;
}

.nav-item .nav-depart .depart-btn:hover .depart-hover {
    top: 52px;
    opacity: 1;
    visibility: visible;
    z-index: 99;
}

.nav-item .nav-depart .depart-btn:before {
    position: absolute;
    color: #ffffff;
    right: 20px;
    top: 13px;
    content: "ï„‡";
    font-family: FontAwesome;
    font-size: 18px;
}

.nav-item .nav-depart .depart-btn i {
    color: #ffffff;
    font-size: 16px;
}

.nav-item .nav-depart .depart-btn span {
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    margin-left: 16px;
}

.nav-item .nav-depart .depart-btn .depart-hover {
    position: absolute;
    width: 100%;
    background: #fff;
    left: 0;
    top: 62px;
    opacity: 0;
    visibility: hidden;
    padding-bottom: 29px;
    -webkit-box-shadow: 0 13px 32px rgba(51, 51, 51, 0.1);
    box-shadow: 0 13px 32px rgba(51, 51, 51, 0.1);
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.nav-item .nav-depart .depart-btn .depart-hover li {
    list-style: none;
}

.nav-item .nav-depart .depart-btn .depart-hover li.active a {
    color: #e7ab3c;
}

.nav-item .nav-depart .depart-btn .depart-hover li a {
    display: block;
    font-size: 16px;
    color: #000000;
    padding-left: 40px;
    padding-top: 16px;
    padding-right: 30px;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.nav-item .nav-depart .depart-btn .depart-hover li a:hover {
    color: #e7ab3c;
}

.nav-item .nav-menu {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    position: relative;
}

.nav-item .nav-menu li {
    list-style: none;
    display: inline-block;
    margin-left: -5px;
    position: relative;
}

.nav-item .nav-menu li.active a {
    background: #e7ab3c;
}

.nav-item .nav-menu li a {
    font-size: 14px;
    font-weight: 700;
    display: block;
    color: #ffffff;
    border-right: 2px solid #3b3b3b;
    text-transform: uppercase;
    padding: 16px 42px 15px;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.nav-item .nav-menu li:hover > a {
    background: #97938b;
}

.nav-item .nav-menu li:hover .dropdown {
    opacity: 1;
    visibility: visible;
    top: 52px;
}

.nav-item .nav-menu li .dropdown {
    position: absolute;
    right: 0;
    top: 82px;
    width: 200px;
    z-index: 99;
    background: #252525;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.nav-item .nav-menu li .dropdown li {
    display: block;
    margin-left: 0;
}

.nav-item .nav-menu li .dropdown li:hover > a {
    background: transparent;
    color: #e7ab3c;
}

.nav-item .nav-menu li .dropdown li a {
    border-right: 0;
    padding: 13px 20px 12px 30px;
    text-transform: capitalize;
}

/*---------------------
  Hero Section
-----------------------*/

.hero-items .single-hero-items {
    height: 725px;
    padding-top: 210px;
}

.hero-items .single-hero-items span {
    color: #e7ab3c;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    line-height: 28px;
    display: inline-block;
    position: relative;
    top: 50px;
    opacity: 0;
}

.hero-items .single-hero-items h1 {
    color: #252525;
    font-size: 72px;
    font-weight: 700;
    margin-bottom: 6px;
    position: relative;
    top: 50px;
    opacity: 0;
}

.hero-items .single-hero-items p {
    margin-bottom: 42px;
    position: relative;
    top: 100px;
    opacity: 0;
}

.hero-items .single-hero-items .primary-btn {
    position: relative;
    top: 100px;
    opacity: 0;
}

.hero-items .off-card {
    height: 154px;
    width: 154px;
    padding-top: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 140px;
    position: absolute;
    left: 47%;
    top: 160px;
    background: #e7ab3c;
    z-index: 1;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    opacity: 0;
}

.hero-items .off-card:after {
    position: absolute;
    left: 5px;
    top: 5px;
    width: calc(100% - 10px);
    height: calc(100% - 10px);
    border: 2px dashed #ffffff;
    content: "";
    border-radius: 50%;
    z-index: -1;
}

.hero-items .off-card h2 {
    font-size: 32px;
    font-weight: 700;
    color: #ffffff;
    text-transform: uppercase;
}

.hero-items .off-card h2 span {
    display: block;
    font-size: 32px;
    font-weight: 700;
    color: #ffffff;
    text-transform: uppercase;
    margin-top: 6px;
}

.hero-items .owl-item.active .single-hero-items span,
.hero-items .owl-item.active .single-hero-items h1,
.hero-items .owl-item.active .single-hero-items p,
.hero-items .owl-item.active .single-hero-items .primary-btn {
    top: 0;
    opacity: 1;
}

.hero-items .owl-item.active .single-hero-items span {
    -webkit-transition: all 0.2s ease 0.2s;
    -o-transition: all 0.2s ease 0.2s;
    transition: all 0.2s ease 0.2s;
}

.hero-items .owl-item.active .single-hero-items h1 {
    -webkit-transition: all 0.4s ease 0.4s;
    -o-transition: all 0.4s ease 0.4s;
    transition: all 0.4s ease 0.4s;
}

.hero-items .owl-item.active .single-hero-items p {
    -webkit-transition: all 0.6s ease 0.6s;
    -o-transition: all 0.6s ease 0.6s;
    transition: all 0.6s ease 0.6s;
}

.hero-items .owl-item.active .single-hero-items .primary-btn {
    -webkit-transition: all 0.8s ease 0.8s;
    -o-transition: all 0.8s ease 0.8s;
    transition: all 0.8s ease 0.8s;
}

.hero-items .owl-item.active .single-hero-items .off-card {
    opacity: 1;
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transition: all 1s ease 1s;
    -o-transition: all 1s ease 1s;
    transition: all 1s ease 1s;
}

.hero-items .owl-nav button[type=button] {
    font-size: 30px;
    position: absolute;
    left: 40px;
    top: 45%;
    color: #252525;
}

.hero-items .owl-nav button[type=button]:hover {
    color: #dfad51;
}

.hero-items .owl-nav button[type=button].owl-next {
    left: auto;
    right: 40px;
}

/*---------------------
  Banner Section
-----------------------*/

.banner-section {
    padding: 80px 50px;
}

.single-banner {
    position: relative;
    z-index: 1;
}

.single-banner:hover::before {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

.single-banner::before {
    position: absolute;
    left: 35px;
    top: 30px;
    border: 13px solid #ffffff;
    content: "";
    opacity: 0.3;
    width: calc(100% - 70px);
    height: calc(100% - 60px);
    -webkit-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.single-banner img {
    min-width: 100%;
}

.single-banner .inner-text {
    position: absolute;
    left: 0;
    top: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 100%;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 100%;
}

.single-banner .inner-text h4 {
    color: #252525;
    font-weight: 700;
    padding: 11px 28px;
    background: #ffffff;
    border-radius: 2px;
}

/*---------------------
  Women Banner Section
-----------------------*/

.women-banner {
    padding-right: 65px;
    padding-left: 65px;
    padding-top: 0;
    padding-bottom: 80px;
}

.product-large {
    height: 620px;
    margin-left: -15px;
    margin-right: -15px;
    text-align: center;
    padding-top: 285px;
}

.product-large h2 {
    color: #ffffff;
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 18px;
}

.product-large a {
    color: #ffffff;
    font-size: 18px;
    font-weight: 500;
    display: inline-block;
    position: relative;
}

.product-large a:before {
    position: absolute;
    left: 0;
    bottom: -4px;
    width: 100%;
    height: 2px;
    background: #ffffff;
    content: "";
}

.filter-control {
    text-align: center;
    margin-bottom: 45px;
    padding-top: 32px;
}

.filter-control ul li {
    list-style: none;
    display: inline-block;
    font-size: 20px;
    color: #b2b2b2;
    margin-right: 22px;
    position: relative;
    cursor: pointer;
}

.filter-control ul li.active {
    color: #171717;
}

.filter-control ul li.active:before {
    opacity: 1;
}

.filter-control ul li:before {
    position: absolute;
    left: 0;
    bottom: -3px;
    width: 100%;
    height: 2px;
    background: #171717;
    content: "";
    opacity: 0;
}

.filter-control ul li:last-child {
    margin-right: 0;
}

.product-slider .owl-nav button[type=button] {
    font-size: 30px;
    position: absolute;
    left: -62px;
    top: 25%;
    color: #171717;
    opacity: 0.3;
}

.product-slider .owl-nav button[type=button].owl-next {
    left: auto;
    right: -62px;
    color: #171717;
    opacity: 1;
}

.product-slider .owl-dots {
    text-align: center;
    margin-top: 27px;
}

.product-slider .owl-dots button {
    width: 6px;
    height: 6px;
    background: #D8D9DA;
    border-radius: 50%;
    margin-right: 10px;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.product-slider .owl-dots button:last-child {
    margin-right: 0;
}

.product-slider .owl-dots button.active {
    width: 30px;
    background: #252525;
    border-radius: 50px;
}

.product-item {
    margin-bottom: 26px;
}

.product-item:hover .pi-pic .icon {
    top: 15px;
    opacity: 1;
}

.product-item:hover .pi-pic ul {
    bottom: 0;
}

.product-item .pi-pic {
    overflow: hidden;
    position: relative;
}

.product-item .pi-pic img {
    min-width: 100%;
}

.product-item .pi-pic .sale {
    color: #ffffff;
    font-size: 10px;
    background: #76BC42;
    position: absolute;
    left: 0;
    top: 20px;
    padding: 5px 10px;
    text-transform: uppercase;
}

.product-item .pi-pic .sale.pp-sale {
    background: #e7ab3c;
}

.product-item .pi-pic .icon {
    font-size: 20px;
    color: #252525;
    position: absolute;
    right: 21px;
    top: -15px;
    cursor: pointer;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    opacity: 0;
}

.product-item .pi-pic ul {
    position: absolute;
    left: 0;
    bottom: -52px;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    text-align: center;
    width: 100%;
}

.product-item .pi-pic ul li {
    list-style: none;
    display: inline-block;
    background: #ffffff;
}

.product-item .pi-pic ul li.w-icon.active a {
    background: #e7ab3c;
    color: #ffffff;
}

.product-item .pi-pic ul li a {
    font-size: 16px;
    font-weight: 700;
    color: #252525;
    display: block;
    padding: 16px 18px 12px 19px;
}

.product-item .pi-text {
    text-align: center;
    padding-top: 26px;
}

.product-item .pi-text .catagory-name {
    font-size: 10px;
    color: #b2b2b2;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.product-item .pi-text a {
    display: block;
}

.product-item .pi-text a h5 {
    color: #252525;
}

.product-item .pi-text .product-price {
    color: #e7ab3c;
    font-size: 20px;
    font-weight: 700;
}

.product-item .pi-text .product-price span {
    font-size: 14px;
    font-weight: 400;
    color: #b2b2b2;
    text-decoration: line-through;
}
.product-price {
    color: #e7ab3c;
    font-size: 20px;
    font-weight: 700;
}

.product-price span {
    font-size: 14px;
    font-weight: 400;
    color: #b2b2b2;
    text-decoration: line-through;
}

/*---------------------
  Deal Of The Week
-----------------------*/

.deal-of-week {
    padding-top: 80px;
    padding-bottom: 80px;
    margin-left: 65px;
    margin-right: 65px;
}

.countdown-timer {
    text-align: center;
    margin-bottom: 50px;
}

.countdown-timer .cd-item {
    display: inline-block;
    background: #ffffff;
    margin-right: 35px;
    padding: 10px 14px;
    border-radius: 5px;
}

.countdown-timer .cd-item:last-child {
    margin-right: 0;
}

.countdown-timer .cd-item span {
    color: #e7ab3c;
    font-weight: 700;
    line-height: 40px;
    font-size: 36px;
}

.countdown-timer .cd-item p {
    font-size: 16px;
    color: #b2b2b2;
    margin-bottom: 0;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

/*---------------------
  Man Banner
-----------------------*/

.man-banner {
    padding-right: 65px;
    padding-left: 65px;
    padding-top: 80px;
    padding-bottom: 80px;
}

/*---------------------
  Instagram Photo
-----------------------*/

.instagram-photo {
    overflow: hidden;
}

.instagram-photo .insta-item {
    float: left;
    width: 16.66%;
    height: 320px;
    text-align: center;
    position: relative;
}

.instagram-photo .insta-item:hover:before {
    opacity: 1;
}

.instagram-photo .insta-item:hover .inside-text {
    opacity: 1;
    visibility: visible;
    z-index: 99;
}

.instagram-photo .insta-item:before {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    content: "";
    opacity: 0;
    -webkit-transition: all 0.3s;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
}

.instagram-photo .insta-item .inside-text {
    padding-top: 130px;
    opacity: 0;
    visibility: hidden;
    position: relative;
    -webkit-transition: all 0.3s;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
}

.instagram-photo .insta-item .inside-text i {
    font-size: 30px;
    color: #ffffff;
}

.instagram-photo .insta-item .inside-text h5 {
    margin-top: 14px;
}

.instagram-photo .insta-item .inside-text h5 a {
    color: #ffffff;
}

/*---------------------
  Latest Blog
-----------------------*/

.latest-blog {
    padding-top: 72px;
    padding-bottom: 80px;
}

.latest-blog .section-title {
    margin-bottom: 55px;
}

.single-latest-blog {
    margin-bottom: 25px;
}

.single-latest-blog img {
    min-width: 100%;
}

.single-latest-blog .latest-text {
    padding-top: 25px;
}

.single-latest-blog .latest-text .tag-list {
    margin-bottom: 8px;
}

.single-latest-blog .latest-text .tag-list .tag-item {
    font-size: 16px;
    color: #a2a1a1;
    display: inline-block;
    margin-right: 15px;
}

.single-latest-blog .latest-text .tag-list .tag-item i {
    color: #e7ab3c;
}

.single-latest-blog .latest-text a {
    display: block;
}

.single-latest-blog .latest-text a h4 {
    color: #252525;
    font-weight: 700;
    line-height: 30px;
    margin-bottom: 16px;
}

.benefit-items {
    border: 1px solid #ebebeb;
    margin-top: 45px;
}

.benefit-items .single-benefit {
    padding-top: 30px;
    padding-bottom: 25px;
    padding-left: 55px;
    padding-right: 55px;
    border-right: 1px solid #F3F4F0;
}

.benefit-items .single-benefit .sb-icon {
    float: left;
    margin-right: 20px;
}

.benefit-items .single-benefit .sb-text {
    display: table;
}

.benefit-items .single-benefit .sb-text h6 {
    color: #252525;
    line-height: 20px;
    font-weight: 700;
    text-transform: uppercase;
}

.benefit-items .single-benefit .sb-text p {
    margin-bottom: 0;
    color: #252525;
    line-height: 20px;
}

/*---------------------
  Partner Logo
-----------------------*/

.partner-logo {
    background: #303030;
    padding: 38px 0;
}

.logo-carousel .logo-item {
    display: table;
}

.logo-carousel .logo-item .tablecell-inner {
    display: table-cell;
    height: 45px;
    vertical-align: middle;
}

.owl-carousel .owl-item img {
    display: block;
    width: auto;
}

/*---------------------
  Footer
-----------------------*/

.footer-section {
    background: #191919;
    padding-top: 75px;
}

.footer-left {
    margin-bottom: 30px;
}

.footer-left .footer-logo {
    margin-bottom: 24px;
}

.footer-left .footer-logo a {
    display: inline-block;
}

.footer-left ul li {
    list-style: none;
    color: #b2b2b2;
    font-size: 16px;
    line-height: 30px;
}

.footer-left .footer-social {
    padding-top: 25px;
}

.footer-left .footer-social a {
    display: inline-block;
    height: 40px;
    width: 40px;
    background: #434445;
    color: #ffffff;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    margin-right: 7px;
    position: relative;
    z-index: 1;
}

.footer-left .footer-social a:hover:before {
    opacity: 1;
}

.footer-left .footer-social a:before {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background: #e7ab3c;
    content: "";
    border-radius: 50%;
    opacity: 0;
    -webkit-transition: all 0.3s;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    z-index: -1;
}

.footer-widget {
    margin-bottom: 30px;
}

.footer-widget h5 {
    color: #ffffff;
    font-weight: 700;
    margin-bottom: 26px;
}

.footer-widget ul li {
    list-style: none;
}

.footer-widget ul li a {
    line-height: 36px;
    font-size: 16px;
    color: #b2b2b2;
}

.newslatter-item h5 {
    color: #ffffff;
    font-weight: 700;
    margin-bottom: 30px;
}

.newslatter-item p {
    color: #b2b2b2;
    line-height: 26px;
}

.newslatter-item .subscribe-form {
    position: relative;
}

.newslatter-item .subscribe-form input {
    color: #b2b2b2;
    background: #303030;
    width: 100%;
    height: 46px;
    font-size: 16px;
    border: none;
    padding-left: 20px;
}

.newslatter-item .subscribe-form input::-webkit-input-placeholder {
    color: #b2b2b2;
}

.newslatter-item .subscribe-form input::-moz-placeholder {
    color: #b2b2b2;
}

.newslatter-item .subscribe-form input:-ms-input-placeholder {
    color: #b2b2b2;
}

.newslatter-item .subscribe-form input::-ms-input-placeholder {
    color: #b2b2b2;
}

.newslatter-item .subscribe-form input::placeholder {
    color: #b2b2b2;
}

.newslatter-item .subscribe-form button {
    display: inline-block;
    color: #ffffff;
    background: #e7ab3c;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    border: 1px solid #e7ab3c;
    position: absolute;
    right: 0;
    top: 0;
    padding: 13px 20px 12px;
    cursor: pointer;
}

.copyright-reserved {
    border-top: 1px solid #303030;
    padding: 15px 0;
    margin-top: 45px;
}

.copyright-reserved .copyright-text {
    float: left;
    font-size: 16px;
    color: #b2b2b2;
}

.copyright-reserved .copyright-text a {
    color: #b2b2b2;
}

.copyright-reserved .copyright-text i {
    color: #cc2424;
}

.copyright-reserved .copyright-text a:hover {
    color: #e7ab3c;
}

.copyright-reserved .payment-pic {
    float: right;
}

/*-------------------------------- Other Pages Style -------------------------------*/

/*---------------------
  Breadcrumb
-----------------------*/

.breadcrumb-text {
    border-bottom: 1px solid #ebebeb;
    padding: 15px 0;
}

.breadcrumb-text.product-more a:nth-child(1):after {
    color: #252525;
}

.breadcrumb-text a {
    display: inline-block;
    font-size: 16px;
    color: #252525;
    margin-right: 28px;
    position: relative;
}

.breadcrumb-text a:after {
    position: absolute;
    right: -18px;
    top: 0px;
    content: "ï„…";
    font-family: "FontAwesome";
    font-size: 16px;
    color: #b2b2b2;
}

.breadcrumb-text span {
    display: inline-block;
    color: #b2b2b2;
}

/*---------------------
  Product shopFilter
-----------------------*/

.product-shop {
    padding-top: 80px;
    padding-bottom: 80px;
}

.filter-widget {
    margin-bottom: 45px;
}

.filter-widget .fw-title {
    color: #252525;
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 26px;
}

.filter-widget .filter-catagories li {
    list-style: none;
}

.filter-widget .filter-catagories li a {
    display: inline-block;
    color: #636363;
    font-size: 16px;
    line-height: 39px;
}

.filter-widget .fw-brand-check .bc-item {
    margin-bottom: 3px;
}

.filter-widget .fw-brand-check .bc-item label {
    position: relative;
    cursor: pointer;
    padding-left: 28px;
}

.filter-widget .fw-brand-check .bc-item label input {
    position: absolute;
    visibility: hidden;
}

.filter-widget .fw-brand-check .bc-item label input:checked ~ span {
    background: #e7ab3c;
    border-color: #e7ab3c;
}

.filter-widget .fw-brand-check .bc-item label .checkmark {
    position: absolute;
    left: 0;
    top: 5px;
    height: 15px;
    width: 15px;
    border: 2px solid #ebebeb;
    border-radius: 2px;
}

.filter-widget .fw-brand-check .bc-item label .checkmark:after {
    left: 0;
    top: 0;
    width: 10px;
    height: 8px;
    border: solid white;
    border-width: 3px 3px 0px 0px;
    -webkit-transform: rotate(127deg);
    -ms-transform: rotate(127deg);
    transform: rotate(127deg);
}

.filter-widget .filter-range-wrap {
    margin-bottom: 40px;
}

.filter-widget .filter-range-wrap .range-slider {
    margin-bottom: 25px;
}

.filter-widget .filter-range-wrap .range-slider .price-input {
    position: relative;
}

.filter-widget .filter-range-wrap .range-slider .price-input:after {
    position: absolute;
    left: 58px;
    top: 13px;
    height: 1px;
    width: 17px;
    background: #ebebeb;
    content: "";
}

.filter-widget .filter-range-wrap .range-slider .price-input input {
    font-size: 16px;
    color: #252525;
    max-width: 20%;
    text-align: center;
    border: 1px solid #ebebeb;
    border-radius: 2px;
}

.filter-widget .filter-range-wrap .range-slider .price-input input:nth-child(1) {
    margin-right: 28px;
}

.filter-widget .filter-range-wrap .price-range {
    border-radius: 0;
}

.filter-widget .filter-range-wrap .price-range.ui-widget-content {
    border: none;
    background: #ebebeb;
    height: 3px;
}

.filter-widget .filter-range-wrap .price-range.ui-widget-content .ui-slider-handle {
    height: 16px;
    width: 16px;
    border-radius: 50%;
    background: #ffffff;
    border: none;
    -webkit-box-shadow: 1px 6px 14px -4px #425c6d;
    box-shadow: 1px 6px 14px -4px #425c6d;
    outline: none;
}

.filter-widget .filter-range-wrap .price-range .ui-slider-range {
    background: #ebebeb;
    border-radius: 0;
}

.filter-widget .filter-range-wrap .price-range .ui-slider-range.ui-corner-all.ui-widget-header:last-child {
    background: #e7ab3c;
}

.filter-widget .filter-btn {
    font-size: 14px;
    color: #ffffff;
    font-weight: 700;
    background: #e7ab3c;
    padding: 7px 20px 5px;
    border-radius: 2px;
    display: inline-block;
    text-transform: uppercase;
}

.filter-widget .fw-color-choose .cs-item {
    width: 50%;
    float: left;
    margin-bottom: 4px;
}

.filter-widget .fw-color-choose .cs-item input {
    position: absolute;
    visibility: hidden;
}

.filter-widget .fw-color-choose .cs-item label {
    cursor: pointer;
    position: relative;
    padding-left: 33px;
    font-size: 16px;
    color: #636363;
}

.filter-widget .fw-color-choose .cs-item label.cs-violet:before {
    background: #8230E3;
}

.filter-widget .fw-color-choose .cs-item label.cs-blue:before {
    background: #2773BE;
}

.filter-widget .fw-color-choose .cs-item label.cs-yellow:before {
    background: #EEEE21;
}

.filter-widget .fw-color-choose .cs-item label.cs-red:before {
    background: #DC3232;
}

.filter-widget .fw-color-choose .cs-item label.cs-green:before {
    background: #81D742;
}

.filter-widget .fw-color-choose .cs-item label:before {
    position: absolute;
    left: 0;
    top: 4px;
    height: 18px;
    width: 18px;
    background: #252525;
    border-radius: 50%;
    content: "";
}

.filter-widget .fw-size-choose .sc-item {
    display: inline-block;
    margin-right: 5px;
}

.filter-widget .fw-size-choose .sc-item:last-child {
    margin-right: 0;
}

.filter-widget .fw-size-choose .sc-item input {
    position: absolute;
    visibility: hidden;
}

.filter-widget .fw-size-choose .sc-item label {
    font-size: 16px;
    color: #252525;
    font-weight: 700;
    height: 40px;
    width: 47px;
    border: 1px solid #ebebeb;
    text-align: center;
    line-height: 40px;
    text-transform: uppercase;
    cursor: pointer;
}

.filter-widget .fw-size-choose .sc-item label.active {
    background: #252525;
    color: #ffffff;
}

.filter-widget .fw-tags a {
    display: inline-block;
    font-size: 16px;
    color: #636363;
    padding: 5px 15px;
    border: 1px solid #ebebeb;
    margin-right: 5px;
    margin-bottom: 9px;
    border-radius: 2px;
}

.checkmark:after {
    position: absolute;
    content: "";
}

.product-show-option {
    margin-bottom: 30px;
}

.product-show-option .select-option {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.product-show-option .select-option .nice-select {
    border-radius: 0;
    border: 1px solid #ECEDEE;
    height: 40px;
    line-height: 35px;
}

.product-show-option .select-option .nice-select .list {
    margin-top: 0;
    border-radius: 0;
    width: 100%;
}

.product-show-option .select-option .nice-select:after {
    border-bottom: 2px solid #4c4c4c;
    border-right: 2px solid #4c4c4c;
    height: 7px;
    right: 22px;
    top: 47%;
    width: 7px;
    opacity: 0.7;
}

.product-show-option .select-option .nice-select span {
    font-size: 16px;
    color: #4c4c4c;
}

.product-show-option .select-option .sorting {
    margin-right: 20px;
}

.product-show-option .select-option .sorting.nice-select {
    padding-right: 70px;
}

.product-show-option .select-option .p-show.nice-select {
    padding-right: 105px;
}

.product-show-option .select-option .p-show.nice-select:before {
    position: absolute;
    right: 48px;
    top: 0;
    content: "09";
    font-size: 16px;
    color: #252525;
}

.product-show-option p {
    margin-bottom: 0;
    color: #636363;
    line-height: 39px;
}

.loading-more {
    text-align: center;
    padding-top: 10px;
}

.loading-more i {
    font-size: 22px;
    color: #663333;
    margin-right: 6px;
    position: relative;
    top: 7px;
}

.loading-more a {
    font-size: 18px;
    font-weight: 700;
    color: #252525;
    position: relative;
    display: inline-block;
}

.loading-more a:before {
    position: absolute;
    left: 0;
    bottom: -4px;
    width: 100%;
    height: 2px;
    background: #e7ab3c;
    content: "";
}

/*---------------------
  Product Details
-----------------------*/

.product-shop.page-details {
    padding-bottom: 60px;
}

.product-pic-zoom {
    margin-bottom: 10px;
    position: relative;
    z-index: 1;
}

.product-pic-zoom img {
    min-width: 100%;
}

.product-pic-zoom .zoom-icon {
    position: absolute;
    right: 20px;
    top: 20px;
}

.product-pic-zoom .zoom-icon i {
    color: #4c4c4c;
    font-size: 14px;
    width: 40px;
    height: 40px;
    border: 1px solid #d7d7d7;
    text-align: center;
    border-radius: 50%;
    line-height: 37px;
}

.product-thumbs .pt {
    cursor: pointer;
    position: relative;
}

.product-thumbs .pt.active:after {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    border: 1px solid #e7ab3c;
    z-index: 1;
}

.ps-slider .owl-nav button[type=button] {
    height: 30px;
    width: 30px;
    background: #ffffff;
    color: #a7a7a7;
    text-align: center;
    line-height: 30px;
    border-radius: 50%;
    font-size: 20px;
    -webkit-box-shadow: 0px 6px 10px -1px #e9e9e9;
    box-shadow: 0px 6px 10px -1px #e9e9e9;
    position: absolute;
    left: -16px;
    top: 50%;
    -webkit-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    transform: translateY(-15px);
}

.ps-slider .owl-nav button[type=button].owl-next {
    left: auto;
    right: -16px;
}

.product-details .pd-title {
    position: relative;
    margin-bottom: 6px;
}

.product-details .pd-title span {
    display: block;
    font-size: 12px;
    color: #b2b2b2;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 700;
    line-height: 23px;
}

.product-details .pd-title h3 {
    color: #252525;
    font-weight: 700;
}

.product-details .pd-title .heart-icon {
    color: #252525;
    font-size: 18px;
    position: absolute;
    right: 0;
    top: 0;
}

.product-details .pd-rating {
    margin-bottom: 10px;
}

.product-details .pd-rating i {
    font-size: 12px;
    display: inline-block;
    color: #FAC451;
    margin-right: -3px;
}

.product-details .pd-rating span {
    font-size: 12px;
    color: #999591;
}

.product-details .pd-desc {
    margin-bottom: 24px;
}

.product-details .pd-desc p {
    color: #636363;
}

.product-details .pd-desc h4 {
    color: #e7ab3c;
    font-weight: 700;
}

.product-details .pd-desc h4 span {
    font-size: 18px;
    font-weight: 400;
    color: #b7b7b7;
    text-decoration: line-through;
    display: inline-block;
    margin-left: 13px;
}

.product-details .pd-color {
    margin-bottom: 25px;
}

.product-details .pd-color h6 {
    color: #252525;
    font-weight: 700;
    float: left;
    margin-right: 28px;
}

.product-details .pd-color .pd-color-choose {
    display: inline-block;
}

.product-details .pd-color .pd-color-choose .cc-item {
    display: inline-block;
    margin-right: 10px;
}

.product-details .pd-color .pd-color-choose .cc-item input {
    position: absolute;
    visibility: hidden;
}

.product-details .pd-color .pd-color-choose .cc-item label {
    height: 20px;
    width: 20px;
    background: #252525;
    border-radius: 50%;
    cursor: pointer;
    margin-bottom: 0;
}

.product-details .pd-color .pd-color-choose .cc-item label.cc-yellow {
    background: #EEEE21;
}

.product-details .pd-color .pd-color-choose .cc-item label.cc-violet {
    background: #8230E3;
}

.product-details .pd-size-choose {
    margin-bottom: 30px;
}

.product-details .pd-size-choose .sc-item {
    display: inline-block;
    margin-right: 5px;
}

.product-details .pd-size-choose .sc-item:last-child {
    margin-right: 0;
}

.product-details .pd-size-choose .sc-item input {
    position: absolute;
    visibility: hidden;
}

.product-details .pd-size-choose .sc-item label {
    font-size: 16px;
    color: #252525;
    font-weight: 700;
    height: 40px;
    width: 47px;
    border: 1px solid #ebebeb;
    text-align: center;
    line-height: 40px;
    text-transform: uppercase;
    cursor: pointer;
}

.product-details .pd-size-choose .sc-item label.active {
    background: #252525;
    color: #ffffff;
}

.product-details .quantity {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 33px;
}

.product-details .quantity .pro-qty {
    width: 123px;
    height: 46px;
    border: 2px solid #ebebeb;
    padding: 0 15px;
    float: left;
    margin-right: 14px;
}

.product-details .quantity .pro-qty .qtybtn {
    font-size: 24px;
    color: #b2b2b2;
    float: left;
    line-height: 38px;
    cursor: pointer;
    width: 18px;
}

.product-details .quantity .pro-qty .qtybtn.dec {
    font-size: 30px;
}

.product-details .quantity .pro-qty input {
    text-align: center;
    width: 52px;
    font-size: 14px;
    font-weight: 700;
    border: none;
    color: #4c4c4c;
    line-height: 40px;
    float: left;
}

.product-details .quantity .primary-btn.pd-cart {
    padding: 14px 70px 10px;
}

.product-details .pd-tags {
    margin-bottom: 27px;
}

.product-details .pd-tags li {
    list-style: none;
    font-size: 16px;
    color: #636363;
    line-height: 30px;
}

.product-details .pd-tags li span {
    color: #252525;
    font-weight: 700;
    text-transform: uppercase;
}

.product-details .pd-share {
    overflow: hidden;
}

.product-details .pd-share .p-code {
    font-size: 16px;
    color: #252525;
    float: left;
}

.product-details .pd-share .pd-social {
    float: right;
}

.product-details .pd-share .pd-social a {
    display: inline-block;
    color: #252525;
    font-size: 14px;
    margin-left: 15px;
}

.product-tab {
    padding-top: 60px;
}

.tab-item ul li:nth-child(1) a {
    border-right: 1px solid #ebebeb;
}

.tab-item ul li:nth-child(2) a {
    border-right: 1px solid #ebebeb;
}

.tab-item ul li:nth-child(3) a {
    border-right: 1px solid #ebebeb;
}

.tab-item ul li a {
    display: inline-block;
    font-size: 16px;
    font-weight: 700;
    color: #b2b2b2;
    text-transform: uppercase;
    padding: 18px 61px;
    position: relative;
    border-top: 1px solid #ebebeb;
    border-left: 1px solid #ebebeb;
    border-bottom: 1px solid #ebebeb;
}

.tab-item ul li a.active {
    color: #252525;
}

.tab-item ul li a.active:before {
    opacity: 1;
}

.tab-item ul li a::before {
    position: absolute;
    left: 0;
    top: -1px;
    width: 100%;
    height: 5px;
    background: #e7ab3c;
    content: "";
    opacity: 0;
}

.product-content {
    padding-top: 40px;
}

.product-content h5 {
    color: #252525;
    font-weight: 700;
    margin-bottom: 23px;
}

.product-content p {
    margin-bottom: 34px;
}

.product-content img {
    min-width: 100%;
}

.specification-table {
    padding-top: 52px;
}

.specification-table table {
    width: 100%;
}

.specification-table table tr td {
    border: 1px solid #EFF0F2;
    text-align: center;
    padding-top: 18px;
    padding-bottom: 18px;
}

.specification-table table tr td.p-catagory {
    width: 310px;
    text-align: left;
    padding-left: 34px;
    font-size: 16px;
    color: #4c4c4c;
    font-weight: 700;
    text-transform: uppercase;
}

.specification-table table tr td .pd-rating i {
    font-size: 12px;
    display: inline-block;
    color: #FAC451;
    margin-right: -3px;
}

.specification-table table tr td .pd-rating span {
    font-size: 12px;
    color: #999591;
}

.specification-table table tr td .p-price {
    color: #e7ab3c;
    font-size: 16px;
    font-weight: 700;
}

.specification-table table tr td .cart-add {
    font-size: 16px;
    color: #252525;
    font-weight: 700;
    text-transform: uppercase;
}

.specification-table table tr td .p-stock,
.specification-table table tr td .p-size,
.specification-table table tr td .p-code {
    font-size: 16px;
    color: #4c4c4c;
    font-weight: 700;
}

.specification-table table tr td .p-weight {
    font-size: 14px;
    color: #4c4c4c;
    font-weight: 700;
}

.specification-table table tr td .p-size {
    text-transform: uppercase;
}

.specification-table table tr td .cs-color {
    display: inline-block;
    height: 20px;
    width: 20px;
    background: #252525;
    border-radius: 50%;
}

.customer-review-option {
    padding-top: 55px;
}

.customer-review-option h4 {
    color: #292f3b;
    font-weight: 700;
    margin-bottom: 35px;
}

.customer-review-option .comment-option .co-item {
    margin-bottom: 20px;
}

.customer-review-option .comment-option .co-item .avatar-pic {
    float: left;
    margin-right: 20px;
}

.customer-review-option .comment-option .co-item .avatar-pic img {
    height: 63px;
    width: 63px;
    border-radius: 50%;
}

.customer-review-option .comment-option .co-item .avatar-text {
    display: table;
}

.customer-review-option .comment-option .co-item .avatar-text .at-rating {
    line-height: 9px;
}

.customer-review-option .comment-option .co-item .avatar-text .at-rating i {
    font-size: 12px;
    display: inline-block;
    color: #FAC451;
    margin-right: -3px;
}

.customer-review-option .comment-option .co-item .avatar-text h5 {
    color: #252525;
    font-weight: 700;
    margin-top: 10px;
    margin-bottom: 10px;
}

.customer-review-option .comment-option .co-item .avatar-text h5 span {
    color: #b2b2b2;
    font-size: 12px;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-left: 22px;
    position: relative;
}

.customer-review-option .comment-option .co-item .avatar-text h5 span:before {
    position: absolute;
    left: -18px;
    top: -5px;
    content: "-";
    font-size: 18px;
    color: #b2b2b2;
}

.customer-review-option .comment-option .co-item .avatar-text .at-reply {
    font-size: 14px;
    color: #636363;
}

.customer-review-option .personal-rating {
    margin-bottom: 50px;
    padding-top: 10px;
}

.customer-review-option .personal-rating h6 {
    color: #252525;
}

.customer-review-option .personal-rating .rating i {
    font-size: 12px;
    display: inline-block;
    color: #FAC451;
    margin-right: -3px;
}

.customer-review-option .leave-comment h4 {
    color: #292f3b;
    font-weight: 700;
    margin-bottom: 35px;
}

.customer-review-option .leave-comment .comment-form input {
    width: 100%;
    font-size: 16px;
    color: #636363;
    height: 50px;
    border: 1px solid #ebebeb;
    border-radius: 5px;
    padding-left: 20px;
    margin-bottom: 30px;
}

.customer-review-option .leave-comment .comment-form textarea {
    width: 100%;
    resize: none;
    font-size: 16px;
    color: #636363;
    height: 116px;
    border: 1px solid #ebebeb;
    border-radius: 5px;
    padding-left: 20px;
    padding-top: 10px;
    margin-bottom: 45px;
}

/*---------------------
  Related Products
-----------------------*/

.related-products {
    padding-top: 0;
    padding-bottom: 50px;
}

.related-products .section-title {
    margin-bottom: 50px;
}

.related-products .section-title h2:before {
    display: none;
}

/*---------------------
  Shopping Cart
-----------------------*/

.shopping-cart {
    padding-top: 80px;
    padding-bottom: 60px;
}

.cart-table {
    margin-bottom: 40px;
}

.cart-table table {
    width: 100%;
    min-width: 480px;
    border: 1px solid #ebebeb;
}

.cart-table table tr th {
    font-size: 16px;
    color: #252525;
    font-weight: 700;
    border-bottom: 1px solid #ebebeb;
    text-align: center;
    padding: 18px 0 19px;
    text-transform: uppercase;
}

.cart-table table tr th.p-name {
    text-align: left;
}

.cart-table table tr td {
    text-align: center;
    padding-bottom: 34px;
}

.cart-table table tr td.first-row {
    padding-top: 30px;
}

.cart-table table tr td.cart-pic {
    width: 21%;
}

.cart-table table tr td.cart-title {
    text-align: left;
}

.cart-table table tr td.cart-title h5 {
    color: #252525;
}

.cart-table table tr td.p-price {
    width: 16%;
}

.cart-table table tr td.p-price,
.cart-table table tr td.total-price {
    color: #e7ab3c;
    font-size: 16px;
    font-weight: 700;
}

.cart-table table tr td.qua-col {
    width: 16%;
}

.cart-table table tr td.qua-col .quantity {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.cart-table table tr td.qua-col .pro-qty {
    width: 123px;
    height: 46px;
    border: 2px solid #ebebeb;
    padding: 0 15px;
    float: left;
}

.cart-table table tr td.qua-col .pro-qty .qtybtn {
    font-size: 24px;
    color: #b2b2b2;
    float: left;
    line-height: 38px;
    cursor: pointer;
    width: 18px;
}

.cart-table table tr td.qua-col .pro-qty .qtybtn.dec {
    font-size: 30px;
}

.cart-table table tr td.qua-col .pro-qty input {
    text-align: center;
    width: 52px;
    font-size: 14px;
    font-weight: 700;
    border: none;
    color: #4c4c4c;
    line-height: 40px;
    float: left;
}

.cart-table table tr td.total-price {
    width: 12%;
}

.cart-table table tr td.close-td {
    font-size: 16px;
    color: #252525;
    width: 8%;
}

.cart-table table tr td.close-td i {
    cursor: pointer;
}

.cart-buttons {
    margin-bottom: 34px;
}

.cart-buttons .continue-shop {
    color: #b2b2b2;
    border: 2px solid #ebebeb;
    background: #ffffff;
    margin-right: 8px;
    padding: 12px 20px 12px 20px;
    margin-bottom: 10px;
}

.cart-buttons .up-cart {
    color: #252525;
    background: #f3f3f3;
    border: 2px solid #ebebeb;
    padding: 12px 20px 12px 20px;
}

.discount-coupon {
    margin-bottom: 30px;
}

.discount-coupon h6 {
    color: #232530;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.discount-coupon .coupon-form {
    position: relative;
}

.discount-coupon .coupon-form input {
    width: 100%;
    height: 46px;
    border: 2px solid #ebebeb;
    color: #b2b2b2;
    font-size: 14px;
    padding-left: 20px;
}

.discount-coupon .coupon-form .coupon-btn {
    position: absolute;
    right: 0;
    top: 0;
    color: #252525;
    background: transparent;
    border: 1px solid transparent;
    padding: 13px 25px 10px 35px;
}

.proceed-checkout ul {
    border: 2px solid #ebebeb;
    background: #f3f3f3;
    padding-left: 25px;
    padding-right: 25px;
    padding-top: 16px;
    padding-bottom: 20px;
}

.proceed-checkout ul li {
    list-style: none;
    font-size: 16px;
    font-weight: 700;
    color: #252525;
    text-transform: uppercase;
    overflow: hidden;
}

.proceed-checkout ul li.subtotal {
    font-weight: 400;
    text-transform: capitalize;
    border-bottom: 1px solid #ffffff;
    padding-bottom: 14px;
}

.proceed-checkout ul li.subtotal span {
    font-weight: 700;
}

.proceed-checkout ul li.cart-total {
    padding-top: 10px;
}

.proceed-checkout ul li.cart-total span {
    color: #e7ab3c;
}

.proceed-checkout ul li span {
    float: right;
}

.proceed-checkout .proceed-btn {
    font-size: 14px;
    font-weight: 700;
    color: #ffffff;
    background: #252525;
    text-transform: uppercase;
    padding: 15px 25px 14px 25px;
    display: block;
    text-align: center;
}

/*---------------------
  Check Out
-----------------------*/

.checkout-section {
    padding-top: 80px;
    padding-bottom: 80px;
}

.checkout-content {
    margin-bottom: 50px;
}

.checkout-content .content-btn,
.checkout-content input {
    color: #252525;
    font-size: 16px;
    border: 2px solid #ebebeb;
    padding: 14px 20px;
    background: #f3f3f3;
    text-align: center;
    display: block;
}

.checkout-content input {
    height: 56px !important;
}

.checkout-form h4 {
    color: #252525;
    font-weight: 700;
    margin-bottom: 30px;
}

.checkout-form label {
    color: #252525;
    font-size: 16px;
    margin-bottom: 5px;
}

.checkout-form label span {
    color: #d85d5c;
}

.checkout-form input {
    width: 100%;
    height: 46px;
    border: 2px solid #ebebeb;
    margin-bottom: 25px;
    padding-left: 15px;
}

.checkout-form input.street-first {
    margin-bottom: 20px;
}

.checkout-form .create-item {
    padding-top: 15px;
}

.checkout-form .create-item label {
    position: relative;
    cursor: pointer;
    padding-left: 32px;
    margin-bottom: 0;
    font-size: 14px;
    color: #252525;
}

.checkout-form .create-item label input {
    position: absolute;
    visibility: hidden;
}

.checkout-form .create-item label input:checked ~ span {
    background: #e7ab3c;
    border-color: #e7ab3c;
}

.checkout-form .create-item label .checkmark {
    position: absolute;
    left: 0;
    top: 3px;
    height: 13px;
    width: 13px;
    border: 2px solid #B2B2B2;
    border-radius: 2px;
}

.checkout-form .create-item label .checkmark:after {
    left: 0;
    top: 0;
    width: 9px;
    height: 6px;
    border: solid #ffffff;
    border-width: 2px 2px 0px 0px;
    -webkit-transform: rotate(127deg);
    -ms-transform: rotate(127deg);
    transform: rotate(127deg);
}

.checkout-form .place-order .order-total {
    border: 2px solid #ebebeb;
    padding-left: 40px;
    padding-right: 40px;
    padding-top: 22px;
    padding-bottom: 35px;
}

.checkout-form .place-order .order-total .order-table {
    margin-bottom: 64px;
}

.checkout-form .place-order .order-total .order-table li {
    list-style: none;
    color: #252525;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    border-bottom: 1px solid #e5e5e5;
    padding-bottom: 5px;
    padding-top: 30px;
}

.checkout-form .place-order .order-total .order-table li:first-child {
    border-bottom: 1px solid #e5e5e5;
    padding-bottom: 20px;
    padding-top: 0;
}

.checkout-form .place-order .order-total .order-table li.fw-normal {
    font-weight: 400;
    text-transform: capitalize;
}

.checkout-form .place-order .order-total .order-table li.fw-normal span {
    font-weight: 700;
}

.checkout-form .place-order .order-total .order-table li.total-price span {
    color: #e7ab3c;
}

.checkout-form .place-order .order-total .order-table li span {
    float: right;
}

.checkout-form .place-order .order-total .payment-check {
    margin-bottom: 50px;
}

.checkout-form .place-order .order-total .payment-check .pc-item label {
    position: relative;
    cursor: pointer;
    padding-left: 32px;
    margin-bottom: 0;
    font-size: 14px;
    color: #252525;
}

.checkout-form .place-order .order-total .payment-check .pc-item label input {
    position: absolute;
    visibility: hidden;
}

.checkout-form .place-order .order-total .payment-check .pc-item label input:checked ~ span {
    background: #e7ab3c;
    border-color: #e7ab3c;
}

.checkout-form .place-order .order-total .payment-check .pc-item label .checkmark {
    position: absolute;
    left: 0;
    top: 3px;
    height: 13px;
    width: 13px;
    border: 2px solid #B2B2B2;
    border-radius: 2px;
}

.checkout-form .place-order .order-total .payment-check .pc-item label .checkmark:after {
    left: 0;
    top: 0;
    width: 9px;
    height: 6px;
    border: solid #ffffff;
    border-width: 2px 2px 0px 0px;
    -webkit-transform: rotate(127deg);
    -ms-transform: rotate(127deg);
    transform: rotate(127deg);
}

.checkout-form .place-order .order-total .order-btn {
    text-align: center;
}

.checkout-form .place-order .order-total .order-btn .place-btn {
    padding: 13px 40px 11px;
    background: #000000;
    border-color: #000000;
}

/*---------------------
  Blog Section
-----------------------*/

.blog-section {
    padding-top: 80px;
    padding-bottom: 80px;
}

.blog-section .loading-more {
    padding-top: 0;
}

.blog-sidebar .search-form {
    margin-bottom: 55px;
}

.blog-sidebar .search-form h4 {
    color: #252525;
    font-weight: 700;
    margin-bottom: 12px;
}

.blog-sidebar .search-form form {
    position: relative;
}

.blog-sidebar .search-form form input {
    height: 46px;
    width: 100%;
    border: 2px solid #ECECEC;
    padding-left: 20px;
    font-size: 18px;
    color: #b2b2b2;
}

.blog-sidebar .search-form form button {
    position: absolute;
    right: 0;
    top: 0;
    color: #ffffff;
    background: #252525;
    border: 1px solid #252525;
    height: 46px;
    padding: 0 15px;
    cursor: pointer;
}

.blog-sidebar .blog-catagory {
    margin-bottom: 41px;
}

.blog-sidebar .blog-catagory h4 {
    color: #252525;
    font-weight: 700;
    margin-bottom: 14px;
}

.blog-sidebar .blog-catagory ul li {
    list-style: none;
}

.blog-sidebar .blog-catagory ul li a {
    font-size: 16px;
    color: #636363;
    line-height: 39px;
}

.blog-sidebar .recent-post {
    margin-bottom: 55px;
}

.blog-sidebar .recent-post h4 {
    color: #252525;
    font-weight: 700;
    margin-bottom: 28px;
}

.blog-sidebar .recent-post .recent-blog .rb-item {
    overflow: hidden;
    margin-bottom: 30px;
    display: block;
}

.blog-sidebar .recent-post .recent-blog .rb-item .rb-pic {
    float: left;
}

.blog-sidebar .recent-post .recent-blog .rb-item .rb-pic img {
    height: 80px;
    width: 80px;
}

.blog-sidebar .recent-post .recent-blog .rb-item .rb-text {
    display: table;
    padding-left: 16px;
}

.blog-sidebar .recent-post .recent-blog .rb-item .rb-text h6 {
    color: #252525;
    line-height: 24px;
    font-weight: 700;
    margin-bottom: 10px;
}

.blog-sidebar .recent-post .recent-blog .rb-item .rb-text p {
    margin-bottom: 0;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: #e7ab3c;
    letter-spacing: 2px;
    line-height: 20px;
}

.blog-sidebar .recent-post .recent-blog .rb-item .rb-text p span {
    color: #b2b2b2;
    font-weight: 400;
    text-transform: capitalize;
    letter-spacing: 0;
}

.blog-sidebar .blog-tags h4 {
    color: #252525;
    font-weight: 700;
    margin-bottom: 20px;
}

.blog-sidebar .blog-tags .tag-item a {
    display: inline-block;
    font-size: 16px;
    color: #636363;
    padding: 5px 15px;
    border: 1px solid #ebebeb;
    margin-right: 5px;
    margin-bottom: 9px;
    border-radius: 2px;
}

.blog-item {
    margin-bottom: 42px;
}

.blog-item .bi-pic img {
    min-width: 100%;
}

.blog-item .bi-text {
    padding-top: 24px;
}

.blog-item .bi-text h4 {
    color: #252525;
    font-weight: 700;
    line-height: 30px;
    margin-bottom: 16px;
}

.blog-item .bi-text p {
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    color: #e7ab3c;
    letter-spacing: 2px;
    line-height: 20px;
}

.blog-item .bi-text p span {
    color: #b2b2b2;
    font-weight: 400;
    text-transform: capitalize;
    letter-spacing: 0;
}

/*---------------------
  Blog Details
-----------------------*/

.blog-details {
    padding-top: 72px;
    padding-bottom: 80px;
}

.blog-details-inner .blog-detail-title {
    text-align: center;
    margin-bottom: 25px;
}

.blog-details-inner .blog-detail-title h2 {
    color: #252525;
    font-weight: 700;
    margin-bottom: 15px;
}

.blog-details-inner .blog-detail-title p {
    margin-bottom: 0;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: #e7ab3c;
    letter-spacing: 2px;
    line-height: 20px;
    display: inline-block;
    position: relative;
}

.blog-details-inner .blog-detail-title p:before {
    position: absolute;
    left: -175px;
    top: 8px;
    height: 1px;
    width: 125px;
    background: #ebebeb;
    content: "";
}

.blog-details-inner .blog-detail-title p:after {
    position: absolute;
    right: -175px;
    top: 7px;
    height: 1px;
    width: 125px;
    background: #ebebeb;
    content: "";
}

.blog-details-inner .blog-detail-title p span {
    color: #b2b2b2;
    font-size: 14px;
    font-weight: 400;
    text-transform: capitalize;
    letter-spacing: 0;
}

.blog-details-inner .blog-large-pic img {
    min-width: 100%;
}

.blog-details-inner .blog-detail-desc {
    margin-top: 22px;
    margin-bottom: 32px;
}

.blog-details-inner .blog-detail-desc p {
    font-size: 18px;
    line-height: 30px;
}

.blog-details-inner .blog-detail-desc p:first-of-type:first-letter {
    float: left;
    font-size: 60px;
    text-transform: uppercase;
    color: #252525;
    margin-top: 14px;
    margin-right: 10px;
}

.blog-details-inner .blog-quote {
    margin-bottom: 65px;
}

.blog-details-inner .blog-quote p {
    position: relative;
    color: #252525;
    font-size: 20px;
    font-weight: 700;
    line-height: 30px;
    padding-left: 32px;
}

.blog-details-inner .blog-quote p span {
    color: #161715;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.blog-details-inner .blog-quote p:before {
    position: absolute;
    left: 0;
    top: 0;
    height: 88px;
    width: 3px;
    background: #e7ab3c;
    content: "";
}

.blog-details-inner .blog-more {
    margin-bottom: 32px;
}

.blog-details-inner .blog-more img {
    min-width: 100%;
}

.blog-details-inner p {
    font-size: 18px;
    line-height: 30px;
}

.blog-details-inner .tag-share {
    overflow: hidden;
    border-bottom: 1px solid #ebebeb;
    padding-bottom: 54px;
    margin-top: 46px;
}

.blog-details-inner .tag-share .details-tag {
    float: left;
}

.blog-details-inner .tag-share .details-tag ul li {
    list-style: none;
    display: inline-block;
    color: #171717;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    margin-right: 16px;
}

.blog-details-inner .tag-share .details-tag ul li i {
    font-size: 18px;
    color: #e7ab3c;
}

.blog-details-inner .tag-share .blog-share {
    float: right;
}

.blog-details-inner .tag-share .blog-share .social-links {
    display: inline-block;
}

.blog-details-inner .tag-share .blog-share .social-links a {
    display: inline-block;
    color: #171717;
    margin-left: 25px;
}

.blog-details-inner .tag-share .blog-share span {
    font-size: 16px;
    color: #2d292f;
}

.blog-details-inner .blog-post {
    padding-top: 72px;
    margin-bottom: 58px;
}

.blog-details-inner .blog-post .prev-blog {
    display: block;
}

.blog-details-inner .blog-post .prev-blog .pb-pic {
    float: left;
    position: relative;
    margin-top: 7px;
}

.blog-details-inner .blog-post .prev-blog .pb-pic i {
    position: absolute;
    left: -32px;
    top: 35%;
    font-size: 18px;
    color: #b2b2b2;
}

.blog-details-inner .blog-post .prev-blog .pb-pic img {
    height: 70px;
    width: 70px;
}

.blog-details-inner .blog-post .prev-blog .pb-text {
    display: table;
    padding-left: 20px;
}

.blog-details-inner .blog-post .prev-blog .pb-text span {
    font-size: 14px;
    color: #b2b2b2;
    letter-spacing: 2px;
}

.blog-details-inner .blog-post .prev-blog .pb-text h5 {
    font-size: 20px;
    color: #252525;
    line-height: 26px;
    font-weight: 700;
    margin-top: 10px;
}

.blog-details-inner .blog-post .next-blog {
    display: block;
}

.blog-details-inner .blog-post .next-blog .nb-pic {
    float: right;
    position: relative;
    margin-top: 7px;
}

.blog-details-inner .blog-post .next-blog .nb-pic i {
    position: absolute;
    right: -28px;
    top: 35%;
    font-size: 18px;
    color: #b2b2b2;
}

.blog-details-inner .blog-post .next-blog .nb-pic img {
    height: 70px;
    width: 70px;
}

.blog-details-inner .blog-post .next-blog .nb-text {
    display: table;
    padding-right: 20px;
    text-align: right;
}

.blog-details-inner .blog-post .next-blog .nb-text span {
    font-size: 14px;
    color: #b2b2b2;
    letter-spacing: 2px;
}

.blog-details-inner .blog-post .next-blog .nb-text h5 {
    font-size: 20px;
    color: #252525;
    line-height: 26px;
    font-weight: 700;
    margin-top: 10px;
}

.blog-details-inner .posted-by {
    border: 1px solid #ebebeb;
    border-radius: 5px;
    padding: 40px 65px;
}

.blog-details-inner .posted-by .pb-pic {
    float: left;
}

.blog-details-inner .posted-by .pb-text {
    padding-left: 22px;
    display: table;
}

.blog-details-inner .posted-by .pb-text a {
    display: block;
}

.blog-details-inner .posted-by .pb-text a h5 {
    color: #252525;
    font-weight: 700;
    margin-bottom: 13px;
}

.blog-details-inner .posted-by .pb-text p {
    line-height: 30px;
    margin-bottom: 0;
}

.blog-details-inner .leave-comment {
    padding-top: 55px;
}

.blog-details-inner .leave-comment h4 {
    color: #292f3b;
    font-weight: 700;
    margin-bottom: 35px;
}

.blog-details-inner .leave-comment .comment-form input {
    width: 100%;
    font-size: 16px;
    color: #636363;
    height: 50px;
    border: 1px solid #ebebeb;
    border-radius: 5px;
    padding-left: 20px;
    margin-bottom: 30px;
}

.blog-details-inner .leave-comment .comment-form textarea {
    width: 100%;
    resize: none;
    font-size: 16px;
    color: #636363;
    height: 116px;
    border: 1px solid #ebebeb;
    border-radius: 5px;
    padding-left: 20px;
    padding-top: 10px;
    margin-bottom: 45px;
}

/*---------------------
  Map
-----------------------*/

.map {
    padding-top: 80px;
    padding-bottom: 0;
}

.map-inner {
    height: 610px;
    position: relative;
}

.map-inner iframe {
    width: 100%;
}

.map-inner .icon {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-14px, -21px);
    -ms-transform: translate(-14px, -21px);
    transform: translate(-14px, -21px);
}

.map-inner .icon i {
    font-size: 48px;
    color: #e7ab3c;
}

/*---------------------
  Contact Section
-----------------------*/

.contact-section {
    padding-top: 75px;
    padding-bottom: 80px;
}

.contact-title {
    margin-bottom: 30px;
}

.contact-title h4 {
    color: #252525;
    font-weight: 700;
    margin-bottom: 16px;
}

.contact-widget .cw-item {
    background: #ffffff;
    margin-bottom: 11px;
    -webkit-box-shadow: 0px 8px 35px 10px #E8E8E8;
    box-shadow: 0px 8px 35px 10px #E8E8E8;
    padding-left: 25px;
    padding-top: 15px;
    padding-bottom: 15px;
    border-radius: 10px;
}

.contact-widget .cw-item .ci-icon {
    float: left;
    margin-top: 12px;
}

.contact-widget .cw-item .ci-icon i {
    font-size: 30px;
    color: #b2b2b2;
}

.contact-widget .cw-item .ci-text {
    display: table;
    padding-left: 30px;
}

.contact-widget .cw-item .ci-text span {
    color: #b2b2b2;
    font-size: 16px;
}

.contact-widget .cw-item .ci-text p {
    font-size: 18px;
    color: #252525;
    margin-bottom: 0;
}

.contact-form .leave-comment h4 {
    color: #292f3b;
    font-weight: 700;
    margin-bottom: 20px;
}

.contact-form .leave-comment p {
    margin-bottom: 38px;
}

.contact-form .leave-comment .comment-form input {
    width: 100%;
    font-size: 16px;
    color: #636363;
    height: 50px;
    border: 1px solid #ebebeb;
    border-radius: 5px;
    padding-left: 20px;
    margin-bottom: 30px;
}

.contact-form .leave-comment .comment-form textarea {
    width: 100%;
    resize: none;
    font-size: 16px;
    color: #636363;
    height: 150px;
    border: 1px solid #ebebeb;
    border-radius: 5px;
    padding-left: 20px;
    padding-top: 10px;
    margin-bottom: 35px;
}

.contact-form .leave-comment .comment-form .site-btn {
    padding: 13px 35px 11px;
}

/*---------------------
  Faq Section
-----------------------*/

.faq-section {
    padding-top: 80px;
    padding-bottom: 54px;
}

.faq-accordin .card {
    border: none;
    margin-bottom: 22px;
}

.faq-accordin .card .card-heading {
    font-size: 22px;
    color: #252525;
    font-weight: 700;
    cursor: pointer;
}

.faq-accordin .card .card-heading a {
    padding-left: 42px;
    display: block;
}

.faq-accordin .card .card-body {
    padding: 0;
    padding-top: 13px;
    padding-bottom: 10px;
}

.faq-accordin .card .card-body p {
    margin-bottom: 0;
}

.faq-accordin .card-heading a:after,
.faq-accordin .card-heading > a.active[aria-expanded=false]:after {
    content: "ï§";
    font-family: "FontAwesome";
    font-size: 14px;
    color: #404040;
    height: 25px;
    width: 25px;
    text-align: center;
    line-height: 25px;
    background: #EFEFF0;
    margin-top: 3px;
    position: absolute;
    left: 0;
    top: 0;
}

.faq-accordin .card-heading a[aria-expanded=true]:after,
.faq-accordin .card-heading > a.active:after {
    content: "ï¨";
    font-family: "FontAwesome";
    float: left;
    font-size: 13px;
    color: #ffffff;
    background: #e7ab3c;
}

/*---------------------
  Register Form
-----------------------*/

.register-login-section {
    padding-top: 72px;
    padding-bottom: 80px;
}

.register-form h2,
.login-form h2 {
    color: #252525;
    font-weight: 700;
    text-align: center;
    margin-bottom: 35px;
}

.register-form form .group-input,
.login-form form .group-input {
    margin-bottom: 25px;
}

.register-form form .group-input label,
.login-form form .group-input label {
    display: block;
    font-size: 18px;
    color: #252525;
    margin-bottom: 13px;
}

.register-form form .group-input input,
.login-form form .group-input input {
    border: 1px solid #ebebeb;
    height: 50px;
    width: 100%;
    padding-left: 20px;
    padding-right: 15px;
}

.register-form form .register-btn,
.register-form form .login-btn,
.login-form form .register-btn,
.login-form form .login-btn {
    width: 100%;
    letter-spacing: 2px;
    margin-top: 5px;
}

.register-form .switch-login,
.login-form .switch-login {
    text-align: center;
    margin-top: 22px;
}

.register-form .switch-login .or-login,
.login-form .switch-login .or-login {
    color: #252525;
    font-size: 14px;
    letter-spacing: 2px;
    text-transform: uppercase;
    position: relative;
}

.register-form .switch-login .or-login:before,
.login-form .switch-login .or-login:before {
    position: absolute;
    left: 0;
    bottom: 0;
    height: 2px;
    width: 100%;
    background: #9f9f9f;
    content: "";
}

.login-form .group-input.gi-check {
    margin-bottom: 8px;
}

.login-form .group-input .gi-more {
    overflow: hidden;
}

.login-form .group-input .gi-more label {
    position: relative;
    cursor: pointer;
    padding-left: 28px;
    font-size: 14px;
    color: #6B6B6B;
    float: left;
}

.login-form .group-input .gi-more label input {
    position: absolute;
    visibility: hidden;
}

.login-form .group-input .gi-more label input:checked ~ span {
    border-color: #6C6C6C;
}

.login-form .group-input .gi-more label input:checked ~ span:after {
    border-color: #6c6c6c;
}

.login-form .group-input .gi-more label .checkmark {
    position: absolute;
    left: 0;
    top: 4px;
    height: 13px;
    width: 13px;
    border: 1px solid #6C6C6C;
    border-radius: 2px;
}

.login-form .group-input .gi-more label .checkmark:after {
    left: 2px;
    top: -2px;
    width: 13px;
    height: 6px;
    border: solid #ffffff;
    border-width: 2px 2px 0px 0px;
    -webkit-transform: rotate(127deg);
    -ms-transform: rotate(127deg);
    transform: rotate(127deg);
}

.login-form .group-input .gi-more .forget-pass {
    float: right;
    line-height: 20px;
    margin-top: -2px;
    font-size: 14px;
    color: #6B6B6B;
}

/* ------------------------------ Responsive Media Styles ---------------------------- */

@media only screen and (min-width: 1200px) and (max-width: 1920px) {
    .inner-header .advanced-search .input-group button {
        right: -14px;
    }

    .product-item .pi-pic ul li a {
        padding: 16px 12px 12px 11px;
    }

    .nav-item .nav-menu li a {
        padding: 16px 45px 15px;
    }
}

@media only screen and (min-width: 1200px) {
    .container {
        max-width: 1170px;
    }
}

/* Medium Device: 1200px */

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .inner-header .advanced-search .category-btn {
        max-width: 36%;
    }

    .inner-header .advanced-search .input-group {
        max-width: 64%;
    }

    .nav-item .nav-menu li a {
        padding: 16px 26px 15px;
    }

    .hero-items .owl-nav button[type=button] {
        left: 5px;
    }

    .hero-items .owl-nav button[type=button].owl-next {
        right: 5px;
    }

    .countdown-timer .cd-item {
        margin-right: 26px;
    }

    .product-details .quantity .primary-btn.pd-cart {
        padding: 14px 30px 10px;
    }

    .tab-item ul li a {
        padding: 18px 39px;
    }

    .inner-header .advanced-search .input-group button {
        right: -7px;
    }

    .product-shop .product-item .pi-pic ul li a {
        padding: 16px 12px 12px 11px;
    }

    .related-products .product-item .pi-pic ul li a {
        padding: 16px 12px 12px 11px;
    }
}

@media only screen and (max-width: 991px) {
    .banner-section {
        padding: 80px 0 50px;
    }

    .single-banner {
        margin-bottom: 30px;
    }

    .women-banner {
        padding-right: 0;
        padding-left: 0;
    }

    .product-large {
        margin-left: 0;
        margin-right: 0;
    }

    .deal-of-week {
        margin-left: 0;
        margin-right: 0;
    }

    .product-slider .owl-nav button[type=button] {
        display: none;
    }

    .man-banner {
        padding-right: 0;
        padding-left: 0;
    }

    .place-order {
        padding-top: 30px;
    }

    .blog-tags {
        padding-bottom: 40px;
    }

    .blog-details-inner .blog-post .prev-blog {
        margin-bottom: 40px;
    }

    .contact-form {
        padding-top: 40px;
    }

    .product-large.m-large {
        margin-top: 40px;
    }

    .hero-items .owl-nav button[type=button] {
        left: 5px;
    }

    .hero-items .owl-nav button[type=button].owl-next {
        right: 5px;
    }

    .product-shop.page-details .product-details {
        padding-top: 30px;
    }

    .inner-header .advanced-search .input-group button {
        right: -8px;
    }
}

/* Tablet Device: 768px */

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .header-top .ht-right .login-panel {
        padding-left: 10px;
    }

    .header-top .ht-right .top-social {
        padding-right: 10px;
    }

    .header-top .ht-left .mail-service {
        padding-right: 10px;
    }

    .header-top .ht-left .phone-service {
        padding-left: 10px;
    }

    .header-top .ht-right .top-social a {
        margin-left: 10px;
    }

    .inner-header .advanced-search .category-btn {
        max-width: 40%;
        padding-right: 25px;
    }

    .inner-header .advanced-search .input-group {
        max-width: 60%;
    }

    .inner-header .nav-right li {
        margin-left: 8px;
    }

    .nav-item .nav-depart .depart-btn {
        padding: 14px 40px 14px 18px;
    }

    .nav-item .nav-menu li a {
        padding: 16px 10px 15px;
    }

    .instagram-photo .insta-item .inside-text h5 {
        font-size: 14px;
    }

    .tab-item ul li a {
        padding: 18px 39px;
    }

    .hero-items .off-card {
        left: 62%;
    }

    .blog-details-inner .blog-post .prev-blog {
        padding-left: 30px;
    }

    .blog-details-inner .blog-post .next-blog {
        padding-right: 30px;
    }

    .blog-sidebar,
    .produts-sidebar-filter {
        padding-top: 50px;
    }

    .checkout-content input {
        margin-top: 50px;
    }
}

/* Large Device: 480px */

@media only screen and (max-width: 767px) {
    .instagram-photo .insta-item {
        width: 50%;
        height: 300px;
    }

    .copyright-reserved .copyright-text {
        float: none;
        margin-bottom: 10px;
        text-align: center;
    }

    .copyright-reserved .payment-pic {
        float: none;
        text-align: center;
    }

    .header-top .ht-left,
    .header-top .top-social {
        display: none;
    }

    .header-top .ht-right .login-panel {
        padding-top: 9px;
        padding-bottom: 7px;
    }

    .header-top .ht-right .lan-selector {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .inner-header .advanced-search .category-btn {
        display: none;
    }

    .inner-header .advanced-search .input-group {
        max-width: 100%;
    }

    .inner-header {
        padding: 0;
    }

    .inner-header .logo {
        text-align: center;
    }

    .inner-header .nav-right {
        text-align: left;
    }

    .inner-header .nav-right li:first-child {
        margin-left: 0;
    }

    .nav-item .nav-depart .depart-btn {
        padding: 14px 50px 14px 18px;
    }

    .nav-item {
        background: transparent;
    }

    .nav-item .nav-menu {
        display: none;
    }

    .nav-item .nav-depart {
        display: none;
    }

    .inner-header .nav-right li.cart-icon .cart-hover {
        left: -50px;
    }

    .product-show-option p {
        text-align: left;
    }

    .tab-item ul li a {
        padding: 18px 51px;
        margin-bottom: 10px;
    }

    .cart-table {
        overflow: auto;
    }

    .cart-table table tr th {
        font-size: 12px;
    }

    .hero-items .single-hero-items {
        padding: 110px 25px 80px;
        height: auto;
        background: left center;
    }

    .hero-items .single-hero-items h1 {
        font-size: 40px;
    }

    .blog-details-inner .tag-share .details-tag ul li {
        margin-right: 10px;
    }

    .blog-details-inner .tag-share .blog-share .social-links a {
        margin-left: 15px;
    }

    .blog-details-inner .blog-detail-title p:before {
        left: -135px;
        width: 100px;
    }

    .blog-details-inner .blog-detail-title p:after {
        right: -135px;
        width: 100px;
    }

    .hero-items .off-card {
        display: none;
    }

    .ps-slider .owl-nav button[type=button] {
        left: 0;
    }

    .ps-slider .owl-nav button[type=button].owl-next {
        right: 0;
    }

    .blog-details-inner .blog-post .prev-blog {
        padding-left: 30px;
    }

    .blog-details-inner .blog-post .next-blog {
        padding-right: 30px;
    }

    .blog-details-inner .posted-by {
        padding: 40px 25px;
        text-align: center;
    }

    .blog-details-inner .posted-by .pb-pic {
        float: none;
        margin-bottom: 30px;
    }

    .blog-details-inner .posted-by .pb-text {
        padding-left: 0;
    }

    .blog-sidebar,
    .produts-sidebar-filter {
        padding-top: 50px;
    }

    .checkout-content input {
        margin-top: 50px;
    }
}

/* Small Device: 320px */

@media only screen and (max-width: 479px) {
    .instagram-photo .insta-item {
        width: 100%;
    }

    .inner-header .advanced-search .category-btn {
        display: none;
    }

    .inner-header .advanced-search .input-group {
        max-width: 100%;
    }

    .inner-header .nav-right li.cart-icon .cart-hover {
        width: 270px;
        padding: 20px;
    }

    .countdown-timer .cd-item {
        margin-right: 5px;
        padding: 10px 6px;
    }

    .product-show-option .select-option {
        display: inline-block;
    }

    .product-show-option .select-option .sorting.nice-select {
        margin-bottom: 10px;
    }

    .product-details .quantity .primary-btn.pd-cart {
        padding: 14px 20px 10px;
    }

    .tab-item ul li a {
        padding: 18px 30px;
        margin-bottom: 10px;
    }

    .specification-table table tr td.p-catagory {
        width: 160px;
    }

    .blog-details-inner .blog-post .next-blog .nb-pic i {
        display: none;
    }

    .blog-details-inner .blog-post .prev-blog .pb-pic i {
        display: none;
    }

    .blog-details-inner .tag-share .details-tag {
        float: none;
        margin-bottom: 10px;
    }

    .blog-details-inner .tag-share .blog-share {
        float: none;
    }

    .blog-details-inner .blog-detail-title p:before {
        left: -62px;
        width: 50px;
    }

    .blog-details-inner .blog-detail-title p:after {
        right: -62px;
        width: 50px;
    }

    .blog-details-inner .posted-by .pb-pic {
        float: none;
        margin-bottom: 15px;
    }

    .blog-details-inner .posted-by .pb-text {
        padding-left: 0;
        display: block;
    }

    .checkout-form .place-order .order-total {
        padding-left: 20px;
        padding-right: 20px;
    }

    .contact-widget .cw-item .ci-icon {
        float: none;
        margin-bottom: 5px;
    }

    .contact-widget .cw-item .ci-text {
        padding-left: 0;
    }

    .benefit-items .single-benefit {
        padding-left: 15px;
        padding-right: 15px;
    }
}


body {
    background-color: #ecedee
}

.card {
    border: none;
    overflow: hidden
}

.thumbnail_images ul {
    list-style: none;
    justify-content: center;
    display: flex;
    align-items: center;
    margin-top: 10px
}

.thumbnail_images ul li {
    margin: 5px;
    padding: 10px;
    border: 2px solid #eee;
    cursor: pointer;
    transition: all 0.5s
}

.thumbnail_images ul li:hover {
    border: 2px solid #000
}

.main_image {
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: 1px solid #eee;
    height: 400px;
    width: 100%;
    overflow: hidden
}

.heart {
    height: 29px;
    width: 29px;
    background-color: #eaeaea;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center
}
.content p {
    font-size: 12px
}
.ratings span {
    font-size: 14px;
    margin-left: 12px
}

.colors {
    margin-top: 5px
}

.colors ul {
    list-style: none;
    display: flex;
    padding-left: 0px
}

.colors ul li {
    height: 20px;
    width: 20px;
    display: flex;
    border-radius: 50%;
    margin-right: 10px;
    cursor: pointer
}

.colors ul li:nth-child(1) {
    background-color: #6c704d
}

.colors ul li:nth-child(2) {
    background-color: #96918b
}

.colors ul li:nth-child(3) {
    background-color: #68778e
}

.colors ul li:nth-child(4) {
    background-color: #263f55
}

.colors ul li:nth-child(5) {
    background-color: black
}

.right-side {
    position: relative
}

.search-option {
    position: absolute;
    background-color: #000;
    overflow: hidden;
    align-items: center;
    color: #fff;
    width: 200px;
    height: 200px;
    border-radius: 49% 51% 50% 50% / 68% 69% 31% 32%;
    left: 30%;
    bottom: -250px;
    transition: all 0.5s;
    cursor: pointer
}

.search-option .first-search {
    position: absolute;
    top: 20px;
    left: 90px;
    font-size: 20px;
    opacity: 1000
}

.search-option .inputs {
    opacity: 0;
    transition: all 0.5s ease;
    transition-delay: 0.5s;
    position: relative
}

.search-option .inputs input {
    position: absolute;
    top: 200px;
    left: 30px;
    padding-left: 20px;
    background-color: transparent;
    width: 300px;
    border: none;
    color: #fff;
    border-bottom: 1px solid #eee;
    transition: all 0.5s;
    z-index: 10
}

.search-option .inputs input:focus {
    box-shadow: none;
    outline: none;
    z-index: 10
}

.search-option:hover {
    border-radius: 0px;
    width: 100%;
    left: 0px
}

.search-option:hover .inputs {
    opacity: 1
}

.search-option:hover .first-search {
    left: 27px;
    top: 25px;
    font-size: 15px
}

.search-option:hover .inputs input {
    top: 20px
}

.search-option .share {
    position: absolute;
    right: 20px;
    top: 22px
}
.buttons .btn {
    height: 50px;
    width: 150px;
    border-radius: 0px !important
}
.product-content{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}
    </style>
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
                                                        src="{{$item->model->images->where('color_id',$item->options[1])->first()->image}}"
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
<script src="{{asset('dist/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('dist/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('dist/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('dist/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('dist/js/jquery.dd.min.js')}}"></script>
<script src="{{asset('dist/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('dist/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('dist/js/main.js')}}"></script>
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
