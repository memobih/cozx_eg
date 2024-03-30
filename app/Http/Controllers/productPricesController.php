<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductPrice;
use App\Models\Size;
use Illuminate\Http\Request;

class productPricesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $code=$request->product_code ;
        $color_id=$request->color_id;
        $product_price=ProductPrice::get()->where('product_code',$code)->where('color_id',$color_id)->first();

        $data=$request->validate(
            [
                'product_code'=>'exists:products,code|string|required',
                'price'=>'int|required',
                'color_id'=>'int|required'
            ]
        );
        if(!empty($product_price)){
            $product_price->update($data);
            return redirect()->back();
        }
     $price=ProductPrice::create($data);
        toastr()->success('Successful');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $product_code)
    {
        $product=Product::get()->where('code',$product_code)->first();
       $prices=$product->prices;
        $colors=Color::all();
        $sizes=Size::all();
        return view('admin.products.products_details.price' , compact('prices' ,'colors' ,'sizes' ,'product'));
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
        $price=ProductPrice::find($id);
        $price->delete();
        return redirect()->back();

    }
}
