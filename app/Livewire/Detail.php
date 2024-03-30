<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Livewire\Component;

class Detail extends Component
{
    public  $colors ,$prices ,$sizes ,$product  , $productDetails ,$productImages;
public $color_id, $price;
    public PostForm $form;

    public function mount()
    {
        $this->colors=Color::all();
        $this->sizes=Size::all();
        $this->product=Product::find(5);
        $this->prices=$this->product->prices;
        $this->productDetails=$this->product->details;
        $this->productImages=$this->product->images;
    }
    public function render()
    {
        return view('livewire.detail');
    }
    public function price(){
        dd($this->price);
        dd($this->only(['price']));
    }
}
