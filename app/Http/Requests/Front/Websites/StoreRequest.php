<?php

namespace App\Http\Requests\Front\Websites;

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
            'name'=>'required',
            'type' => 'required',
            'password' => 'required|confirmed',
            'link'=>'required',
            'username' => 'required',
            'description'=>'required',
            'keywords'=>'nullable',
            'website_owner'=>'nullable',
            'email'=>'required',
            'contact_number'=>'nullable',
            'country_id'=>'required',
            'city_id'=>'nullable',
            'address'=>'nullable',
            'parent_section_id'=>'required',
            'subsection_id.*'=>'required',
            'language_id'=>'required',
            'website_added_logo'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'website_added_images.*' =>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'background_color'=>'nullable',
            'facebook'=>'nullable',
            'twitter'=>'nullable',
            'instagram'=>'nullable',
            'captcha' => 'required|captcha',


        ];
    }
}
