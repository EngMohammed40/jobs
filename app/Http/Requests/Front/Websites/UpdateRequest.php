<?php

namespace App\Http\Requests\Front\Websites;

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
            'name'=>'required',
            'link'=>'required',
            'description'=>'required',
            'keywords'=>'nullable',
            'contact_number'=>'nullable',
            'city_id'=>'nullable',
            'address'=>'nullable',
            'parent_section_id'=>'required',
            'subsection_id'=>'required',
            'language_id'=>'required',
            'website_added_logo'=>'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'website_added_images.*' =>'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'background_color'=>'required',
            'facebook'=>'nullable',
            'twitter'=>'nullable',
            'instagram'=>'nullable',
            'captcha' => 'required|captcha',
        ];
    }
}
