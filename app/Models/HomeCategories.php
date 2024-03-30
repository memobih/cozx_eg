<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCategories extends Model
{

    use HasFactory;

    protected $fillable = [
        'category_1',
        'category_2',
        'category_3'
    ];

    public function category1()
    {
        return $this->belongsTo(Category::class, 'category_1', 'id');
    }

    public function category2()
    {
        return $this->belongsTo(Category::class, 'category_2', 'id');
    }

    public function category3()
    {
        return $this->belongsTo(Category::class, 'category_3', 'id');
    }
}
