<?php

namespace App\Models;

use App\Models\Traits\UploadFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory ,UploadFiles ;
    protected $fillable=[
       'name'   ,
        'image' ,
        'description'
        , 'code' ,
        'category_id'
    ];

    protected static function boot()
    {
        parent::boot();
        static::created(function ($model) {
            static::UploadPhoto($model);
            $model->save();
        });
        static::saving(function ($model) {
            static::UploadPhoto($model);
        });

    }
    public function  category(){
        return $this->belongsTo(Category::class ,'category_id' , 'id');
    }
    public function details(){
        return $this->hasMany(ProductDetail::class ,'product_code' , 'code');
    }
    public function images(){
        return $this->hasMany(ProductImage::class ,'product_code' , 'code');

    }
    public function colors(){
        return $this->hasMany(ProductImage::class ,'product_code' , 'code')->select('color_id')->distinct();
    }
    public function prices(){
        return $this->hasMany(ProductPrice::class ,'product_code' , 'code');
    }
    public function offer(){
        return $this->hasMany(Offer::class , 'product_code' , 'code');
    }

















    public static function UploadPhoto($model)
    {
        if (request()->hasFile('image')) {
            if (!empty($product->image) && Storage::exists($product->image)) {
                Storage::delete($product->image);
            }
            $model->image = request()->file('image')->store('product');
        }
    }
    public static function DeletePhoto($model)
    {
        if (!empty($model->image) && Storage::exists($model->image)) {
            Storage::delete($model->image);
        }
    }

}
