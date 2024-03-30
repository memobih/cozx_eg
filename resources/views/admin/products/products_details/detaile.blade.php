@extends('admin.products.show')
@section('content')
    <table class="table table-hover table-light color-000">
        <form class="col-md-8" method="post" action="{{route('productDetail.store')}}">
            @csrf
            <div class="row">
                <div class="col-2">
                    <select class="form-select" name="color_id" size="1"
                            aria-label="size 1 select example">
                        <option value="">color</option>
                        @foreach($colors as $color)
                            <option value="{{$color->id}}">{{$color->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2">
                    <select class="form-select" name="size_id" size="1"
                            aria-label="size 1 select example">
                        <option value="">size</option>
                        @foreach($sizes as $size)
                            <option value="{{$size->id}}">{{$size->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="text" name="quantity" placeholder="quantity"
                           class="form-control">
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
            <th scope="col">save</th>
            <th scope="col">delete</th>

        </tr>
        </thead>
        <tbody>
        @foreach($productDetails as $detail)
            <tr>
                <th scope="row">1</th>
                <td>{{$detail->color->name}}</td>
                <td>{{$detail->size->name}}</td>
                <form method="post"   action="{{route('productDetail.update',['productDetail'=>$detail->id])}}">
                    @csrf
                    @method('put')
                <td><input type="text" name="quantity" value="{{$detail->quantity}}"</td>
                    <td>  <input type="submit" class="btn btn-primary" value="save"></td>
                </form>
                <td>
                    <form method="post"
                          action="{{route('productDetail.destroy',['productDetail'=>$detail->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
