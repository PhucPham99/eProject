<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            'name' => "required|unique:products,name",
            'price' =>'required|numeric',
            'description' => 'required',
            'image'=> 'required|mimes:png,jpg,bmp,jpeg'// được phép nhập
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter product name',
            'name.unique' => 'Product name is exist. Please choose orther product name',
            'price.required' => 'Please enter product price',
            'price.numeric'=>'Price must be a number',
            'descripton.required' => 'Please enter product description',
            'image.required' => 'Please enter product image',
            'image.mines' => 'Image must be png,jpg,bmp,jpeg '
        ];
    }
}
