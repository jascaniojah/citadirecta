<?php

namespace citadirecta\Http\Requests;

use citadirecta\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'nombre' => 'required',
            'apellidos' => 'required',
            'cedula' => 'required',
            'user' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ];
    }
}
