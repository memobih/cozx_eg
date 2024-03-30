@extends('layouts.admindashboard')
<!-- main body area -->

<!-- Body: Body -->
@section('content')
    <form method="post" action="{{route('homepage.store')}}" >
        @csrf
        <div class="body d-flex py-3">
            <div class="container-xxl">

                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0"></h3>
                            <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="container">
                <div class="row d-flex align-items-center">
                <div class=" g-3 mb-3">
                    <div class="col-xl-4 col-lg-4">
                        <div class="sticky-lg-top">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-6 align-items-center">
                                        <div class="col-md-12">
                                            <label>category 1</label>
                                            <select class="form-select" name="category_1" size="1" aria-label="size 1 select example">
                                                @foreach($categories as $category)
                                                    <option value='{{$category->id}}'>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-3 mb-3">
                    <div class="col-xl-4 col-lg-4">
                        <div class="sticky-lg-top">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-6 align-items-center">
                                        <div class="col-md-12">
                                            <label>category 2</label>
                                            <select class="form-select" name="category_2" size="1" aria-label="size 1 select example">
                                                @foreach($categories as $category)
                                                    <option value='{{$category->id}}'>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-3 mb-3">
                    <div class="col-xl-4 col-lg-4">
                        <div class="sticky-lg-top">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-6 align-items-center">
                                        <div class="col-md-12">
                                            <label>category 3</label>
                                            <select class="form-select" name="category_3" size="1" aria-label="size 1 select example">
                                                @foreach($categories as $category)
                                                    <option value='{{$category->id}}'>{{$category->name}}</option>
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
                </div>
            </div>
        </div>
    </form>
@endsection
