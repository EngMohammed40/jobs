<?php

namespace App\Http\Requests\Admin\BankAccounts;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'bank'=>'required|nullable',
            'ipan'=>'required|nullable',
            'account_number'=>'required|nullable',
            'account_owner'=>'required|nullable',
        ];
    }
}
