<?php

namespace App\Http\Requests\Admin\Countries;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'required|nullable',
            'code'=>'required|nullable',
            'currency'=>'required|nullable',
            'location_code'=>'required',
            'country_img' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ];
    }
}
