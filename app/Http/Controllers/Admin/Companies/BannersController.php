<?php
namespace App\Http\Controllers\Admin\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Models\Company_Page;

class BannersController extends Controller{
    
    public function index(){
        $companies_page = Company_Page::all();
      return view('admin.pages.companies.banners.index')->with([
          'companies_page' => $companies_page
        ]);
    }
    
    public function update(Request $request,$id){
        $banner = Company_Page::find($id);
        
        if ($request->hasFile('banner_image')) {

            Storage::delete('public/companies_images/' . $banner->banner_image);

            $banner_image = $request->file('banner_image');
            $fileName = time() . '.' . $banner_image->getClientOriginalExtension();
            $image = Image::make($banner_image);
            Storage::disk('public')->put("companies_images/" . $fileName, (string)$image->encode());
            $banner->banner_image = $fileName;
        }
        
        $banner->update([
            'banner_head' => $request->input('banner_head'),
            'banner_body' => $request->input('banner_body'),
        ]);
        
        return back();
    }
}