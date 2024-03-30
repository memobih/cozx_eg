<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable =
        [
            'name'
        ];
    use HasFactory;
    public function images() {
        return $this->hasMany(ProductImage::class ,'color_id' ,'id');
    }
}
