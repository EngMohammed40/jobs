<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Article;
use App\Models\User;
use Auth;
use Session;

class DashboardController extends Controller
{

    public $numOfUsersShowInHomePage = 20;

    public function index()
    {
        $users = User::latest()->take($this->numOfUsersShowInHomePage)->get();
        $allUsersCount = User::all()->count();
        $allArticlesCount = Article::all()->count();
        $allAdsCount = Ad::all()->count();

        return view('admin.dashboard.index')->with([
            'users'             => $users,
            'allUsersCount'     => $allUsersCount,
            'allArticlesCount'  => $allArticlesCount,
            'allAdsCount'       => $allAdsCount,
        ]);
    }

    public function mode($value)
    {
        Session::put('mode', $value);
    }

}
