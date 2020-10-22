<?php

namespace App\Http\Controllers\Admin\OtherWebsites;

use App\Models\OtherWebsites\OtherWebsitesBanner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;
class UpperBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upperBanner = OtherWebsitesBanner::query()->findOrFail(1);
        return view('admin.pages.other-websites.upper-banner.index',['upperBanner' => $upperBanner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $this->validate($request,[
            'head' => 'required',
            'desc' => 'required',
        ]);
        $upperBanner = OtherWebsitesBanner::query()->findOrFail($id);
        $upperBanner->update([
            'head' => $request->head,
            'desc' => $request->desc,
        ]);
        if ($request->hasFile('banner_image')) {
            Storage::delete('public/other_websites_images/' . $upperBanner->image);
            $banner_image = $request->file('banner_image');
            $fileName = time() . '.' . $banner_image->getClientOriginalExtension();

            $image = Image::make($banner_image);
            Storage::disk('public')->put("other_websites_images/" . $fileName, (string)$image->encode());
            $upperBanner->update([
                'image' => $fileName
            ]);
        }
        return back()->with(['success' => 'تم التعديل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
