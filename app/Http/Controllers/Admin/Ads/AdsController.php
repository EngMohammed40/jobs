<?php

namespace App\Http\Controllers\Admin\Ads;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ads\StoreRequest;
use App\Http\Requests\Admin\Ads\UpdateRequest;
use App\Models\Ad;
use App\Models\AdsGroup;
use App\Models\AdsImage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Image;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $ads = Ad::all();
        return view('admin.pages.ads.index')->with('ads', $ads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {

        $adsgroups = AdsGroup::all();
        return view('admin.pages.ads.create')->with('adsgroups', $adsgroups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $ad = new Ad();
        $ad->name = $request->name;
        $ad->type = $request->type;
        $ad->content = $request->content;
        $ad->link = $request->link;
        $ad->adgroup_id = $request->adgroup_id;

        $ad->save();

        if ($request->hasFile('ad_img')) {
            foreach ($request->file('ad_img') as $ad_img) {
                $fileName = time() . '.' . $ad_img->getClientOriginalExtension();
                $image = Image::make($ad_img)->resize(300, 300);
                Storage::disk('public')->put("ads_images/" . $fileName, (string)$image->encode());

                $new_image = new AdsImage();
                $new_image->name = $fileName;
                $new_image->ad()->associate($ad->id);
                $new_image->save();
            }
        }

        return redirect()->route('admin.ads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $ad = Ad::findOrFail($id);
        $adsgroups = AdsGroup::all();
        return view('admin.pages.ads.edit')->with(['ad' => $ad, 'adsgroups' => $adsgroups]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $ad = Ad::findOrFail($id);
        $ad->name = $request->name;
        $ad->link = $request->link;
        $ad->adgroup_id = $request->adgroup_id;
        $type = $request->type;

        // Storing The type.......
        $ad->type = $type;

        // Storing the content according to the type.................
        // img type..................
        if ($type == 'img' && $request->hasFile('ad_img')) {

            $ad->content = "";

            if ($ad->ad_images()->count() > 0) {
                foreach ($ad->ad_images as $image) {
                    Storage::delete('public/ads_images/' . $image->name);
                    $image->delete();
                }
            }

            foreach ($request->file('ad_img') as $ad_img) {
                $fileName = rand(10000000, 99999999) . '.' . $ad_img->getClientOriginalExtension();
                if ($ad_img->getClientOriginalExtension() == 'gif') {
                    $ad_img->storeAs('public/ads_images', $fileName);
                } else {

                    if ($id == 2 || $id == 3 || $id == 4 || $id == 5) {
                        $image = Image::make($ad_img)->resize(550, 130);
                    } elseif ($id == 12) {
                        $image = Image::make($ad_img)->resize(784, 380);
                    } elseif ($id == 13 || $id == 14 || $id == 15) {
                        $image = Image::make($ad_img)->resize(783, 60);
                    } elseif ($id == 16 || $id == 17) {
                        $image = Image::make($ad_img)->resize(275, 228);
                    } elseif ($id == 18 || $id == 19) {
                        $image = Image::make($ad_img)->resize(600, 110);
                    } else {
                        $image = Image::make($ad_img)->resize(390, 255);
                    }

                    Storage::disk('public')->put("ads_images/" . $fileName, (string)$image->encode());
                }

                $new_image = new AdsImage();
                $new_image->name = $fileName;
                $new_image->ad()->associate($ad->id);
                $new_image->save();
            }
        }

        // Google Type................
        if ($type == 'google') {
            $ad->content = $request->ad_google;
        }

        // None Type...........
        if ($type == 'none') {
            $ad->content = '';
        }

        $ad->update();
        return redirect()->route('admin.ads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $ad = Ad::findOrFail($id);
        $ad->delete();
        if ($ad->ad_images()->count() > 0) {
            foreach ($ad->ad_images()->get() as $image) {
                Storage::delete('public/ads_images/' . $image->name);
                return redirect()->route('admin.ads.index');
            }
        }
    }
}
