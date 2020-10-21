<?php

namespace App\Http\Controllers\Admin\Countries;

use App\Models\city;
use App\Models\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Countries\StoreRequest;
use App\Http\Requests\Admin\Countries\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Image;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('admin.pages.countries.index')->with('countries', $countries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(StoreRequest $request)
    {
        $country = new Country();
        $country->name = $request->name;
        $country->slug = str_slug($request->name);
        $country->code = $request->code;
        $country->location_code = $request->location_code;
        $country->currency = $request->currency;

        if ($request->hasFile('country_img')) {

            $country_img = $request->file('country_img');
            $fileName = time() . '.' . $country_img->getClientOriginalExtension();
            $image = Image::make($country_img)->resize(300, 120);
            Storage::disk('public')->put("countries_images/" . $fileName, (string)$image->encode());
            $country->image = $fileName;
        }

        $country->save();
        return redirect()->route('admin.countries.index');
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
        $country = Country::find($id);
        return view('admin.pages.countries.edit')->with('country', $country);
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
        $country = Country::findOrFail($id);
        $country->name = $request->name;
        $country->slug = str_slug($request->name);
        $country->code = $request->code;
        $country->location_code = $request->location_code;
        $country->currency = $request->currency;

        if ($request->hasFile('country_img')) {

            Storage::delete('public/countries_images/' . $country->image);

            $country_img = $request->file('country_img');
            $fileName = time() . '.' . $country_img->getClientOriginalExtension();
            $image = Image::make($country_img)->resize(300, 120);
            Storage::disk('public')->put("countries_images/" . $fileName, (string)$image->encode());
            $country->image = $fileName;
        }

        $country->update();
        return redirect()->route('admin.countries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete();
        Storage::delete('public/countries_images/' . $country->image);

        $cities = $country->cities;
        foreach ($cities as $city) {
            $city->delete();
        }
        return redirect()->route('admin.countries.index');
    }
}
