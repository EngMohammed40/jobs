<?php

namespace App\Http\Controllers\User\Ajax\Regions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Regions;

class RegionsAjaxController extends Controller
{
    
    public function get_regions(Request $request)
    {
        $country = Country::find($request->id);
        $cities = $country->cities;

        $html = '';
        foreach($cities as $city){
            $html .= '<option value="'.$city->id.'" >'.$city->name.'</option>'; 
        }

        return $html;

    }
}
