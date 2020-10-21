<?php
namespace App\Http\Controllers\User\Front\home;

use Illuminate\Http\Request;
use Location;
use Image;
use Session;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
// *** models ***//
use App\Models\Expertise;
use App\Models\Corporation;
use App\Models\Ad;
use App\Models\Job;
use App\Models\JobSeeker;
use App\Models\Article;
use App\Models\Country;
use App\Models\Home_Page;

class HomeController extends controller
{
    public function index(){
        $country_code =  Location::get('154.237.204.193')->countryCode;
        $country_count =Country::where('location_code','=',$country_code)->count();
        if($country_count == 0){
           $current_country = Country::where('location_code','=','EG')->first();
        }else{
            $current_country = Country::where('location_code','=',$country_code)->first(); 
        }
        $articles = Article::all();
        $expertises = Expertise::all();
        $jobs = Job::all();
        $corporations = Corporation::all();
        // Ads
        $top_ads = Ad::where('adgroup_id',1)->get();
        $top_banners = Ad::where('adgroup_id',13)->get();
        $left_banners = Ad::where('adgroup_id',2)->get();
        // Banners
        $banners = Home_Page::where('id',1)->get();
        return view('user.front.index')->with([
            'articles' => $articles,
            'expertises' => $expertises,
            'jobs' => $jobs,
            'top_ads' => $top_ads,
            'top_banners' => $top_banners,
            'corporations' => $corporations,
            'left_banners' => $left_banners,
            'current_country' => $current_country,
            'banners' => $banners
        ]);
    }
    

}