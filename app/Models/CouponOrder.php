<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponOrder extends Model
{

    use HasFactory;
    protected $fillable= [
        'order_id'   ,
        'coupon_name' ,
    ];
    public function order(){
        return $this->belongsTo(Order::class  , 'order_id' , 'id');
    }
    public function coupon(){
        return $this->belongsTo(Coupon::class , 'coupon_name' , 'name');
    }
}
