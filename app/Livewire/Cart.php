<?php

namespace App\Livewire;

use App\Models\ProductDetail;
use Livewire\Component;

class Cart extends Component
{
    public $rowId='';
    public $quantity='';
    public function mount(string $category_id)
    {
        $cartItems=\Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->content();
    }
    public function render()
    {
        return view('livewire.cart');
    }
    public function remove(){

    }
    public function update(){
        dd('rowId')
        $options = Cart::instance('cart')->content('rowId')->first()->options;
        $size = $options[0];
        $color = $options[1];
        $detail = ProductDetail::select('quantity')->where('color_id', $color)->where('size_id', $size)->first();
        if ($detail->quantity < $request->quantity) {
            Cart::instance('cart')->update($request->rowId, $detail->quantity);
        } else
            Cart::instance('cart')->update($request->rowId, $request->quantity);
        return redirect()->route('cart.index');
    }
}
