<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => "required|unique:products,name,".$this->id,
            'price' =>'required|numeric',
            'description' => 'required',
            'category_id' => 'required'
           
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter product name',
            'name.unique' => 'Product name is exist. Please choose orther product name',
            'price.required' => 'Please enter product price',
            'price.numeric'=>'Price must be a number',
            'category_id.required' => 'Please choose category',
            'descripton.required' => 'Please enter product description',
           
          
        ];
    }
}
