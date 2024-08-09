@extends('layouts.admindashboard')
@section('content')
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Products List</h3>
                    </div>
                </div>
            </div>
            <div class="row g-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                            <tr>
                                <th>code</th>
                                <th>name</th>
                                <th>description</th>
                                <th>image</th>
                                <th>category name</th>
                                <th>Detail</th>
                                <th class="align-items-center">edit</th>
                                <th class="align-items-center">delete</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->code}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td><img src='{{product->image}}' class="avatar lg rounded me-2"
                                             alt="profile-image"></td>
                                    @if(!empty($product->category->name))
                                        <td>{{$product->category->name}}</td>
                                    @endif
                                    <td><a href="{{route('product.show',['product'=>$product->id])}}"
                                           class="btn btn-primary">Details</a></td>
                                    <td class="row"><a href="{{route('product.edit',['product'=>$product->id])}}"
                                                       class="btn btn-primary"> edit</a>
                                    </td>
                                    <form  method="post"
                                          action="{{route('product.destroy',['product'=>$product->id])}}">
                                        @csrf
                                        @method('delete')
                                        <td><button  value="Delete" class="btn btn-danger" > delete</button></td>
                                    </form>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
    </div>
    </div>

    <!-- Modal Custom Settings-->
    </div>
@endsection()
