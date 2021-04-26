<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistrationRequest extends FormRequest
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

    /*public function messages()
    {
        return [

        ];
    }*/


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name'=>'required|string',
            'birthday'=>'required|string',
            'address'=>'required|string',
            'city'=>'required|string',
            'country'=>'required|string',
            'state'=>'required|string',
            'login' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ];
    }
}
