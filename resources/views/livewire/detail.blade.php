<div>
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

        <!-- project css file  -->
        <link rel="stylesheet" href="{{asset('dist/css/adminstyle/ebazar.style.min.css')}}">
    </head>
    <body class="bg-lavender-purple">
    <div id="ebazar-layout" class="theme-blue col-12">
        <div class="sidebar px-4 py-4 py-md-4 me-0 bg-lavender-purple" style="width: 100%">
            <div class="d-flex flex-column h-100">
                <a href="admin" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <i class="fa fa-shopping-bag fs-4"></i>
                    </span>
                    <span class="logo-text">cozx</span>
                </a>
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link active " href="#"><i class=" fs-5"></i>
                            <span class="color-900">cozx</span></a></li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#categories" href="#">
                            <i class=""></i> <span>prices</span> <span
                                class="arrow fa fa-chevron-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="categories">
                            <li>
                                <table class="table table-hover table-light color-000">
                                    <form class="col-md-8" method="post" wire:submit="price">
                                        @csrf
                                        <div class="row">
                                            <div class="col-2">
                                                <select class="form-select" wire:model="color_id" size="1" aria-label="size 1 select example">
                                                    <option value="">color</option>
                                                    @foreach($colors as $color)
                                                        <option value="{{$color->id}}" >{{$color->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" wire:model="price" placeholder="price" class="form-control">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" value="new" class="btn btn-success">
                                            </div>
                                        </div>
                                        <input type="hidden" name="product_code" wire:model="product_code" value="{{$product->code}}">

                                    </form>

                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">color</th>
                                        <th scope="col">price</th>
                                        <th scope="col">delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($prices as $price)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{$price->color->name}}</td>
                                            <td>{{$price->price}}</td>
                                            <td>
                                                <form method="post" action="{{route('productPrice.destroy',['productPrice'=>$price->id])}}">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </li>

                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-product" href="#">
                            <i class="color-900"></i> <span>images</span> <span
                                class="arrow fa fa-chevron-down ms-auto text-end fs-5"></span></a>
                        <ul class="sub-menu collapse" id="menu-product">
                            <li>
                                <form class="col-md-8" method="post" action="{{route('productImage.store')}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-3">
                                            <select class="form-select" name="color_id" size="1" aria-label="size 1 select example">
                                                <option value="">color</option>
                                                @foreach($colors as $color)
                                                    <option value="{{$color->id}}">{{$color->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="editor">
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <input type="submit" value="new" class="btn btn-success">
                                        </div>
                                        <input type="hidden" name="product_code" value="{{$product->code}}">
                                    </div>
                                </form>
                                <table class="table col-5 table-hover table-light color-000">

                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">color</th>
                                        <th scope="col">image</th>
                                        <th scope="col">delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productImages as $image)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{$image->color->name}}</td>
                                            <td><img src="{{\Illuminate\Support\Facades\Storage::url($image->image)}}"></td>
                                            <td>
                                                <form method="post" action="{{route('productImage.destroy',['productImage'=>$image->id])}}">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#categories" href="#">
                            <i class=""></i> <span>details</span> <span
                                class="arrow fa fa-chevron-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="categories">
                            <li>
                                <table class="table table-hover table-light color-000">
                                    <form class="col-md-8" method="post" action="{{route('productDetail.store')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-2">
                                                <select class="form-select" name="color_id" size="1" aria-label="size 1 select example">
                                                    <option value="">color</option>
                                                    @foreach($colors as $color)
                                                        <option value="{{$color->id}}">{{$color->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <select class="form-select" name="size_id" size="1" aria-label="size 1 select example">
                                                    <option value="">size</option>
                                                    @foreach($sizes as $size)
                                                        <option value="{{$size->id}}">{{$size->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" name="quantity" placeholder="quantity" class="form-control">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" value="new" class="btn btn-success">
                                            </div>
                                        </div>
                                        <input type="hidden" name="product_code" value="{{$product->code}}">

                                    </form>

                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">color</th>
                                        <th scope="col">size</th>
                                        <th scope="col">quantities</th>
                                        <th scope="col">delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productDetails as $detail)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{$detail->color->name}}</td>
                                            <td>{{$detail->size->name}}</td>
                                            <td>{{$detail->quantity}}</td>
                                            <td>
                                                <form method="post" action="{{route('productDetail.destroy',['productDetail'=>$detail->id])}}">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
            <span class="fa fa-bars"></span>
        </button>
    </div>

    </body>
    <script src="{{asset('dist/js/adminjs/libscripts.bundle.js')}}"></script>

    <!-- Plugin Js -->
    <script src="{{asset('dist/js/adminjs/apexcharts.bundle.js')}}"></script>
    <script src="{{asset('dist/js/adminjs/dataTables.bundle.js')}}"></script>

    <!-- Jquery Page Js -->
    <script src="{{asset('dist/js/adminjs/template.js')}}"></script>
    <script src="{{asset('dist/js/adminjs/index.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&callback=myMap">
    </script>
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

</div>
