<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ShopFilter extends Component
{
    public $category_id = NULL, $categories = NULL, $products = NUll;

    public function mount(string $category_id)
    {
        if ($category_id != 0) {
            $this->products = Product::get()->where('category_id', $category_id);
            $this->category_id = $category_id;
        }
        else {
            $this->products = Product::all();
        }
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.shop-filter');
    }

    public function filter1($value)
    {


        if ($value == 0) {
            $this->products = Product::all();
        } else {
            $this->products = Product::get()->where('category_id', $value);
        }
        $this->category_id = $value;
    }

    public function filter2($value)
    {
        if ($value == "2") {
            $this->products = Product::join('product_prices', 'products.code', '=', 'product_prices.product_code')
                ->orderBy('product_prices.price', 'asc')
                ->select('products.*')
                ->get();

        }
        if ($value == "1") {
            $this->products = Product::join('product_prices', 'products.code', '=', 'product_prices.product_code')
                ->orderBy('product_prices.price', 'DESC')
                ->select('products.*')
                ->get();
        }
        if ($value == "3") {
            $this->products = Product::select('*')
                ->orderBy('products.id', 'asc')
                ->get();
        }
        if (!empty($this->category_id)) {
            $this->products = $this->products->where('category_id', $this->category_id);
        }
    }


}
