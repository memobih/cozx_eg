<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use App\Models\Traits\UploadFiles;

class Category extends Model
{

    use HasFactory ,UploadFiles ;
    protected $fillable=
        [
            'name' ,
            'description',
            'image'
        ];

   protected static function boot()
{
    parent::boot();
    static::created(function($model){
        static::UploadPhoto($model);
        $model->save();
    });
static::Deleting(function ($model){
    static::DeletePhoto($model);
});

    static::saving(function($model){
        static::UploadPhoto($model);
    });



}

 public function products(){
       return $this->hasMany(Product::class);
}


}
