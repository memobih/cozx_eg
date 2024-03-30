<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Sale;
use Illuminate\Http\Request;

class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
        $discount = 0;

        $order = Order::find($id);
        if ($order->coupon) {
            $discount = $order->coupon->coupon->discount;
        }
        $orderDetails = $order->items;
        return view('admin.orders.show', compact('order', 'orderDetails', 'discount'));
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
        $data['statue'] = $request->statue;
        $order = Order::find($id);
        if ($request->statue == "Completed") {
            $sales = Sale::find(1);
            $all['total_sale'] = $order->price;
            $all['total_sale'] = $all['total_sale'] + $sales->total_sale;
            $sales->update($all);
            $order->delete();
        } else
            $order->update($data);

        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
