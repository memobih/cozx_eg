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
<body>
<div id="ebazar-layout" class="theme-blue">
    <div class="sidebar px-4 py-4 py-md-4 me-0 bg-lavender">
        <div class="d-flex flex-column ">
            <a href="{{route('admin.index')}}" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <i class="fa fa-shopping-bag fs-4"></i>
                    </span>
                <span class="logo-text">cozx</span>
            </a>
            <!-- Menu: main ul -->
            <ul class="menu-list flex-grow-1 mt-3">
                <li><a class="m-link active" href="{{route('admin.index')}}"><i class=" fs-5"></i>
                        <span>cozx</span></a></li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-product" href="#">
                        <i class=""></i> <span>Products</span> <span
                            class="arrow fa fa-chevron-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-product">
                        <li><a class="ms-link" href="{{route('product.index')}}">Product List</a></li>
                        <li><a class="ms-link" href="{{route('product.create')}}">Product Add</a></li>
                        <li><a class="ms-link" href="{{route('size.create')}}">add size</a></li>
                        <li><a class="ms-link" href="{{route('color.create')}}">add colour</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#categories" href="#">
                        <i class=""></i> <span>Categories</span> <span
                            class="arrow fa fa-chevron-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="categories">
                        <li><a class="ms-link" href="{{route('Category.index')}}">Categories List</a></li>
                        <li><a class="ms-link" href="{{route('Category.create')}}">Categories Add</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-order" href="#">
                        <i class=""></i> <span>Orders</span> <span
                            class="arrow fa fa-chevron-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-order">
                        <li><a class="ms-link" href="{{route('order.index')}}">Orders List</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-sale" href="#">
                        <i class=""></i> <span>Sales Promotion</span> <span
                            class="arrow fa fa-chevron-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-sale">
                        <li><a class="ms-link" href="{{route('coupons.index')}}">Coupons List</a></li>
                        <li><a class="ms-link" href="{{route('coupons.create')}}">Coupons Add</a></li>
                        <li><a class="ms-link" href="{{route('offer.index')}}">Offers List</a></li>
                        <li><a class="ms-link" href="{{route('offer.create')}}">Offers Add</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-inventory" href="#">
                        <i class=""></i> <span>home</span> <span
                            class="arrow fa fa-chevron-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-inventory">
                        <li><a class="ms-link" href="{{route('homepage.index')}}">home page</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a data-bs-target="#menu-inventory" href="{{route('system.index')}}">System</a>
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
<script src="{{asset('dist/js/adminjs/libscripts.bundle.js')}}"></script>

<!-- Plugin Js -->
<script src="{{asset('dist/js/adminjs/apexcharts.bundle.js')}}"></script>
<script src="{{asset('dist/js/adminjs/dataTables.bundle.js')}}"></script>

<!-- Jquery Page Js -->
<script src="{{asset('dist/js/adminjs/template.js')}}"></script>
<script src="{{asset('dist/js/adminjs/index.js')}}"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&callback=myMap"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>
