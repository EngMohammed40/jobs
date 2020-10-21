<?php

namespace App\Http\Requests\Admin\UserManagment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;

class UpdateAdminRequest extends FormRequest
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
        $id = $this->request->get('id');

        $rules = [
            'name' => 'required|max:255|string',
            'username' => 'required|max:255|string|unique:admins,username,'.$id,
            'email' => 'required|max:255|email|unique:admins,email,'.$id,
            'password' => $this->request->get('password') == null ? '' : 'required|min:8|confirmed',
        ];

        return $rules;
    }
}
