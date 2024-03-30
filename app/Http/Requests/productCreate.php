<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productCreate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return array(
            "name"=>'required|string' ,
            "code"=>'required|string|unique:products,code',
            "image"=>'file|image|required',
            "description"=>'required |string',
            "category_id"=>'int|required'
        );
    }
    public function attributes()
    {
        return [
            "name"=>'name' ,
            "code"=>'code',
            "image"=>'image',
            "description"=>'description',
            "category_id"=>'category_id'
        ];
    }
}
