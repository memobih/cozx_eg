<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_code' , 'color_id'
        ,'price'
    ];
    public  function product(){
        return $this->belongsTo(Product::class , 'product_code','code');
    }
    public function color(){
        return $this->belongsTo(Color::class , 'color_id' , 'id');
    }
}
