<?php

namespace App\Http\Controllers\Admin\Regions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Cities\StoreRequest;
use App\Http\Requests\Admin\Cities\UpdateRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use App\Models\Country;
use App\Models\Region;
use App\Models\City;

class RegionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('cities-show')) {
        //     return abort(401);
        // }
        $regions = Region::all();
        return view('admin.pages.regions.index')->with('regions',$regions);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (! Gate::allows('cities-add')) {
        //     return abort(401);
        // }
        $countries = Country::all();
        return view('admin.pages.regions.create')->with('countries',$countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $region = new Region();
        $region->name = $request->name;
        $region->slug = Str::slug($request->name, '-');
        $region->country()->associate($request->country);
        $region->city()->associate($request->city);
        $region->save();

        return redirect()->route('admin.regions.index');
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
        // if (! Gate::allows('cities-edit')) {
        //     return abort(401);
        // }

        $region = Region::find($id);
        $countries = Country::all();
        $cities = City::all();
        return view('admin.pages.regions.edit')->with([
            'region'=>$region,
            'countries' =>$countries,
            'cities' => $cities
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $region = Region::find($id);
        $region->name = $request->name;
        $region->country()->dissociate();
        $region->city()->dissociate();
        $region->country()->associate($request->country);
        $region->city()->associate($request->city);
        $region->slug = Str::slug($request->name, '-');
        $region->update();
        
        return redirect()->route('admin.regions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region = Region::find($id);
        $region->country()->dissociate();
        $region->city()->dissociate();
        $region->delete();
        return redirect()->back();
    }
}
