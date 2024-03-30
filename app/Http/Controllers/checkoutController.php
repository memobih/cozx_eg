<?php

namespace App\Http\Controllers;

use App\Mail\NewOrder;
use App\Models\Coupon;
use App\Models\CouponOrder;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\System;
use app\Models\User;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Mail;

class checkoutController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shipping = System::find(1)->shipping;
        $discount = 0;
        if (!empty(session('discount')))
            $discount = session('discount');
        if (empty(Cart::instance('cart')->content()->count())) {
            toastr()->info('Add products to your cart ', 'cart');
            return redirect()->back();
        }
        return view('checkout', compact('discount', 'shipping'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (empty(auth()->user())) {
            return redirect()->route('login');
        }
        $collection = Cart::instance('cart')->content();
        foreach ($collection as $item) {
            $product = Product::find($item->id);
            $size = $item->options[0];
            $color = $item->options[1];
            $detail = $product->details->where('color_id', $color)->where('size_id', $size)->first();

            if (!empty($detail)) {
                $price = $product->prices->where('color_id', $color)->first()->price;

                if (!empty($product->offer->where('color_id', $color)->first()->discount)) {
                    $price = $product->offer->where('color_id', $color)->first()->discount;
                }
                $newQuantity['quantity'] = $detail->quantity;
                if ($detail->quantity < $item->qty) {
                    toastr()->error('sorry choose  new product', 'sorry');
                    Cart::instance('cart')->remove($item->rowId);
                    return redirect()->route('cart.index');
                }
            }
        }

        $order['user_id'] = auth()->user()->id;
        $order['price'] = (float)str_replace(',', '', Cart::instance('cart')->subtotal()) + 60;
        $order['isPayed'] = 0;
        $order['statue'] = "progress";
        $newOrder = Order::create($order);
        $discount = 0;
        if (!empty(session('discount'))) {
            $coupon = session('coupon');
            if (!empty(Coupon::get()->where('name', $coupon)->first())) {
                $discount = Coupon::get()->where('name', $coupon)->first()->discount;

                $coupon_order['order_id'] = $newOrder->id;
                $coupon_order['coupon_name'] = Coupon::get()->where('name', $coupon)->first()->name;
                CouponOrder::create($coupon_order);
            }
        }
        $order['price'] = (float)str_replace(',', '', Cart::instance('cart')->subtotal());
        $all = 0;
        foreach ($collection as $item) {
            $product = Product::find($item->id);
            $size = $item->options[0];
            $color = $item->options[1];
            $detail = $product->details->where('color_id', $color)->where('size_id', $size)->first();

            if (!empty($detail)) {
                $price = $product->prices->where('color_id', $color)->first()->price;

                if (!empty($product->offer->where('color_id', $color)->first()->discount)) {
                    $price = $product->offer->where('color_id', $color)->first()->discount;
                }
                $data['size_id'] = $size;
                $data['color_id'] = $color;
                $data['product_id'] = $product->id;
                $data['price'] = $price * $item->qty;
                $all = $all + $data['price'];
                $data['quantity'] = $item->qty;
                $data['order_id'] = $newOrder->id;
                $newQuantity['quantity'] = $detail->quantity;
                if ($detail->quantity >= $item->qty) {
                    $newQuantity['quantity'] = $detail->quantity - $item->qty;
                } else  $newQuantity['quantity'] = 0;
                $detail->update($newQuantity);
                OrderDetail::create($data);
            }
        }
        if ($order['price'] != $all) {
            $order['price'] = $all;
        }
        $newOrder->update($order);
        Mail::to('cozx.eg@gmail.com')->send(new NewOrder($newOrder, $newOrder->items));
        Mail::to(auth()->user()->email)->send(new NewOrder($newOrder, $newOrder->items));
        Cart::destroy();
        session()->flush();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
