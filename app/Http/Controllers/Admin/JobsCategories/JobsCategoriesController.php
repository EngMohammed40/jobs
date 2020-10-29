<?php

namespace App\Http\Controllers\Admin\JobsCategories;

use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;
class JobsCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = JobCategory::all();
        return view('admin.pages.jobs-categories.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.jobs-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:job_categories',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif'
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image = Image::make($image)->resize(300, 300);
            Storage::disk('public')->put("job-categories/" . $fileName, (string)$image->encode());
        }else{
            return back();
        }
        JobCategory::create([
            'name' => $request->name,
            'image' => $fileName,
        ]);
        return redirect()->route('admin.jobs-categories.index')->with(['success' => 'تم اضافة الفئة بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = JobCategory::query()->findOrFail($id);
        return view('admin.pages.jobs-categories.edit',['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|unique:job_categories',
            'image' => 'image|mimes:png,jpg,jpeg,gif'
        ]);
        $category = JobCategory::query()->findOrFail($id);
        $category->update(['name' => $request->name]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image = Image::make($image)->resize(300, 300);
            Storage::disk('public')->put("job-categories/" . $fileName, (string)$image->encode());
            $category->update(['image' => $fileName]);
        }
        return redirect()->route('admin.jobs-categories.index')->with(['success' => 'تم تعديل الفئة بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = JobCategory::query()->findOrFail($id);
        $category->delete();
        return back()->with(['success' => 'تم حذف الفئة بنجاح']);
    }
}
