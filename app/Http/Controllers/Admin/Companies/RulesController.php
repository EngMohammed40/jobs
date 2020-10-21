<?php
namespace App\Http\Controllers\Admin\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Models\Company_Page;
use App\Models\Rule;

class RulesController extends Controller{
    
    public function index(){
        $rules = Rule::where('page','=','companies')->get();
        $ruleImage = Company_Page::select('rules_img')->first();
        // dd($ruleImage);
      return view('admin.pages.companies.rules.index')->with([
          'rules' => $rules,
          'ruleImage' => $ruleImage
        ]);
    }
    
    
    public function create(){
        return view('admin.pages.companies.rules.create');
    }
    
     public function store(Request $request){
      $rule = new Rule();
      
      $rule->insert([
        'rule' => $request->input('rule'),
        'page' => $request->input('page'), 
        ]);
    
        return redirect()->route('admin.companies_rules.index');
  }
  
  
    public function edit($id){
      $rule = Rule::find($id);
      return view('admin.pages.companies.rules.edit')->with(['rule' => $rule]);
  }
  
    public function update(Request $request,$id){
      $rule = Rule::find($id);
            $rule->update([
               'rule' => $request->input('rule'),
            ]);
        return redirect()->route('admin.companies_rules.index');
  }
  
  
  public function destroy($id){
      $rule = Rule::find($id);
      $rule->delete();
      return back();
  }
    
    public function getImage(Request $request){
        $rule = Company_Page::find(1);
        
        if ($request->hasFile('rules_img')) {

            Storage::delete('public/companies_images/' . $rule->rules_img);

            $rule_image = $request->file('rules_img');
            $fileName = time() . '.' . $rule_image->getClientOriginalExtension();
            $image = Image::make($rule_image);
            Storage::disk('public')->put("companies_images/" . $fileName, (string)$image->encode());
            $rule->update([
                'rules_img' => $fileName    
            ]);
        }
        

        return back();
    }
}