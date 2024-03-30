@extends('layouts.admindashboard');
@section('content')
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <div class="row g-3">
                <div class="col-lg-12 col-md-12">
                </div>
                <div class="tab-content mt-1">
                    <div class="tab-pane fade show active" id="summery-today">
                        <div class="row g-1 g-sm-3 mb-3 row-deck">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div
                                        class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">Customers</span>
                                            <div><span class="fs-6 fw-bold me-2">{{$customers}}</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div
                                        class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">Order</span>
                                            <div><span class="fs-6 fw-bold me-2">{{$orders}}</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div
                                        class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">Total Sale</span>
                                            <div><span class="fs-6 fw-bold me-2">{{$sale}}.00</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div
                                        class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">Visitors</span>
                                            <div><span class="fs-6 fw-bold me-2">{{$visitors}}</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-users-social fs-3 color-light-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div
                                        class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">Total Products</span>
                                            <div><span class="fs-6 fw-bold me-2">{{$products}}</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-bag fs-3 color-light-orange"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection()
