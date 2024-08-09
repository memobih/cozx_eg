@extends('layouts.admindashboard')
@section('content')
    ;

    <!-- Body: Body -->
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Order Details: #Order-{{$order->id}}</h3>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                <div class="col">
                    <div class="alert-success alert mb-0">
                        <div class="d-flex align-items-center">
                            <div class="avatar rounded no-thumbnail bg-success text-light"><i
                                    class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></div>
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="h6 mb-0">Order Created at</div>
                                <span class="small">{{$order->created_at}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="alert-danger alert mb-0">
                        <div class="d-flex align-items-center">
                            <div class="avatar rounded no-thumbnail bg-danger text-light"><i class="fa fa-user fa-lg"
                                                                                             aria-hidden="true"></i>
                            </div>
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="h6 mb-0">Name</div>
                                <span class="small">{{$order->user->firstname}} {{$order->user->lastname}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="alert-warning alert mb-0">
                        <div class="d-flex align-items-center">
                            <div class="avatar rounded no-thumbnail bg-warning text-light"><i
                                    class="fa fa-envelope fa-lg" aria-hidden="true"></i></div>
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="h6 mb-0">Email</div>
                                <span class="small">{{$order->user->email}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="alert-info alert mb-0">
                        <div class="d-flex align-items-center">
                            <div class="avatar rounded no-thumbnail bg-info text-light"><i
                                    class="fa fa-phone-square fa-lg" aria-hidden="true"></i></div>
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="h6 mb-0">Contact No</div>
                                <span class="small">{{$order->user->phone}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row g-3 mb-3 row-cols-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-3 row-deck">
                <div class="col">
                    <div class="card auth-detailblock">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Delivery Address</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label col-6 col-sm-5">Address:</label>
                                    <span><strong>{{$order->user->address}}</strong></span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label col-6 col-sm-5">Phone:</label>
                                    <span><strong>{{$order->user->phone}}</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-xl-12 col-xxl-8">
                    <div class="card">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Order Summary</h6>
                        </div>
                        <div class="card-body">
                            <div class="product-cart">
                                <div class="checkout-table table-responsive">
                                    <table id="myCartTable" class="table display dataTable table-hover align-middle"
                                           style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="product">Product Image</th>
                                            <th>Product code</th>
                                            <th>Size</th>
                                            <th>Product Name</th>
                                            <th class="quantity">Quantity</th>
                                            <th class="price">Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orderDetails as $detail)
                                            <tr>
                                                <td>
                                                    <img
                                                        src="{{$detail->product->images->where('color_id',$detail->color_id)->first()->image}}"
                                                        class="avatar rounded lg" alt="Product">
                                                </td>
                                                <td>
                                                    <h6 class="title"><span
                                                            class="d-block fs-6 text-primary">{{$detail->product->code}}</span>
                                                    </h6>
                                                </td>
                                                <td>
                                                    <h6 class="title"><span
                                                            class="d-block fs-6 text-primary">{{$detail->size->name}}</span>
                                                    </h6>
                                                </td>
                                                <td>
                                                    <h6 class="title"><span
                                                            class="d-block fs-6 text-primary">{{$detail->product->name}}</span>
                                                    </h6>
                                                </td>

                                                <td>
                                                    {{$detail->quantity}}
                                                </td>
                                                <td>
                                                    <p class="price">{{$detail->price}}.00</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div
                                    class="checkout-coupon-total checkout-coupon-total-2 d-flex flex-wrap justify-content-end">
                                    <div class="checkout-total">
                                        <div class="single-total">
                                            <p class="value">Subotal Price:</p>
                                            <p class="price">{{$order->price}}.00</p>
                                        </div>

                                        <div class="single-total">
                                            <p class="value">Discount (-):</p>
                                            <p class="price">%{{$discount}}</p>
                                        </div>
                                        @if(!empty($order->coupon->coupon->name))
                                        <div class="single-total">
                                            <p class="value">coupon</p>
                                            <p class="price">{{$order->coupon->coupon->name}}</p>
                                        </div>
                                        @endif
                                        <div class="single-total total-payable">
                                            <p class="value">Total :</p>
                                            <p class="price">${{$order->price-(($discount/100)*$order->price)}}.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-xxl-4">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Status Orders</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{route('order.update',['order'=>$order->id])}}" method="post">
                                @csrf
                                @method('put')
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label">Order Status</label>
                                        <select class="form-select" name="statue" aria-label="Default select example">
                                            <option value="Progress" checked >Progress</option>
                                            <option value="Completed">Completed</option>
                                            <option value="shipped">shipped</option>
                                            <option value="placed">placed</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary mt-4 text-uppercase" value="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- Row end  -->
        </div>
    </div>

    <!-- Modal Custom Settings-->
    <div class="modal fade right" id="Settingmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog  modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Custom Settings</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom_setting">
                    <!-- Settings: Color -->
                    <div class="setting-theme pb-3">
                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i
                                class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings</h6>
                        <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                            <li data-theme="indigo">
                                <div class="indigo"></div>
                            </li>
                            <li data-theme="tradewind">
                                <div class="tradewind"></div>
                            </li>
                            <li data-theme="monalisa">
                                <div class="monalisa"></div>
                            </li>
                            <li data-theme="blue" class="active">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                            <li data-theme="red">
                                <div class="red"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-gradient py-3">
                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i
                                class="icofont-paint fs-4 me-2 text-primary"></i>Sidebar Gradient</h6>
                        <div class="form-check form-switch gradient-switch pt-2 mb-2">
                            <input class="form-check-input" type="checkbox" id="CheckGradient">
                            <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar )</label>
                        </div>
                    </div>
                    <!-- Settings: Template dynamics -->
                    <div class="dynamic-block py-3">
                        <ul class="list-unstyled choose-skin mb-2 mt-1">
                            <li data-theme="dynamic">
                                <div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div>
                            </li>
                        </ul>
                        <div class="dt-setting">
                            <ul class="list-group list-unstyled mt-1">
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label>Primary Color</label>
                                    <button id="primaryColorPicker"
                                            class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label>Secondary Color</label>
                                    <button id="secondaryColorPicker"
                                            class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted">Chart Color 1</label>
                                    <button id="chartColorPicker1"
                                            class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted">Chart Color 2</label>
                                    <button id="chartColorPicker2"
                                            class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted">Chart Color 3</label>
                                    <button id="chartColorPicker3"
                                            class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted">Chart Color 4</label>
                                    <button id="chartColorPicker4"
                                            class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted">Chart Color 5</label>
                                    <button id="chartColorPicker5"
                                            class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Settings: Font -->
                    <div class="setting-font py-3">
                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i
                                class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                        <ul class="list-group font_setting mt-1">
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-poppins"
                                           value="font-poppins">
                                    <label class="form-check-label" for="font-poppins">
                                        Poppins Google Font
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-opensans"
                                           value="font-opensans" checked="">
                                    <label class="form-check-label" for="font-opensans">
                                        Open Sans Google Font
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-montserrat"
                                           value="font-montserrat">
                                    <label class="form-check-label" for="font-montserrat">
                                        Montserrat Google Font
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-mukta"
                                           value="font-mukta">
                                    <label class="form-check-label" for="font-mukta">
                                        Mukta Google Font
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Settings: Light/dark -->
                    <div class="setting-mode py-3">
                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i
                                class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                        <ul class="list-group list-unstyled mb-0 mt-1">
                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                <div class="form-check form-switch theme-switch mb-0">
                                    <input class="form-check-input" type="checkbox" id="theme-switch">
                                    <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                <div class="form-check form-switch theme-high-contrast mb-0">
                                    <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                    <label class="form-check-label" for="theme-high-contrast">Enable High
                                        Contrast</label>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                <div class="form-check form-switch theme-rtl mb-0">
                                    <input class="form-check-input" type="checkbox" id="theme-rtl">
                                    <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer justify-content-start">
                    <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary lift">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    </div>

    </div>
@endsection()
