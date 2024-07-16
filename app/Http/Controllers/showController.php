<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HomeCategories;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
class showController extends Controller
{
     public  function show( ){
         $categories=Category::all();
         $departments=HomeCategories::select()->first();
         $cartItems = Cart::instance('cart')->content();
        visitor()->visit(); // create a visit log
         return view('index' , compact('departments' , 'categories','cartItems' ));
     }

}
