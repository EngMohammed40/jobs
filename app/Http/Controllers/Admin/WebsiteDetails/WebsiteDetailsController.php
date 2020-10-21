<?php

namespace App\Http\Controllers\Admin\WebsiteDetails;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WebsiteDetails\UpdateRequest;
use App\Models\WebsiteDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Image;

class WebsiteDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $website = WebsiteDetail::find('1');
        return view('admin.pages.website_details.index')->with('website', $website);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $website = WebsiteDetail::find($id);
        $website->website_name = $request->website_name;
        $website->website_currency = $request->website_currency;
        $website->website_description = $request->website_description;
        $website->website_keywords = $request->website_keywords;
        $website->website_email = $request->website_email;
        $website->website_phone = $request->website_phone;
        $website->website_fax = $request->website_fax;
        $website->website_address = $request->website_address;
        $website->website_mail = $request->website_mail;
        $website->website_facebook = $request->website_facebook;
        $website->website_google = $request->website_google;
        $website->website_twitter = $request->website_twitter;
        $website->website_instagram = $request->website_instagram;
        $website->website_youtube = $request->website_youtube;

        if ($request->hasFile('logo_img')) {

            if ($website->website_logo != '') {
                Storage::delete('public/website_images/' . $website->website_logo);
            }

            $website_logo = $request->file('logo_img');
            $fileName = time() . '.' . $website_logo->getClientOriginalExtension();
            $image = Image::make($website_logo)->resize(255, 103);
            Storage::disk('public')->put("website_images/" . $fileName, (string)$image->encode());

            $website->website_logo = $fileName;
        }

        $website->update();
        return redirect()->route('admin.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
