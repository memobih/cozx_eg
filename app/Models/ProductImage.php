<?php

namespace App\Models;

use App\Models\Traits\UploadFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends Model
{
    use HasFactory ,UploadFiles ;
    protected $fillable=[
        'image',
        'product_code',
        'color_id'
    ];

    use HasFactory;
    protected static function boot()
    {
        parent::boot();
        static::created(function ($model) {
            static::UploadPhoto($model);
            $model->save();
        });
        static::deleted(function ($model){
            static::DeletePhoto($model);
        } );
        static::saving(function ($model) {
            static::UploadPhoto($model);
        });

    }
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
