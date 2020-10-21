<?php

namespace App\Http\Controllers\Admin\Expertises;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\Expertises\StoreRequest;
use App\Http\Requests\Admin\Expertises\UpdateRequest;
use Illuminate\Support\Str;
use App\Models\Expertise;

class ExpertisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('expertises-edit')) {
        //     return abort(401);
        // }

        $expertises = Expertise::all();
        return view('admin.pages.expertises.index')->with('expertises',$expertises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (! Gate::allows('expertises-add')) {
        //     return abort(401);
        // }
        return view('admin.pages.expertises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expertise = new Expertise();
        $expertise->name = $request->name;
        $expertise->slug = Str::slug($request->name, '-');
        $expertise->save(); 
        return redirect()->route('admin.expertises.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expertise = Expertise::find($id);
        // if (! Gate::allows('expertises-edit')) {
        //     return abort(401);
        // }
        return view('admin.pages.expertises.edit')->with('expertise',$expertise);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $expertise = Expertise::find($id);
        $expertise->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);
         return redirect()->route('admin.expertises.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expertise = Expertise::find($id);
        $expertise->delete(); 
        return redirect()->route('admin.expertises.index');
    }
}
