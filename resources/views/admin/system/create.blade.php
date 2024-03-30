@extends('layouts.admindashboard')
<!-- main body area -->
@section('content')
    <!-- Body: Body -->
    <div class="body d-flex py-3">
        <div class="container-xxl"><!-- Row end  -->
            <div class="row g-3 mb-3">
                <div class="col-xl-6 col-lg-6">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">shipping </h6>
                        </div>
                        <form method="post" action="{{route('system.store')}}">
                            @csrf
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label">shipping</label>
                                        <input type="text" name="shipping" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <div id="editor">
                                            <input type="submit" value="update shipping" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
@endsection()
