<?php

namespace App\Http\Controllers;

use App\Http\Requests\productCreate;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductPrice;
use App\Models\Size;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(productCreate $request)
    {
        Product::create($request->validated());
        toastr()->success('Successful');

        return redirect()->route('product.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)

    {
        $product=Product::find($id);
        $colors=Color::all();
        $sizes=Size::all();
        $productImages=$product->images;
        $productDetails=$product->details;
        $prices=$product->prices;

        return view('admin.products.show'  , compact('sizes' , 'colors' ,'productImages' , 'productDetails' , 'product','prices'));
    }
    /**
     *
     *
     */
    public function edit(string $id)
    {
        $categories=Category::all();
        $product=Product::find($id);
        return view('admin.products.edit' , compact('product' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data=$request->validate([
            'name'=> 'required|string',
            'description'=>'required|string' ,
            'image'=>'file|image'
            ,'code'=>'required',
            'category_id'=>'required'
        ]);
        $product=Product::find($id);
        $product->update($data);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect('product');
    }
}
