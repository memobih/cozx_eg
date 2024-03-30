<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Size;
use Illuminate\Http\Request;

class productDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( )
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $color=Color::all();
        $size=Size::all();
        return view('admin.products.products_details.create' ,compact('color' , 'size'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data=$request->validate(
            [
               'quantity'=>'int|required' ,
                'size_id'=>'int|required',
                'color_id'=>'int|required',
                'product_code'=>'string|required|exists:products,code'
            ]
        );
        $detail=ProductDetail::get()->
             where('color_id' , $request->color_id )
            ->where('product_code' , $request->product_code)
            ->where('size_id' , $request->size_id)->first();
        if(!empty($detail) ) {
            toastr()->error('this detail exists');
            return redirect()->back();
        }
        toastr()->success('Successful');
        $product=ProductDetail::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $product_code)
    {
        $product=Product::get()->where('code',$product_code)->first();
        $productDetails=$product->details;
        $colors=Color::all();
        $sizes=Size::all();
        return view('admin.products.products_details.detaile' , compact('productDetails' ,'colors' ,'sizes' ,'product'));
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

        $detail=ProductDetail::find($id);
        $data=$request->validate(
            [
                'quantity'=>'required' ,
            ]
        );
        $detail->update($data);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product=ProductDetail::find($id);
        $product->delete();
        return redirect()->back();
    }
}
