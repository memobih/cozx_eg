@extends('layouts.admindashboard')
<!-- main body area -->
@section('content')
    <form method="post" action="{{route('offer.update',['offer'=>$offer->id])}}"><!-- Body: Body -->
        @csrf
        @method('put')
        <div class="body d-flex py-3">
            <div class="container-xxl">

                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div
                            class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Offer Add</h3>
                            <button type="submit"
                                    class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save
                            </button>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <div class="row g-3 mb-3">
                    <div class="col-xl-4 col-lg-4">
                        <div class="sticky-lg-top">
                            <div class="card mb-3">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Product code</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-6 align-items-center">
                                        <div class="col-md-12">
                                            <label class="form-label">code</label>
                                            <input type="text" value="{{$offer->product_code}}" name="product_code"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Basic information</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label">new price</label>
                                        <input type="text" value="{{$offer->discount}}" name="discount"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label">Categories Select</label>

                                        <select class="form-select" name="color_id" size="1"
                                                aria-label="size 1 select example">
                                            <option value="">Colors</option>
                                            @foreach($colors as $color)
                                                @if($color->id==$offer->color_id)
                                                    <option  selected value='{{$color->id}}'>{{$color->name}}</option>

                                                @else
                                                    <option value='{{$color->id}}'>{{$color->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection()
