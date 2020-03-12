<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeNews;

class TypeNewsController extends Controller
{
    public function addtype()
    {
        return view('Blackened.News.addtypenews');
    }
    public function addtypenews(Request $request)
    {
        $newstype=new TypeNews;
        $newstype->typenews=$request->typenews;
        $newstype->Check=$request->Check;
        $request->session()->put("newstype",$newstype);
        $newstype->save();
        return redirect('/addtype');
    }
}
