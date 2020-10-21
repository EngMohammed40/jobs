<?php

namespace App\Http\Requests\Admin\Ads;

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
            'name' => 'required',
            'link' => 'nullable',
            'adgroup_id' => 'required',
            'ad-google' => 'nullable',
            'ad_img.*' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ];
    }
}
