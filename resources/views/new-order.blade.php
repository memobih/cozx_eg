<p>
    <h1> new order !!! </h1>
<p>order num #{{$order->id}}</p>
orders details :
<br>
@foreach($orderDetails as $detail )
    code : {{$detail->product->code}}
    <br>
     size :{{$detail->size->name}}]
    <br>
        color :{{$detail->color->name}}
        <br>
    --------------------------------------------------------------------------------------
    @endforeach
</p>
