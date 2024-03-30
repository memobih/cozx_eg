<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable= [
        'user_id'   ,
        'isPayed' ,
        'statue'
        , 'price'
    ];
    public  function user (){
        return $this->belongsTo(User::class ,'user_id' ,'id');
    }
    public  function items()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
    public function coupon(){
        return $this->hasOne(CouponOrder::class , 'order_id' , 'id');
    }
}
