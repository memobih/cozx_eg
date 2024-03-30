<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function show($category_id=NULL)
    {
        return view('shop' ,compact('category_id'));
    }


}
