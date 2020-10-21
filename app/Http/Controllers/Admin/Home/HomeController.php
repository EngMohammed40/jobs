<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\Home_Page;
use Image;

class HomeController extends Controller
{
   public function index(){
       $banners = Home_Page::where('id',1)->get();
       return view('admin.pages.home.index')->with('banners', $banners);
   } 
   
   
   public function update(Request $request,$id){
       $banner = Home_Page::find($id);
       if($request->input('type') == 'top'){
        if ($request->hasFile('banner_image')) {

            Storage::delete('public/home_images/' . $banner->banner_img_1);

            $banner_image = $request->file('banner_image');
            $fileName = time() . '.' . $banner_image->getClientOriginalExtension();
            $image = Image::make($banner_image);
            Storage::disk('public')->put("home_images/" . $fileName, (string)$image->encode());
            $banner->banner_img_1 = $fileName;
        }
        $banner->update([
           'banner_head_1' => $request->input('banner_head'), 
           'banner_body_1' => $request->input('banner_body'), 
           'banner_link_1' => $request->input('banner_link'), 
           'banner_href_1' => $request->input('banner_href'), 
        ]);
       }elseif($request->input('type') == 'bottom'){
            if ($request->hasFile('banner_image')) {

            Storage::delete('public/home_images/' . $banner->banner_img_2);

            $banner_image = $request->file('banner_image');
            $fileName = time() . '.' . $banner_image->getClientOriginalExtension();
            $image = Image::make($banner_image);
            Storage::disk('public')->put("home_images/" . $fileName, (string)$image->encode());
            $banner->banner_img_2 = $fileName;
        }
        $banner->update([
           'banner_head_2' => $request->input('banner_head'), 
           'banner_body_2' => $request->input('banner_body'), 
           'banner_link_2' => $request->input('banner_link'), 
           'banner_href_2' => $request->input('banner_href'), 
        ]);
       }
       return back();
   }
   
   
   
   
   
   
   
    //   Getting Certain Banner
    public function getBannerData(Request $request){
        if(request()->ajax()){
            if($request->type == 'top'){
               $banners = Home_Page::where('id',1)->select(['banner_head_1','banner_link_1','banner_body_1','banner_href_1','banner_img_1',])->get(); 
               $body = $banners[0]->banner_head_1;
               $head = $banners[0]->banner_body_1;
               $link = $banners[0]->banner_link_1;
               $href = $banners[0]->banner_href_1;
               $img = $banners[0]->banner_img_1;
            }elseif($request->type == 'bottom'){
                $banners = Home_Page::where('id',1)->select(['banner_head_2','banner_link_2','banner_body_2','banner_href_2','banner_img_2',])->get();
                $body = $banners[0]->banner_head_2;
               $head = $banners[0]->banner_body_2;
               $link = $banners[0]->banner_link_2;
               $href = $banners[0]->banner_href_2;
               $img = $banners[0]->banner_img_2;
            }
            return [$body,$head,$link,$href,$img];
        }
    }
}
