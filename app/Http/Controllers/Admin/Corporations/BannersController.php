<?php

namespace App\Http\Controllers\Admin\Corporations;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Corporation_Page;
use App\Models\Banner;
use App\Models\Corporations_images;
use Storage;
use Image;

class BannersController extends Controller
{

  public function index(){
      $banners = Banner::where('page','=','corporations')->get();
      $image = Corporations_images::where('id',1)->first();
      return view('admin.pages.corporations.banner.index')->with(['banners' => $banners, 'image' => $image]);
  }
  
    public function create(){
      return view('admin.pages.corporations.banner.create');
  }
  
  public function store(Request $request){
      $banner = new Banner();
      
      $banner->insert([
        'banner_head' => $request->input('banner_head'),
        'banner_body' => $request->input('banner_body'), 
        'page' => $request->input('page'), 
        ]);
    
        return redirect()->route('admin.corporations_banner.index');
  }
  
  
  
  public function edit($id){
      $banner = Banner::find($id);
      return view('admin.pages.corporations.banner.edit')->with(['banner' => $banner]);
  }
  
  
  public function update(Request $request,$id){
      $banner = Banner::find($id);
            $banner->update([
               'banner_head' => $request->input('banner_head'),
               'banner_body' => $request->input('banner_body'),
            ]);
        return redirect()->route('admin.corporations_banner.index');
  }
  
  
  public function destroy($id){
      $banner = Banner::find($id);
      $banner->delete();
      return back();
  }
  
  
  
  
  
  
  
  
  
  
//   Update the Image of Background
    public function getImage(Request $request){
        $bannerImage = Corporations_images::find(1);
                if ($request->hasFile('banner_image')) {

            Storage::delete('public/corporations_images/' . $bannerImage->banner_image);

            $banner_image = $request->file('banner_image');
            $fileName = time() . '.' . $banner_image->getClientOriginalExtension();
 
            $image = Image::make($banner_image);
            Storage::disk('public')->put("corporations_images/" . $fileName, (string)$image->encode());
            $bannerImage->update([
                'banner_image' => $fileName
            ]);
            return back();
        }
    }

  
}
