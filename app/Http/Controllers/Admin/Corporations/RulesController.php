<?php

namespace App\Http\Controllers\Admin\Corporations;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Corporation_Page;
use App\Models\Banner;
use App\Models\Rule;
use App\Models\Corporations_images;
use Storage;
use Image;

class RulesController extends Controller
{

  public function index(){
      $rules = Rule::where('page','=','corporations')->get();
      $image = Corporations_images::where('id',1)->first();
      return view('admin.pages.corporations.rules.index')->with(['rules' => $rules, 'image' => $image]);
  }
  
    public function create(){
      return view('admin.pages.corporations.rules.create');
  }
  
  
  public function store(Request $request){
      $rule = new Rule();
      
      $rule->insert([
        'rule' => $request->input('rule'),
        'page' => $request->input('page'), 
        ]);
    
        return redirect()->route('admin.corporations_rules.index');
  }
  
  
  
  public function edit($id){
      $rule = Rule::find($id);
      return view('admin.pages.corporations.rules.edit')->with(['rule' => $rule]);
  }
  
  
  public function update(Request $request,$id){
      $rule = Rule::find($id);
            $rule->update([
               'rule' => $request->input('rule'),
            ]);
        return redirect()->route('admin.corporations_rules.index');
  }
  
  
  public function destroy($id){
      $rule = Rule::find($id);
      $rule->delete();
      return back();
  }
  
  
  
  
  
  
  
  
  
  
//   Update the Image of Background
    public function getImage(Request $request){
        $ruleImage = Corporations_images::find(1);
                if ($request->hasFile('rule_image')) {

            Storage::delete('public/corporations_images/' . $ruleImage->rule_image);

            $rule_image = $request->file('rule_image');
            $fileName = time() . '.' . $rule_image->getClientOriginalExtension();
 
            $image = Image::make($rule_image);
            Storage::disk('public')->put("corporations_images/" . $fileName, (string)$image->encode());
            $ruleImage->update([
                'rule_image' => $fileName
            ]);
            return back();
        }
    }

  
}
