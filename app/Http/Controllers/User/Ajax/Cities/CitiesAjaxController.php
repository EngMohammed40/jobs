<?php

namespace App\Http\Controllers\User\Ajax\Cities;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\City;
use App\Models\Region;

class CitiesAjaxController extends Controller
{
    public function get_cities(Request $request)
    {
        $country = Country::find($request->id);
        $cities = $country->cities;

        $html = '';
        foreach($cities as $city){
            $html .= '<option value="'.$city->id.'" >'.$city->name.'</option>'; 
        }

        return $html;

    }


     public function get_region_cities(Request $request)
    {
     
        $regions = Region::where('city_id',$request->id)->get();

        $html = '';
        foreach($regions as $region){
            $html .= '<option value="'.$region->id.'" >'.$region->name.'</option>'; 
        }

        return $html;

    }
}
