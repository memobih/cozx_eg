<?php
namespace App\Models\Traits;
use Illuminate\Support\Facades\Storage;

trait UploadFiles
{
    public static function UploadPhoto($model)
    {
        if (request()->hasFile('image')) {
            if (!empty($category->image) && Storage::exists($category->image)) {
                Storage::delete($category->image);
            }
            $model->image = request()->file('image')->store('category');
        }
    }

    public static function DeletePhoto($model)
    {
        if (!empty($model->image) && Storage::exists($model->image)) {
            Storage::delete($model->image);
        }
    }
}
