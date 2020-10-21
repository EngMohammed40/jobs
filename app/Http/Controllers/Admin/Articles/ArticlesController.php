<?php

namespace App\Http\Controllers\Admin\Articles;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Articles\StoreRequest;
use App\Http\Requests\Admin\Articles\UpdateRequest;
use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Image;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.pages.articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.pages.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->link = $request->link;
        $article->description = $request->description;
        if ($request->hasFile('article_img')) {
            $article_img = $request->file('article_img');
            $fileName = time() . '.' . $article_img->getClientOriginalExtension();
            $image = Image::make($article_img)->resize(300, 300);
            Storage::disk('public')->put("articles_images/" . $fileName, (string)$image->encode());
            $article->image = $fileName;
        }

        $article->save();
        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {

        $article = Article::find($id);
        return view('admin.pages.articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->link = $request->link;
        $article->description = $request->description;
        if ($request->hasFile('article_img')) {

            Storage::delete('public/articles_images/' . $article->image);

            $article_img = $request->file('article_img');
            ImageOptimizer::optimize($article_img);
            $fileName = time() . '.' . $article_img->getClientOriginalExtension();
            $image = Image::make($article_img)->resize(300, 300);
            Storage::disk('public')->put("articles_images/" . $fileName, (string)$image->encode());
            $article->image = $fileName;
        }

        $article->save();
        return redirect()->route('admin.pages.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        Storage::delete('public/articles_images/' . $article->image);
        return redirect()->route('admin.articles.index');
    }
}
