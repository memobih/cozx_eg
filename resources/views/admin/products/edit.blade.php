@extends('layouts.admindashboard')
@section('content');
<!-- main body area -->
<form action="{{route('product.update',['product'=>$product->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <!-- Body: Body -->
    <div class="body d-flex py-3">
        <div class="container-xxl">

            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Products Edit</h3>
                        <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
                    </div>
                </div>
            </div>
        </div>



    </div> <!-- Row end  -->

    <div class="row g-3 mb-3">
        <div class="col-xl-4 col-lg-4">
            <div class="sticky-lg-top">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">code </h6>
                    </div>

                    <div class="card-body">
                        <div class="row g-6 align-items-center">
                            <div class="col-md-12">
                                <label class="form-label">Product code</label>
                                <input type="text" value="{{$product->code}}" name="code" class="form-control">
                            </div>
                            @error('code')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Categories</h6>
                    </div>
                    <div class="card-body">
                        <label class="form-label">Categories Select</label>
                        <select class="form-select" name="category_id" size="1" aria-label="size 1 select example">
                            <option value="{{$product->category_id}}">category</option>
                            @foreach($categories as $category)
                                <option value='{{$category->id}}'>{{$category->name}}</option>
                            @endforeach
                        </select>
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
                        <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <input type="text"  value="{{$product->name}}" name="name" class="form-control">
                            <br>
                            @error('name')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Product Description</label><br>
                            <div id="editor">
                                <input type="text"  value="{{$product->description}}" name="description" class="form-control">
                            </div>
                            @error('description')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                    <h6 class="mb-0 fw-bold ">Image</h6>
                </div>
                <div class="card-body">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-12">
                            <label class="form-label">Product Images Upload</label>
                            <small class="d-block text-muted mb-2">Only portrait or square image,
                                2M max and 2000px max-height.</small>
                            <input type="file" id="input-file-to-destroy"  name="image" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
@endsection()
