<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    protected $fillable=[
        'quantity' ,
        'product_code' , 'color_id'
        ,'size_id'
    ];


    public function size(){
        return $this->belongsTo(Size::class , 'size_id' , 'id');
    }
    public function color(){
        return $this->belongsTo(Color::class , 'color_id' , 'id');
    }
    public  function product(){
        return $this->belongsTo(Product::class , 'product_code','code');
    }
}
