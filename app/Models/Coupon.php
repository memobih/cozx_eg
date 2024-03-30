<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable= [
        'username'   ,
        'name' ,
        'discount'
    ];
    public function orders(){
        return $this->hasMany(CouponOrder::class ,'coupon_name' , 'name');
    }
}
