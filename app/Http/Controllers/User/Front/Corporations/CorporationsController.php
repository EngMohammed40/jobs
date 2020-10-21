<?php
namespace App\Http\Controllers\User\Front\Corporations;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Storage;
use Session;
use Hash;
use App\Models\Corporation;
use App\Models\Country;
use App\Models\Corporation_Page;
use App\Models\Corporations_images;
use App\Models\Banner;
use App\Models\Feature;
use App\Models\Rule;
use App\Models\Section;
use App\Models\Ad;
class CorporationsController extends Controller{
    
    public function index(){
        $corporations = Corporation::all();
        $banners = Banner::where('page','=','corporations')->get();
        $features = Feature::where('page','=','corporations')->get();
        $rules = Rule::where('page','=','corporations')->get();
        $bannerImage = Corporations_images::where('id','1')->first();
        // sections
        $sections = Section::all();
        // ads
        $bottom_ads = Ad::where('adgroup_id',6)->get();
        $bottom_side_ads = Ad::where('adgroup_id',8)->get();
        $top_side_ads = Ad::where('adgroup_id',7)->get();

        return view('user.front.business_owner.index')->with([
            'banners' => $banners,
            'corporations' => $corporations ,
            'bannerImage' => $bannerImage,
            'features' =>$features,
            'rules' => $rules,
            'sections' => $sections,
            'bottom_ads' => $bottom_ads,
            'top_side_ads' => $top_side_ads,
            'bottom_side_ads' => $bottom_side_ads
            ]);
    }
    
    public function create(){
        $countries = Country::all();
        return view('user.front.jobs-account-registeration.create')->with([
            'countries' => $countries,    
        ]);
    }
    
  public function store(Request $request){
    $this->validate($request,[
       'personal_name' => 'required',
       'job_name' => 'required',
       'email' => 'required|email',
       'mobile' => 'required',
       'corporation_name' => 'required',
       'corporation_field' => 'required',
       'corporation_sector' => 'required',
       'corporation_size' => 'required',
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
        Storage::disk('public')->put("corporations_images/" . $fileName, (string)$image->encode());
    }else{
        $fileName = '';
    }
    $corporation = new Corporation();
    $corporation->insert([
        'personal_name' => $request->input('personal_name'),
       'job_name' => $request->input('job_name'),
       'email' => $request->input('email'),
       'mobile' => $request->input('mobile'),
       'corporation_name' => $request->input('corporation_name'),
       'corporation_field' => $request->input('corporation_field'),
       'corporation_sector' => $request->input('corporation_sector'),
       'corporation_size' => $request->input('corporation_size'),
       'country_id' => $request->input('country'),
       'city_id' => $request->input('city'),
       'user_email' => $request->input('user_email'),
       'name_hide' => $request->input('name_hide'),
       'job_name_hide' => $request->input('job_name_hide'),
       'email_hide' => $request->input('email_hide'),
       'mobile_hide' => $request->input('mobile_hide'),
       'chat' => $request->input('chat'),
       'corporation_about' => $request->input('corporation_about'),
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