<?php

namespace App\Http\Controllers\User\Front\SaudiJobs;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaudiJobsController extends Controller
{
    public function index(){
        $articles = Article::query()->get();
        return view('user.front.saudi-jobs.index',['articles' => $articles]);
    }
}
