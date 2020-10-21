<?php
namespace App\Http\Controllers\User\Front\Centers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Storage;
use Session;
use Hash;
use App\Models\Center;
use App\Models\Country;

class CentersController extends Controller{
    
    
  public function store(Request $request){
    $this->validate($request,[
       'personal_name' => 'required',
       'job_name' => 'required',
       'email' => 'required|email',
       'mobile' => 'required',
       'center_name' => 'required',
       'center_field' => 'required',
       'country' => 'required',
       'city' => 'required',
       'user_email' => 'required',
       'password' => 'required',
       'captcha' => 'required|captcha'
    ]); 
    if ($request->hasFile('logo')) {
        $file = $request->file('logo');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $image = Image::make($file)->resize(300, 300);
        Storage::disk('public')->put("centers_images/" . $fileName, (string)$image->encode());
    }else{
        $fileName = '';
    }
    $corporation = new Center();
    $corporation->insert([
        'personal_name' => $request->input('personal_name'),
       'job_name' => $request->input('job_name'),
       'email' => $request->input('email'),
       'mobile' => $request->input('mobile'),
       'center_name' => $request->input('center_name'),
       'center_field' => $request->input('center_field'),
       'country_id' => $request->input('country'),
       'city_id' => $request->input('city'),
       'user_email' => $request->input('user_email'),
       'name_hide' => $request->input('name_hide'),
       'job_name_hide' => $request->input('job_name_hide'),
       'email_hide' => $request->input('email_hide'),
       'mobile_hide' => $request->input('mobile_hide'),
       'chat' => $request->input('chat'),
       'center_about' => $request->input('corporation_about'),
       'link' => $request->input('link'),
       'hear_about' => $request->input('hear_about'),
       'facebook' => $request->input('facebook'),
       'twitter' => $request->input('twitter'),
       'linkedin' => $request->input('linkedin'),
       'profile_color' => $request->input('profile_color'),
       'password' => Hash::make($request->input('password')),
       'logo' => $fileName
    ]);
    
    return redirect()->route('corporations.create'); 
    
    
  }
  
}