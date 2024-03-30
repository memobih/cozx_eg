@extends('admin.products.show')

@section('content')
<form class="col-md-8" method="post" action="{{route('productImage.store')}}"
      enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-3">
            <select class="form-select" name="color_id" size="1"
                    aria-label="size 1 select example">
                <option value="">color</option>
                @foreach($colors as $color)
                    <option value="{{$color->id}}">{{$color->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <div id="editor">
                <input type="file" name="image" class="form-control">
            </div>
        </div>

        <div class="col-md-2">
            <input type="submit" value="new" class="btn btn-success">
        </div>
        <input type="hidden" name="product_code" value="{{$product->code}}">
    </div>
</form>
<table class="table col-5 table-hover table-light color-000">

    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">color</th>
        <th scope="col">image</th>
        <th scope="col">delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($productImages as $image)
        <tr>
            <th scope="row">1</th>
            <td>{{$image->color->name}}</td>
            <td><img width="100" height="100" src="{{\Illuminate\Support\Facades\Storage::url($image->image)}}"></td>
            <td class="align-items-center">
                <form method="post"
                      action="{{route('productImage.destroy',['productImage'=>$image->id])}}">
                    @csrf
                    @method('delete')
                    <input  type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection
