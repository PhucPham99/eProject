<?php

namespace App\Http\Requests\Admin\User;

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
            'email' => 'required|unique:users,email,' .$this->id,
            'fullname' => 'required',
            'phone' => 'required|digits:10|numeric'
         ];
    }
    public function messages() : array
    {   
        return [
            'email.required' => 'Please enter email',
            'email.unique' => 'Email is exist. Please choose orther email',
            'password.required' => 'Please enter password',
            'password.confirmed' => 'Confirm password does\'n match',
            'password.min' => 'Password must be least 8 chars',
            'fullname.required' => 'Please enter fullname',
            'phone.required' => 'Please enter phone number',
            'phone.digits' => 'Phone must be max 10 number',
            'phone.numeric' => 'Phone must be number'
        ];
        
    }
}
