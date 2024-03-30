<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons=Coupon::all();
return view('admin.coupon.index' , compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'string|unique:coupons|required' ,
            'username'=>'string|required',
            'discount'=>'int|required',
        ]);
        Coupon::create($data);
        toastr()->success('Successful');

        return redirect()->route('coupons.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coupon=Coupon::find($id);
        return view('admin.coupon.edit',compact('coupon'));
    }
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'name'=>'string|unique:coupons|required' ,
            'username'=>'string|required',
            'discount'=>'int|required',
        ]);
       $coupon= Coupon::find($id);
       $coupon->update($data);
        toastr()->success('Successful');
        return redirect()->route('coupons.edit',['coupon'=> $coupon->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coupon= Coupon::find($id);
        $coupon->delete();
        return redirect()->route('coupons.index');
    }
}
