<?php

namespace App\Http\Requests\Admin\UserManagment;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
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
            'name' => 'required|max:255|string',
            'username' => 'required|max:255|string|unique:admins',
            'email' => 'required|max:255|email|unique:admins',
            'password' => 'required|min:8|confirmed',
            'role' => 'required'
        ];
    }
}
