<?php

namespace App\Http\Controllers\Admin\JobSeekers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobSeekerPage;
use App\Models\Banner;
use Storage;
use Image;

class BannersController extends Controller
{
   public function index(){
       $bannerImage = JobSeekerPage::select('banner_image')->first();
       $bannerImage = $bannerImage->banner_image;
       
       $banners = Banner::where('page','=','job_Seeker')->get();
        return view('admin.pages.job_seekers.banner.index')->with([
          'bannerImage' => $bannerImage,
          'banners' => $banners
        ]);
       
   }
   
   public function update(Request $request , $id){
       $banner = Banner::find($id);
       $banner->update([
            'banner_body' => $request->input('banner_body'),
            'banner_head' => $request->input('banner_head'),
        ]); 
        
        if($request->hasFile('banner_image')){
            $bannerImage = JobSeekerPage::find(1);
            Storage::delete('public/job-seekers/' .$bannerImage->banner_image);
            $banner_image = $request->file('banner_image');
            $fileName = time() . '.' . $banner_image->getClientOriginalExtension();
            $image = Image::make($banner_image);
            Storage::disk('public')->put("job-seekers/" . $fileName, (string)$image->encode());
            $bannerImage->update([
                'banner_image' => $fileName    
            ]);
        }
        
        return back();
   }
}
