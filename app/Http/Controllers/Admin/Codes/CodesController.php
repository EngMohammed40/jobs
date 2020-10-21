<?php

namespace App\Http\Controllers\Admin\Codes;

use App\Models\Code;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CodesController extends Controller
{

    public function index()
    {

        $css = Code::where('type', '=', 'css')->first()->content;
        $javascript = Code::where('type', '=', 'javascript')->first()->content;
        return view('admin.pages.codes.index')->with([
            'css' => $css,
            'javascript' => $javascript
        ]);
    }


    public function update(Request $request)
    {
        $css = Code::where('type', '=', 'css')->first();
        $css->content = $request->css;
        $css->update();

        $javascript = Code::where('type', '=', 'javascript')->first();
        $javascript->content = $request->javascript;
        $javascript->update();
        return redirect()->back()->with('success', 'تم تعديل الاكواد');
    }


}
