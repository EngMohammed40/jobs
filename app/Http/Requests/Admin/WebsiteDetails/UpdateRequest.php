<?php

namespace App\Http\Requests\Admin\WebsiteDetails;

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
            'website_name'=>'required|nullable',
            'website_logo'=>'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'website_currency'=>'required|nullable',
            'website_description'=>'required|nullable',
            'website_keywords'=>'required|nullable',
            'website_email'=>'nullable',
            'website_phone'=>'nullable',
            'website_fax'=>'nullable',
            'website_address'=>'nullable',
            'website_mail'=>'nullable',
            'website_facebook'=>'nullable',
            'website_google'=>'nullable',
            'website_twitter'=>'nullable',
            'website_instagram'=>'nullable',
            'website_youtube'=>'nullable',
        ];
    }
}
