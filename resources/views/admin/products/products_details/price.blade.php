@extends('admin.products.show')
@section('content')
<table class="table table-hover table-light color-000">
    <form class="col-md-8" method="post" action="{{route('productPrice.store')}}">
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
            <div class="col-md-2">
                <input type="text" name="price" placeholder="price" class="form-control">
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
                <form method="post"
                      action="{{route('productPrice.destroy',['productPrice'=>$price->id])}}">
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
