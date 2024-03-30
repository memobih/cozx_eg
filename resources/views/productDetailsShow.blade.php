@extends('layouts.show')
@section('style')
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .hero {
            width: 100%;
        }

        .col {
            flex-basis: 45%;
        }

        .slider {
            height: 80vh;
            display: flex;
        }

        .product img {
            float: left;
            width:  100px;
            object-fit: cover;
            height: 19vh;
            margin-bottom: 9px;
            cursor: pointer;
            opacity: 0.6;
        }

        .product img:hover {
            opacity: 1;
        }

        .preview img {
            height: 100%;
        }

        p {
            margin-bottom: 20px;
        }

        .brand {
            background: #008000;
            width: fit-content;
            color: #fff;
            font-size: 12px;
            padding: 2px 5px;
        }

        h2 {
            font-size: 45px;
            color: #555;
            margin-bottom: 20px;
        }

        .rating {
            display: flex;
            height: 15px;
        }

        .rating .fa {
            color: #008000;
        }

        .price {
            color: #fe980f;
            font-size: 26px;
            font-weight: bold;
            padding-top: 10px;
        }

        input {
            width: 30px;
            border: 1px solid #ccc;
            font-weight: bold;
            text-align: center;
        }

        button {
            color: #fff;
            font-size: 15px;
            outline: none;
            border: 0;
            border-radius: 5px;
            background: #fe980f;
            padding: 10px 15px;
            box-sizing: border-box;
            cursor: pointer;
        }

        button .fa {
            margin-right: 10px;
        }

        .related {
            width: 90%;
            margin: 0 auto 40px;
        }

        .related .row {
            width: 100%;
            height: auto;
        }

        .columns {
            flex-basis: 22%;
            height: 100%;
        }

        .items img {
            width: 100%;
        }

        .details {
            margin-top: 20px;
        }

        .details p {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .details .rating {
            margin: 10px 0;
        }

        .select-size .title {
            font-weight: 1000;
            margin-bottom: 1;
        }

        .select-size .size input {
            display: none;
        }
        .select-size .size .sizes {
         margin-right: 0px;
        }

        .select-size .size div input[type="radio"]:checked + label {
            box-shadow: 0 1px 2px #75e73c;
            background-color: #412a2a;
            color: #fff;
            border-color: transparent;
        }

        .select-size .size label {
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            float: left;
            min-width: 50px !important;
            height: 35px !important;
            margin: 0;
            border: #ee3333 1px solid;
            background-color: #fff;
            font-size: 13px;
            text-align: center;
            line-height: 35px;
            white-space: nowrap;
            text-transform: uppercase;
            padding: 0 0px;
            cursor: pointer;
            margin-right: 0;
        }
        .select-size .color input {
            display: none;
        }
        .select-size .color .product img {
            margin-bottom: 9px;
            width: 100px;
            cursor: pointer;
            opacity: .6;
            height: 100px;
        }
        .select-size .color .product img:hover {
            opacity: 1;
        }
        .product {
            margin-right: 20px;
        }
        @media (max-width: 765px ){
            .slider {
                flex-direction: column;
                height: fit-content;
            }
            .product {
                order: 2;
                margin-top:  1rem;
                margin-bottom:  1rem;

            }
            .product img {
                margin-right:  1rem;

            }
        }
    </style>
@endsection
@section('content')
    <livewire:productsView :id="$id"/>
@endsection
@section('script')
<script>
    function clickme(smallImg) {
        var fullImg = document.getElementById("imagebox");
        fullImg.src = smallImg.src;
    }
</script>
    @endsection();

