<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductImage;
use http\Client\Request;
use Livewire\Component;

class productsView extends Component
{
public  $product,$colors, $details, $images ,$quantites=0 ,$price ,$color_id ;
    public function mount(string $id)
    {

        $this->product=Product::find($id);
        $this->colors=$this->product->prices;
        $this->details=$this->product->details->where('color_id',$this->colors[0]->color_id);;
        $this->images=$this->product->images->where('color_id',$this->colors[0]->color_id);
        $this->price=$this->colors->first()->price;
        $this->color_id=$this->colors->first()->color_id;

    }

    public function render()
    {
        return view('livewire.productsView');
    }
    public function change_color($color_id){
        $this->color_id=$color_id;
        $this->details=$this->product->details->where('color_id',$this->color_id);;
        $this->images=$this->product->images->where('color_id',$this->color_id);
        $this->price=$this->colors->where('color_id',$this->color_id)->first()->price;
    }
    public function change_size(  $detail){
         $this->quantites=$detail["quantity"];
        $this->details=$this->product->details->where('color_id',$this->color_id);;
    }

}
