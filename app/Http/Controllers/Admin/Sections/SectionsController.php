<?php

namespace App\Http\Controllers\Admin\Sections;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Sections\StoreRequest;
use App\Http\Requests\Admin\Sections\UpdateRequest;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Image;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $sections = section::all();
        return view('admin.pages.sections.index')->with('sections', $sections);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $sections = Section::where('parent_id', '=', 0)->get();
        return view('admin.pages.sections.create')->with('sections', $sections);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(StoreRequest $request)
    {
        $section = new Section();
        $section->name = $request->name;
        $section->slug = str_slug($request->name);
        if ($request->parent_id !== 0) {
            $section->parent()->associate($request->parent_id);
        }

        if ($request->hasFile('section_img')) {

            $section_img = $request->file('section_img');
            $fileName = time() . '.' . $section_img->getClientOriginalExtension();
            $image = Image::make($section_img)->resize(50, 50);
            Storage::disk('public')->put("sections_images/" . $fileName, (string)$image->encode());
            $section->image = $fileName;
        }

        $section->save();
        return redirect()->route('admin.sections.index');
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
     * @return Response
     */
    public function edit($id)
    {


        $section = Section::find($id);
        $sections = Section::whereNotIn('id', $section->subsection()->pluck('id')) // exclude subsections
        ->where('id', '<>', $section->id) // and the section itself
        ->where('parent_id', '=', 0)
            ->get();

        return view('admin.pages.sections.edit')->with([
            'section' => $section,
            'sections' => $sections
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $section = Section::find($id);
        $section->name = $request->name;
        $section->slug = str_slug($request->name);
        if ($request->parent_id !== 0) {
            $section->parent()->associate($request->parent_id);
        }

        if ($request->hasFile('section_img')) {

            Storage::delete('public/sections_images/' . $section->image);

            $section_img = $request->file('section_img');
            $fileName = time() . '.' . $section_img->getClientOriginalExtension();
            $image = Image::make($section_img)->resize(50, 50);
            Storage::disk('public')->put("sections_images/" . $fileName, (string)$image->encode());
            $section->image = $fileName;
        }

        $section->update();
        return redirect()->route('admin.sections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $section = Section::find($id);
        $subsections = $section->subsection;
        foreach ($subsections as $subsection) {
            $subsection->parent_id = 0;
            $subsection->update();
        }
        Storage::delete('public/sections_images/' . $section->image);
        $section->delete();
        return redirect()->route('admin.sections.index');
    }
}
