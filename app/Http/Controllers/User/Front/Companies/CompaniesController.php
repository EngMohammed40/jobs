<?php
namespace App\Http\Controllers\User\Front\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Storage;
use Session;
use Hash;
use App\Models\Company;
use App\Models\Ad;
use App\Models\AdsGroup;
use App\Models\AdsImage;
use App\Models\Company_Page;
use App\Models\Rule;

class CompaniesController extends Controller{
    
    public function index(){
        $companies = Company::all();
        $banners = Company_Page::all();
        //  ADS
        $last_ad = Ad::where('adgroup_id',4)->get();
        $middle_ad = Ad::where('adgroup_id',4)->get();
        
        // Rules
        $rules = Rule::where('page','=','companies')->get();
        $ruleImage = Company_Page::select("rules_img")->first();
        
        return view('user.front.recruitment_company.index')->with(
            ['companies' => $companies , 'banners' => $banners,
            'last_ad' => $last_ad,
            'middle_ad' => $middle_ad,
            'rules' => $rules,
            'ruleImage' => $ruleImage
            ]
            );
    }    

  public function store(Request $request){
        $this->validate($request,[
        'personal_name' => 'required',
       'job_name' => 'required',
       'email' => 'required|email',
       'mobile' => 'required',
       'company_name' => 'required',
       'country' => 'required',
       'city' => 'required',
       'user_email' => 'required',
       'password' => 'required',
       'captcha_company' => 'required|captcha'
            ]);

    if ($request->hasFile('logo')) {
        $file = $request->file('logo');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $image = Image::make($file)->resize(300, 300);
        Storage::disk('public')->put("companies_images/" . $fileName, (string)$image->encode());
    }else{
        $fileName = '';
    }
    $corporation = new Company();
    $corporation->insert([
        'personal_name' => $request->input('personal_name'),
       'job_name' => $request->input('job_name'),
       'email' => $request->input('email'),
       'mobile' => $request->input('mobile'),
       'company_name' => $request->input('company_name'),
       'country_id' => $request->input('country'),
       'city_id' => $request->input('city'),
       'user_email' => $request->input('user_email'),
       'name_hide' => $request->input('name_hide'),
       'job_name_hide' => $request->input('job_name_hide'),
       'email_hide' => $request->input('email_hide'),
       'mobile_hide' => $request->input('mobile_hide'),
       'chat' => $request->input('chat'),
       'company_about' => $request->input('company_about'),
       'link' => $request->input('link'),
       'hear_about' => $request->input('hear_about'),
       'facebook' => $request->input('facebook'),
       'twitter' => $request->input('twitter'),
       'linkedin' => $request->input('linkedin'),
       'profile_color' => $request->input('profile_color'),
       'password' => Hash::make($request->input('password')),
       'logo' => $fileName
    ]);
    
    return redirect()->route('companies.index'); 
        

    
    
  }
  
}