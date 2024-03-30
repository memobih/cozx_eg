<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Size;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;
use function PHPUnit\Framework\returnArgument;
use Cart;
class cartController extends Controller
{

    public function index()
    {
        $shipping=\App\Models\System::find(1)->shipping;
        $discount=0;
        if(!empty(session('discount'))){
            $discount=session('discount');
        }
        $cartItems = Cart::instance('cart')->content();
        return view('cart', compact('cartItems' ,'discount'  ,'shipping'));
    }

    public function addToCart(Request $request)
    {

        $data = $request->validate(
            [
                'id' => 'required|exists:products',
                'size_id' => 'required|exists:product_details,size_id',
                'color_id' => 'exists:product_prices|required',
            ]
        );
        $product = Product::find($data['id']);
        $color=Color::find($request->color_id);
        $price = $product->prices->where('color_id', $data['color_id'])->first()->price;
        if(!empty($product->offer->where('color_id' ,$data['color_id'])->first()->discount)){
            $price=$product->offer->where('color_id' ,$data['color_id'])->first()->discount;
        }
        $size=Size::find($request->size_id);
        \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->add($product->id, $product->name, "1", (int)$price, [$request->size_id, $request->color_id , $size->name , $color->name])->associate('App\Models\Product');
        toastr()->success('Successful');
        return redirect()->back();
    }

    public function updateCart(Request $request)
    {
        $options = Cart::instance('cart')->content($request->rowId)->first()->options;
        $size = $options[0];
        $color = $options[1];
        $detail = ProductDetail::select('quantity')->where('color_id', $color)->where('size_id', $size)->first();
        if ($detail->quantity < $request->quantity) {
            toastr()->error('Oops! quantity is not enough' ,'sorry');
            Cart::instance('cart')->update($request->rowId, $detail->quantity);
        } else {
            Cart::instance('cart')->update($request->rowId, $request->quantity);
            toastr()->success('Successful');
        }

        return redirect()->route('cart.index');
    }

    public function removeItem(Request $request)
    {
        Cart::instance('cart')->remove($request->rowId);
        return redirect()->back();
    }
    public function addCoupon(Request $request){
        $data=$request->validate([
            'coupon'=>'required|string|exists:coupons,name'
        ]);
        $discount=Coupon::get()->where('name' , $request->coupon)->first()->discount;
        session(['discount'=>$discount]);
        session(['coupon'=>$request->coupon]);
        return redirect()->back();
    }
}

