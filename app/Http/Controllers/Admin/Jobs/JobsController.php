<?php

namespace App\Http\Controllers\Admin\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

use App\Models\Job;
use App\Models\Country;

class JobsController extends Controller
{
    public function index(){
        $jobs = Job::all();
        return view('admin.pages.jobs.index')->with([
           'jobs' => $jobs,
        ]);
    }
    public function create(){
        $countries = Country::all();
        return view('admin.pages.jobs.create')->with([
         'countries' => $countries,    
        ]);
    }
    
    public function store(Request $request){
        $job = new Job();
        $job->insert([
            'title' => $request->title,
            'description' => $request->description,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
        ]);
         Session::flash('success','تمت الاضافة بنجاح');
        return redirect()->route('admin.jobs.index');
    }
    
    public function edit($id){
        $job = Job::find($id);
        $countries = Country::all();
        return view('admin.pages.jobs.edit')->with(
        [
            'job' => $job,
            'countries' => $countries,  
        ]
        );
    }
    
    public function update(Request $request,$id){
        $job = Job::find($id);

        $job->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        $job->country_id = $request->country_id;
        $job->city_id = $request->city_id;
        $job->save();
        Session::flash('success', 'تم التعديل بنجاح'); 
        return redirect()->route('admin.jobs.index');
    }
    
    public function destroy($id){
        $job = Job::find($id);
        $job->delete();
        Session::flash('success','تم الحذف بنجاح');
        return redirect()->route('admin.jobs.index');
    }
}
