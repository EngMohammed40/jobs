<?php
namespace App\Http\Controllers\Admin\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Session;
use App\Models\Company;

class CompaniesController extends Controller{
    public function index(){
      $companies = Company::all();
      return view('admin.pages.companies.index')->with([
         'companies' => $companies
        ]);
    }
}