<?php

namespace App\Http\Controllers\Admin\OtherWebsites;

use App\Models\OtherWebsites\FreeWebsite;
use foo\bar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;
class FreeWebsitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $websites = FreeWebsite::query()->get();
        return view('admin.pages.other-websites.free-websites.index',['websites' => $websites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.other-websites.free-websites.create');
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
            'link' => 'required|url',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();

            $image = Image::make($image);
            Storage::disk('public')->put("other_websites_images/" . $fileName, (string)$image->encode());

            FreeWebsite::create([
                'link' => $request->link,
                'image' => $fileName,
            ]);
        }else{
            return back();
        }

        return redirect()->route('admin.other-websites-free.index')->with(['success' => 'تم اضافة الموقع بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $website = FreeWebsite::query()->findOrFail($id);
        return view('admin.pages.other-websites.free-websites.show',['website' => $website]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $website = FreeWebsite::query()->findOrFail($id);
        return view('admin.pages.other-websites.free-websites.edit',['website' => $website]);
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
        $website = FreeWebsite::query()->findOrFail($id);
        $this->validate($request,[
            'image' => 'image|mimes:png,jpg,jpeg,gif',
        ]);
        $website->update(['link' => $request->link]);
        if ($request->hasFile('image')) {
            Storage::delete('public/other_websites_images/' . $website->image);
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();

            $image = Image::make($image);
            Storage::disk('public')->put("other_websites_images/" . $fileName, (string)$image->encode());

            $website->update([
                'image' => $fileName
            ]);
        }
        return redirect()->route('admin.other-websites-free.index')->with(['success' => 'تم تعديل الموقع بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $website = FreeWebsite::query()->findOrFail($id);
        Storage::delete('public/other_websites_images/' . $website->image);
        $website->delete();
        return back()->with(['success' => 'تم الحذف بنجاح']);
    }
}
