<?php

namespace App\Http\Controllers\User\Front\OtherWebsites;

use App\Models\Article;
use App\Models\OtherWebsites\FreeWebsite;
use App\Models\OtherWebsites\OtherWebsitesBanner;
use App\Models\OtherWebsites\PaidWebsite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtherWebsitesController extends Controller
{
    public function index(){
        $articles = Article::all();
        $upperBanner = OtherWebsitesBanner::query()->findOrFail(1);
        $lowerBanner = OtherWebsitesBanner::query()->findOrFail(2);
        $freeWebsites = FreeWebsite::query()->get();
        $paidWebsites = PaidWebsite::query()->get();
        return view('user.front.other_websites.index',[
            'articles' => $articles,
            'upperBanner' => $upperBanner,
            'lowerBanner' => $lowerBanner,
            'freeWebsites' => $freeWebsites,
            'paidWebsites' => $paidWebsites,
        ]);
    }
}
