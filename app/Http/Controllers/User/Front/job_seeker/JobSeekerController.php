<?php
namespace App\Http\Controllers\User\Front\job_seeker;

use Illuminate\Http\Request;
use Location;
use Image;
use Session;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
// *** models ***//
use App\Models\Country;
use App\Models\Expertise;
use App\Models\Education;
use App\Models\WorkPlace;
use App\Models\JobSeeker;
use App\Models\JobSeekerPage;
use App\Models\Banner;
use App\Models\Section;

class JobSeekerController extends controller
{
    public function index(){
        $job_seekers = JobSeeker::all();
        $bannerImage = JobSeekerPage::select('banner_image')->first();
        $bannerImage = $bannerImage->banner_image;
        $banners = Banner::where('page','=','job_Seeker')->get();
        $sections = Section::all();
        return view('user.front.job_seeker.index')->with([
            'job_seekers' => $job_seekers,
            'bannerImage' => $bannerImage,
            'banners' => $banners,
            'sections' => $sections
        ]);
    }
    
    public function create(){
        $country_code =  Location::get('154.237.204.193')->countryCode;
        $country_count =Country::where('location_code','=',$country_code)->count();
        if($country_count == 0){
           $current_country = Country::where('location_code','=','EG')->first();
        }else{
            $current_country = Country::where('location_code','=',$country_code)->first(); 
        }
        $countries = Country::all();
        $expertises = Expertise::all();
        return view('user.front.job_seeker.job_seeker_add')->with([
            'countries' => $countries,
            'expertises' => $expertises,
            'current_country' => $current_country
        ]);
    }
    
    
    public function store(Request $request){
        $this->validate($request,[
            'sex' => 'required',
            'social_state' => 'required',
            'full_name' => 'required',
            'birth_year' => 'required',
            'nationality' => 'required',
            'home_country' => 'required',
            'home_city' => 'required',
            'photo' => 'required',
            'mobile' => 'required',
            'email' => ['required','email','unique:job_seekers'],
            'education1' => 'required',
            'expertise1' => 'required',
            'experience_number1' => 'required',
            'salary_status' => 'required',
            'work_status' => 'required',
            'work_region1' => 'required',
            'work_city1' => 'required',
            'password' => 'required',
            'job_type'=> 'required'
            ],
            [
                'full_name.required' => 'برجاء ادخال الاسم الثلاثي',
                'photo.required' => 'برجاء ادخال صورة شخصية ',
                'email.required' => 'برجاء ادخال البريد الالكتروني ',
                'email.email' => 'برجاء ادخال بريد الكتروني صالح ',
                'email.unique' => 'هذا البريد مأخوذ من قبل',
                'mobile.required' => 'برجاء ادخال رقم الجوال ',
                'education1.required' => 'برجاء ادخال المستوي التعليمي ',
                'job_type.required' => 'برجاء ادخال نوع الوظيفه ',
                'password.required' => 'برجاء ادخال الرقم السري',
            ]
            );
            
            
        if ($request->hasFile('photo')) {

            $photo = $request->file('photo');
            $fileName = time() . '.' . $photo->getClientOriginalExtension();
            $image = Image::make($photo)->resize(300, 300);
            Storage::disk('public')->put("job-seekers/photo" . $fileName, (string)$image->encode());
        }
        
        $job_seeker = new JobSeeker();
  
        $job_seeker->insert([
            'sex' => $request->input('sex'),
            'social_state' =>  $request->input('social_state'),
            'full_name' =>  $request->input('full_name'),
            'birth_year' =>  $request->input('birth_year'),
            'nationality' =>  $request->input('nationality'),
            'country_id' => $request->input('home_country'),
            'city_id' =>  $request->input('home_city'),
            'photo' =>  $fileName,
            'mobile' =>  $request->input('mobile'),
            'email' =>  $request->input('email'),
            'name_hide' =>  $request->input('name_hide'),
            'mobile_hide' =>  $request->input('phone_hide'),
            'email_hide' => $request->input('email_hide'),
            'min_salary' =>  $request->input('min_salary'),
            'salary_status' =>  $request->input('salary_status'),
            'job_type' => $request->input('job_type')
        ]);    
        
        
        $id = JobSeeker::where('email',$request->input('email'))->where('mobile',$request->input('mobile'))->first();

        $total_education_number = $request->input('total_education_number');
        $total_place_number = $request->input('total_place_number');
        for($i=1;$i<=$total_education_number;$i++){
            
            $education = new Education();
        
            $education->insert([
                'job_seeker_id' => $id->id,
                'education_leve' => $request->input('education'.$i.''),
                'education_field' => $request->input('expertise'.$i.''),
                'experience' => $request->input('experience_number'.$i.''),
            ]);
        
        }
        
        for($z=1;$z<=$total_place_number;$z++){
                    
            $work_places = new WorkPlace();
        
            $work_places->insert([
               'job_seeker_id' =>  $id->id,
               'work_status' => $request->input('work_status'),
               'region' => $request->input('work_region'.$z.''),
               'city' => $request->input('work_city'.$z.''),
            ]);
            
        }
        

        Session::flash('success', 'تم اضافة طلبك بنجاح'); 
        return redirect(url('/'));
            
            
            
            
            
    }
    
}