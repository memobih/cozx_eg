<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Shetabit\Visitor\Models\Visit;

class AdminController extends Controller
{
    public function index( ){
        $orders=\App\Models\Order::all()->count();
        $customers=\app\Models\User::all()->count();
        $sale=Sale::find(1)->total_sale;
        $products=\App\Models\Product::all()->count();
        $visitors=Visit::select()->distinct('ip')->count('ip');

        return view('admin.index' ,compact('orders' ,'customers','sale','products','visitors'));
    }
}
