<?php

namespace App\Http\Controllers\Admin\Cities;

use App\Models\City;
use App\Models\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Cities\StoreRequest;
use App\Http\Requests\Admin\Cities\UpdateRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $cities = City::all();
        return view('admin.pages.cities.index')->with('cities', $cities);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $countries = Country::all();
        return view('admin.pages.cities.create')->with('countries', $countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $city = new City();
        $city->name = $request->name;
        $city->country()->associate($request->country);
        $city->save();

        return redirect()->route('admin.cities.index');
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
     * @return Application|Factory|View
     */
    public function edit($id)
    {

        $city = City::findOrFail($id);
        $countries = Country::all();

        return view('admin.pages.cities.edit')->with([
            'city' => $city,
            'countries' => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, $id)
    {
        $city = City::findOrFail($id);
        $city->name = $request->name;
        $city->country()->associate($request->country);
        $city->update();

        return redirect()->route('admin.cities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();
        return redirect()->back();
    }
}
