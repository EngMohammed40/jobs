<?php

namespace App\Http\Controllers\Admin\Publishers;

use App\Models\JobCategory;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;
class PublishersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishers = Publisher::all();
        return view('admin.pages.jobs-publishers.index',['publishers' => $publishers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.jobs-publishers.create');
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
            Storage::disk('public')->put("jobs-publishers/" . $fileName, (string)$image->encode());
        }else{
            return back();
        }
        Publisher::create([
            'name' => $request->name,
            'image' => $fileName,
        ]);
        return redirect()->route('admin.jobs-publishers.index')->with(['success' => 'تم اضافة الناشر بنجاح']);
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
        $publisher = Publisher::query()->findOrFail($id);
        return view('admin.pages.jobs-publishers.edit',['publisher' => $publisher]);
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
        $publisher = Publisher::query()->findOrFail($id);
        $publisher->update(['name' => $request->name]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image = Image::make($image)->resize(300, 300);
            Storage::disk('public')->put("jobs-publishers/" . $fileName, (string)$image->encode());
            $publisher->update(['image' => $fileName]);
        }
        return redirect()->route('admin.jobs-publishers.index')->with(['success' => 'تم تعديل الناشر بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publisher = Publisher::query()->findOrFail($id);
        $publisher->delete();
        return back()->with(['success' => 'تم حذف الناشر بنجاح']);
    }
}
