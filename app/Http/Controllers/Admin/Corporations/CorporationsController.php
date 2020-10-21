<?php

namespace App\Http\Controllers\Admin\Corporations;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Corporation;

class CorporationsController extends Controller
{
  public function index(){
      $corporations = Corporation::all();
      return view('admin.pages.corporations.index')->with('corporations',$corporations);
  }
  
  public function banner(){
      return view('admin.pages.corporations.banner.index');
  }
  
}
