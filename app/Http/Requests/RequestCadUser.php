<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestCadUser extends Request
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
            'nome' => 'required',
            'sobrenome' => 'required',
            'password' => 'required|min:8',
            'email' => 'required|email|unique:users'
        ];
    }
}
