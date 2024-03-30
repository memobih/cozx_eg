<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>cozx Dashboard </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/adminstyle/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminstyle/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminstyle/ebazar.style.min.css')}}">
</head>
<body class="bg-lavender-white">
<div id="ebazar-layout" class="theme-blue col-12">
    <div class="sidebar px-4 py-4 py-md-4 me-0 bg-lavender-purple">
        <div class="d-flex flex-column h-100">
            <a href="{{route('admin.index')}}" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <i class="fa fa-shopping-bag fs-4"></i>
                    </span>
                <span class="logo-text">cozx</span>
            </a>
            <ul class="menu-list flex-grow-1 mt-3"><a href="{{route('admin.index')}}">
                        <span class="color-900">cozx</span></a></li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#prices" href="#">
                        <i class=""></i> <span>prices</span> <span
                            class="arrow fa fa-chevron-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="prices">
                        <li><a class="ms-link" href="{{route('productPrice.show',['productPrice'=>$product->code])}}">Prices</a></li>
                    </ul>
                </li>

                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-product" href="#">
                        <i class="color-900"></i> <span>images</span> <span
                            class="arrow fa fa-chevron-down ms-auto text-end fs-5"></span></a>
                    <ul class="sub-menu collapse" id="menu-product">
                        <li><a class="ms-link" href="{{route('productImage.show',['productImage'=>$product->code])}}">Images</a></li>

                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#categories" href="#">
                        <i class=""></i> <span>details</span> <span
                            class="arrow fa fa-chevron-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="categories">
                        <li><a class="ms-link" href="{{route('productDetail.show',['productDetail'=>$product->code])}}">Details</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="main px-lg-4 px-md-4" xmlns="http://www.w3.org/1999/html">
        <div class="header">
            <nav class="navbar py-4">
                <div class="container-xxl">
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                            <div class="u-info me-2">
                                <p class="mb-0 text-end line-height-sm "><span
                                        class="font-weight-bold">{{auth()->user()->firstname}}</span></p>
                                <small>Admin Profile</small>
                            </div>
                        </div>
                        <div class="setting ms-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#Settingmodal"><i
                                    class="icofont-gear-alt fs-5"></i></a>
                        </div>
                    </div>
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">

                    </div>
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#mainHeader">
                        <span class="fa fa-bars"></span>
                    </button>
                </div>
            </nav>
        </div>
        @yield('content')
    </div>


</div>

</body>
<script src="{{asset('dist/js/adminjs/libscripts.bundle.js')}}"></script>
<script src="{{asset('dist/js/adminjs/apexcharts.bundle.js')}}"></script>
<script src="{{asset('dist/js/adminjs/dataTables.bundle.js')}}"></script> -->
<script src="{{asset('dist/js/adminjs/template.js')}}"></script>
<script src="{{asset('dist/js/adminjs/index.js')}}"></script>
<script>
    $('#myDataTable')
        .addClass('nowrap')
        .dataTable({
            responsive: true,
            columnDefs: [{
                targets: [-1, -3],
                className: 'dt-body-right'
            }]
        });
</script>


