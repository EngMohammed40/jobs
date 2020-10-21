<?php
namespace App\Http\Controllers\Admin\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Models\Company_Page;

class FeaturesController extends Controller{
    
    public function index(){
        $companies_page = Company_Page::all();
      return view('admin.pages.companies.features.index')->with([
          'companies_page' => $companies_page
        ]);
    }
    
    public function update(Request $request,$id){
        $feature = Company_Page::find($id);
        
  
        if($request->type == 'right'){
            if ($request->hasFile('feature_image')) {

            Storage::delete('public/companies_images/' . $feature->features_right_image);

            $feature_image = $request->file('feature_image');
            $fileName = time() . '.' . $feature_image->getClientOriginalExtension();
            $image = Image::make($feature_image);
            Storage::disk('public')->put("companies_images/" . $fileName, (string)$image->encode());
            $feature->features_right_img = $fileName;
        }
        $feature->update([
            'features_right_head' => $request->input('feature_head'),
            'features_right_body' => $request->input('feature_body'),
        ]);
        
        }elseif($request->type == 'left'){
                      if ($request->hasFile('feature_image')) {

            Storage::delete('public/companies_images/' . $feature->features_left_image);

            $feature_image = $request->file('feature_image');
            $fileName = time() . '.' . $feature_image->getClientOriginalExtension();
            $image = Image::make($feature_image);
            Storage::disk('public')->put("companies_images/" . $fileName, (string)$image->encode());
            $feature->features_left_img = $fileName;
        }
        $feature->update([
            'features_left_head' => $request->input('feature_head'),
            'features_left_body' => $request->input('feature_body'),
        ]);
        }elseif($request->type == 'middle'){
            if ($request->hasFile('feature_image')) {

            Storage::delete('public/companies_images/' . $feature->features_middle_image);

            $feature_image = $request->file('feature_image');
            $fileName = time() . '.' . $feature_image->getClientOriginalExtension();
            $image = Image::make($feature_image);
            Storage::disk('public')->put("companies_images/" . $fileName, (string)$image->encode());
            $feature->features_middle_img = $fileName;
        }
        $feature->update([
            'features_middle_head' => $request->input('feature_head'),
            'features_middle_body' => $request->input('feature_body'),
        ]);  
        }
        

        

        return back();
    }
    
    
    // Getting Certain Feature
    public function getFeatureData (Request $request){
       if(request()->ajax()){
            if($request->type == 'right'){
                $data = Company_Page::select(['features_right_head','features_right_body','features_right_img'])->first();
                $head = $data->features_right_head;
                $body = $data->features_right_body;
                $img = $data->features_right_img;
            }elseif($request->type == 'left'){
                $data = Company_Page::select(['features_left_head','features_left_body','features_left_img'])->first();
                $head = $data->features_left_head;
                $body = $data->features_left_body;
                $img = $data->features_left_img;
            }elseif($request->type == 'middle'){
                $data = Company_Page::select(['features_middle_head','features_middle_body','features_middle_img'])->first();
                $head = $data->features_middle_head;
                $body = $data->features_middle_body;
                $img = $data->features_middle_img;    
            }
            return [$head,$body,$img];
       } 
    }
    
}