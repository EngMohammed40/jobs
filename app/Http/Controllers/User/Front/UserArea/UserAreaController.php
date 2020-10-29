<?php

namespace App\Http\Controllers\User\Front\UserArea;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAreaController extends Controller
{
    public function index(){
        $articles = Article::query()->get();
        return view('user.front.users-area.index',['articles' => $articles]);
    }
}
