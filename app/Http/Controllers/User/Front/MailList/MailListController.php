<?php

namespace App\Http\Controllers\User\Front\MailList;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailListController extends Controller
{
    public function index(){
        $articles = Article::query()->get();
        return view('user.front.mail-list.index',['articles' => $articles]);
    }
}
