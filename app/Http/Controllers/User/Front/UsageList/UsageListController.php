<?php

namespace App\Http\Controllers\User\Front\UsageList;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsageListController extends Controller
{
    public function index(){
        $articles = Article::query()->get();
        return view('user.front.usage-list.index',['articles' => $articles]);
    }
}
