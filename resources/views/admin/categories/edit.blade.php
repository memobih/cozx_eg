@extends('layouts.admindashboard')
<!-- main body area -->
@section('content')
    <form method="post" action="{{route('Category.update',['Category'=>$category->id])}}" enctype="multipart/form-data"><!-- Body: Body -->
        @csrf
        @method('put')
        <div class="body d-flex py-3">
            <div class="container-xxl">

                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">category Add</h3>
                            <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <div class="row g-3 mb-3">
                    <div class="col-xl-4 col-lg-4">
                        <div class="sticky-lg-top">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">name</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-6 align-items-center">
                                        <div class="col-md-12">
                                            <label class="form-label">category name</label>
                                            <input type="text" name="name" value="{{$category->name}}" class="form-control">
                                        </div>
                                        @error('name')
                                        <span style="color:red">{{$message}}</span>
                                        @enderror
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
                                        <label class="form-label">category description</label>
                                        <input type="text"  value="{{$category->description}}" name="description" class="form-control">
                                        <br>
                                        @error('description')
                                        <span style="color:red">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <img alt="image" src="{{Storage::url($category->image)}}" height="50" width="50">
                                        <label class="form-label">category image</label><br>
                                        <div id="editor">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        @error('image')
                                        <span style="color:red">{{$message}}</span>
                                        @enderror
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
