<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name' => 'required|between:3, 40',
            'email' => 'required|email|unique:users,email',
            'number' => 'required|unique:users,number',
            'password' => 'required|confirmed|min:6'
        ];
    }

    public function response()
    {
        return response()->json(['error' => 'e'], 422);
    }


}
