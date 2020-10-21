<?php

namespace App\Http\Controllers\Admin\Corporations;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Corporations_images;
use App\Models\Feature;
use Storage;
use Image;

class FeaturesController extends Controller
{

  public function index(){
      $features = Feature::where('page','=','corporations')->get();
      $featureImage = Corporations_images::where('id',1)->first();
      return view('admin.pages.corporations.features.index')->with([
          'features' => $features,
          'featureImage' => $featureImage
          ]);
  }
  
  public function create(){
      return view('admin.pages.corporations.features.create');
  }
  
  public function store(Request $request){
    $feature = new Feature();
    $feature->insert([
       'feature' => $request->input('feature'),
       'page' => $request->input('page'),
    ]);
    
    return redirect()->route('admin.corporations_features.index');
  }
  
  
  public function edit($id){
      $features = Feature::find($id);
    return view('admin.pages.corporations.features.edit')->with(['features' => $features]);
  }
  
  public function update(Request $request,$id){
      $features = Feature::find($id);
        $features->update([
            'feature' => $request->input('feature'), 
        ]);
        
        return redirect()->route('admin.corporations_features.index');
  }
  
  public function destroy($id){
      $features = Feature::find($id);
      $features->delete();
      return back();
  }
  
  
  //   Update the Image of Background
    public function getImage(Request $request){
        $featureImage = Corporations_images::find(1);
                if ($request->hasFile('feature_image')) {

            Storage::delete('public/corporations_images/' . $featureImage->feature_image);

            $feature_image = $request->file('feature_image');
            $fileName = time() . '.' . $feature_image->getClientOriginalExtension();
 
            $image = Image::make($feature_image);
            Storage::disk('public')->put("corporations_images/" . $fileName, (string)$image->encode());
            $featureImage->update([
                'feature_image' => $fileName
            ]);
            return back();
        }
    }
  
}
