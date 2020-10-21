<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\StoreRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.pages.index')->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.pages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(StoreRequest $request)
    {
        $page = new Page();
        $page->name = $request->name;
        $page->slug = Str::slug($request->name, '-');
        $page->content = $request->content;
        $page->save();
        return redirect()->route('admin.pages.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.pages.pages.edit')->with('page', $page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::find($id);
        $page->name = $request->name;
        $page->slug = Str::slug($request->name, '-');
        $page->content = $request->content;
        $page->update();
        return redirect()->route('admin.pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect()->back();
    }
}
