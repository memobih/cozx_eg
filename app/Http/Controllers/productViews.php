<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productViews extends Controller
{
     public  function show(string $id){

         return view('productDetailsShow' ,compact('id') );
     }
}
