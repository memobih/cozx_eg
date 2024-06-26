@extends('layouts.show')
@section('style')
    <style>
.card{
    margin: auto;
    width: 38%;
    max-width:600px;
    padding: 4vh 0;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-top: 3px solid rgb(252, 103, 49);
    border-bottom: 3px solid rgb(252, 103, 49);
    border-left: none;
    border-right: none;
}
@media(max-width:768px){
    .card{
        width: 90%;
    }
}
.title{
    color: rgb(252, 103, 49);
    font-weight: 600;
    margin-bottom: 2vh;
    padding: 0 8%;
    font-size: initial;
}
#details{
    font-weight: 400;
}
.info{
    padding: 5% 8%;
}
.info .col-5{
    padding: 0;
}
#heading{
    color: grey;
    line-height: 6vh;
}
.pricing{
    background-color: #ddd3;
    padding: 2vh 8%;
    font-weight: 400;
    line-height: 2.5;
}
.pricing .col-3{
    padding: 0;
}
.total{
    padding: 2vh 8%;
    color: rgb(252, 103, 49);
    font-weight: bold;
}
.total .col-3{
    padding: 0;
}
#progressbar {
    margin-bottom: 3vh;
    overflow: hidden;
    color: rgb(252, 103, 49);
    padding-left: 0px;
    margin-top: 3vh
}

#progressbar li {
    list-style-type: none;
    font-size: x-small;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
    color: rgb(160, 159, 159);
}

#progressbar #step1:before {
    content: "";
    color: rgb(252, 103, 49);
    width: 5px;
    height: 5px;
    margin-left: 0px !important;
    /* padding-left: 11px !important */
}

#progressbar #step2:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-left: 32%;
}

#progressbar #step3:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-right: 32% ;
    /* padding-right: 11px !important */
}

#progressbar #step4:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-right: 0px !important;
    /* padding-right: 11px !important */
}

#progressbar li:before {
    line-height: 29px;
    display: block;
    font-size: 12px;
    background: #ddd;
    border-radius: 50%;
    margin: auto;
    z-index: -1;
    margin-bottom: 1vh;
}

#progressbar li:after {
    content: '';
    height: 2px;
    background: #ddd;
    position: absolute;
    left: 0%;
    right: 0%;
    margin-bottom: 2vh;
    top: 1px;
    z-index: 1;
}
.progress-track{
    padding: 0 8%;
}
#progressbar li:nth-child(2):after {
    margin-right: auto;
}

#progressbar li:nth-child(1):after {
    margin: auto;
}

#progressbar li:nth-child(3):after {
    float: left;
    width: 68%;
}
#progressbar li:nth-child(4):after {
    margin-left: auto;
    width: 132%;
}

#progressbar  li.active{
    color: black;
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: rgb(252, 103, 49);
}
    </style>
@endsection
@section('content')
    <div class="row">
<div class="card col-12">
    <div class="title">Purchase Reciept</div>
    <div class="info">
        <div class="row">
            <div class="col-7">
                <span id="heading">Date</span><br>
                <span id="details">{{$order->created_at}}</span>
            </div>
            <div class="col-5 pull-right">
                <span id="heading">Order No.</span><br>
                <span id="details">{{$order->id}}</span>
            </div>
        </div>
    </div>
    <div class="pricing">
        @foreach($orderDetails as $detail)
        <div class="row">
            <div class="col-9">
                <span id="name">{{$detail->product->name}}</span>
            </div>
            <div class="col-3">
                <span id="price">{{$detail->price}}EGP</span>
            </div>
        </div>
        @endforeach
        <div class="row">
            <div class="col-9">
                <span id="name">Shipping</span>
            </div>
            <div class="col-3">
                <span id="price">{{$shipping}}EGP</span>
            </div>
        </div>
    </div>

    <div class="total">
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3"><big>{{($order->price -($discount/100*$order->price))+$shipping}}EGP</big></div>
        </div>
    </div>
    <div class="tracking">
        <div class="title">Tracking Order</div>
    </div>
    <div class="progress-track">
        <ul id="progressbar">
            <li class="step0 active " id="step1">{{$order->statue}}</li>
        </ul>
    </div>

</div>
    </div>
@endsection
