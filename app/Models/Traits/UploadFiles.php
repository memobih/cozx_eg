<?php
namespace App\Models\Traits;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
trait UploadFiles
{
    public static function UploadPhoto($model)
    {
        if (request()->hasFile('image')) {
          $file=request()->file('image'); 
        $fileName = uniqid() . Str::random(5) . time() . '.' . $file->getClientOriginalExtension();
        $contentType = $file->getClientMimeType();
        $options = ['Content-Type' => $contentType];
        $path="photo";
        Storage::disk('azure')->putFileAs($path, $file, $fileName, $options);
         $model->image = "https://cozxeg.blob.core.windows.net/".$path."/".$fileName;
        }
    }

    public static function DeletePhoto($model)
    {
        if (!empty($model->image) && Storage::exists($model->image)) {
            Storage::delete($model->image);
        }
    }
}
