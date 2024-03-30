<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shipping=\App\Models\System::find(1)->shipping;

        if(empty(auth()->user())) return redirect()->route('login');
        $orders=auth()->user()->orders;
   return view('orders',compact('orders' ,'shipping'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $shipping=\App\Models\System::find(1)->shipping;


        $discount=0;
        $order=Order::find($id);
        if($order->coupon){
            $discount=$order->coupon->coupon->discount;
        }
        $order=Order::find($id);
        $orderDetails=$order->items;
        if(empty(auth()->user())) return redirect()->back();
        if(auth()->user()->id!=$order->user->id) return redirect()->back();
        return view('track',compact('order','orderDetails' ,'discount' ,'shipping'));
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
