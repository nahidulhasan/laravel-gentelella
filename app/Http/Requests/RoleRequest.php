<?php
/**
 * Created by PhpStorm.
 * User: pathao
 * Date: 8/28/18
 * Time: 5:11 PM
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'role_name'=>'required',
            'permissions'=>'required|array'
        ];
    }
}