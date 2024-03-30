<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Size;
use Illuminate\Http\Request;

class productImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $color=Color::all();
        return view('admin.products.products_details.product_images.create' , compact('color'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate
        (
            [
                'color_id'=>'required|int' ,
                'product_code'=>'required|string|exists:products,code',
                'image'=>'file|image|required',
            ]
        );

       $image= ProductImage::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */

    public function show(string $product_code)
    {
        $product=Product::get()->where('code',$product_code)->first();
        $productImages=$product->images;
        $colors=Color::all();
        $sizes=Size::all();
        return view('admin.products.products_details.image' , compact('productImages' ,'colors' ,'sizes' ,'product'));
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
        $image=ProductImage::find($id);
        $image->delete();
        return redirect()->back();
    }
}
