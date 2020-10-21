<?php

namespace App\Http\Controllers\User\Front\OtherWebsites;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtherWebsitesController extends Controller
{
    public function index(){
        return view('user.front.other_websites.index');
    }
}
