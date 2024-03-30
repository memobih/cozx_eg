@extends('layouts.show')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-10  mb-4">
            <div class="section-title text-center ">
                @if(! ($orders->count()) )
                    <p>No orders exists</p>
                    <div class="cart-buttons">
                        <a href="{{route('shop.show',['category_id'=>0])}}" class="primary-btn continue-shop">Continue shopping</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="career-search mb-60">

@foreach($orders as $order )
                    <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                        <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                            <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                cozx
                            </div>
                            <div class="job-content">
                                <h5 class="text-center text-md-left">Order no: {{$order->id}}</h5>
                                <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                    <li class="mr-md-4">
                                        <i class="zmdi zmdi-pin mr-2"></i> {{$order->items->count()}}xProducts
                                    </li>
                                    <li class="mr-md-4">
                                        <i class="zmdi zmdi-money mr-2"></i> {{$order->created_at}}
                                    </li>
                                    <li class="mr-md-4">
                                        <i class="zmdi zmdi-money mr-2"></i> {{$order->price+$shipping}}EGP
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-right my-4 flex-shrink-0">
                            <a href="{{route('track.show',['track'=>$order->id])}}" class="btn d-block w-100 d-sm-inline-block btn-light">Track now</a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('style')
    <style>


        /* ===== Career ===== */
        .career-form {
            background-color: #4e63d7;
            border-radius: 5px;
            padding: 0 16px;
        }

        .career-form .form-control {
            background-color: rgba(255, 255, 255, 0.2);
            border: 0;
            padding: 12px 15px;
            color: #fff;
        }

        .career-form .form-control::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: #fff;
        }

        .career-form .form-control::-moz-placeholder {
            /* Firefox 19+ */
            color: #fff;
        }

        .career-form .form-control:-ms-input-placeholder {
            /* IE 10+ */
            color: #fff;
        }

        .career-form .form-control:-moz-placeholder {
            /* Firefox 18- */
            color: #fff;
        }

        .career-form .custom-select {
            background-color: rgba(255, 255, 255, 0.2);
            border: 0;
            padding: 12px 15px;
            color: #fff;
            width: 100%;
            border-radius: 5px;
            text-align: left;
            height: auto;
            background-image: none;
        }

        .career-form .custom-select:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .career-form .select-container {
            position: relative;
        }

        .career-form .select-container:before {
            position: absolute;
            right: 15px;
            top: calc(50% - 14px);
            font-size: 18px;
            color: #ffffff;
            content: '\F2F9';
            font-family: "Material-Design-Iconic-Font";
        }

        .filter-result .job-box {
            background:#fff;
            -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
            box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
            border-radius: 10px;
            padding: 10px 35px;
        }

        ul {
            list-style: none;
        }

        .list-disk li {
            list-style: none;
            margin-bottom: 12px;
        }

        .list-disk li:last-child {
            margin-bottom: 0;
        }

        .job-box .img-holder {
            height: 65px;
            width: 65px;
            background-color: #412a2a;
            background-image: -webkit-gradient(linear, left top, right top, from(rgb(٦٥, ٤٢, ٤٢)), to(#412a2a));
            background-image: linear-gradient(to right, rgb(٦٥, ٤٢, ٤٢) 0%, #412a2a 100%);
            font-family: "Open Sans", sans-serif;
            color: #fff;
            font-size: 22px;
            font-weight: 700;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 65px;
        }

        .career-title {
            background-color: #4e63d7;
            color: #fff;
            padding: 15px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
            background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
        }

        .job-overview {
            -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
            box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
            border-radius: 10px;
        }

        @media (min-width: 992px) {
            .job-overview {
                position: -webkit-sticky;
                position: sticky;
                top: 70px;
            }
        }

        .job-overview .job-detail ul {
            margin-bottom: 28px;
        }

        .job-overview .job-detail ul li {
            opacity: 0.75;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .job-overview .job-detail ul li i {
            font-size: 20px;
            position: relative;
            top: 1px;
        }

        .job-overview .overview-bottom,
        .job-overview .overview-top {
            padding: 35px;
        }

        .job-content ul li {
            font-weight: 600;
            opacity: 0.75;
            border-bottom: 1px solid #ccc;
            padding: 10px 5px;
        }

        @media (min-width: 768px) {
            .job-content ul li {
                border-bottom: 0;
                padding: 0;
            }
        }

        .job-content ul li i {
            font-size: 20px;
            position: relative;
            top: 1px;
        }

        .mb-30 {
            margin-bottom: 30px;
        }
    </style>
@endsection
