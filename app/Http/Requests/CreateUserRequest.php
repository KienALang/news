<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'required|max:255',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:8',
            'phone' => 'regex:/^[0-9]{10,12}$/',
            'address' => 'required'
        ];
    }

}
