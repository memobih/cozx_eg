<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers=Offer::all();
        return view('admin.offers.index' , compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors=Color::all();
        return view('admin.offers.create',compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate(
            [
                'product_code'=>'string|required|exists:products,code' ,
                'discount'=>'int|required',
                'color_id'=>'required'
            ]
        );
        Offer::create($data);
        toastr()->success('Successful');

        return redirect()->route('offer.create');
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
        $colors=Color::all();

        $offer=Offer::find($id);
        return view('admin.offers.edit' ,compact('offer','colors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data=$request->validate(
            [
                'product_code'=>'string|required|exists:products,code' ,
                'discount'=>'int|required',
                'color_id'=>'int|required'
            ]
        );
        $offer=Offer::find($id);
        $offer->update($data);
        toastr()->success('Successful');
        return redirect()->route('offer.edit',['offer'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $offer=Offer::find($id);
        $offer->delete();
        return redirect()->route('offer.index');
    }
}
