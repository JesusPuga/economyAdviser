<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'password' => 'required',
            'email' => 'password',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo nombre requerido',
            'password.required' => 'Campo contraseña requerido',
            'email.required' => 'Campo email requerido',
        ];
    }
}
