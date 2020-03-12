<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use App\NewsList;
use App\TypeNews;
class NewsListController extends Controller
{
    public function adddata()
    {
        $main = TypeNews::All();
        return view('Blackened.News.adddata')->with('main',$main);
    }
    public function adddatafrom(Request $request){
        // $request->validate([
        //     'Titelnews' => 'required',
        //     'Typenews' => 'required',
        //     'Check' => 'required',
        //     'imgnews' => 'required|file|image|mimes:jpeg,png,jpg|max:5000'

        // ]);
        
        $stringImageReFormat=base64_encode('_'.time()); //เปลี่ยนชื่อภาพเข้ารหัส ชื่อ _เวลา
        $ext=$request->file('imgnews')->getClientOriginalExtension();
        $imageName=$stringImageReFormat.".".$ext;
        $imageEncoded=File::get($request->imgnews); //เอาภาพเก็บไว้ในตัวแปล$imageEncoded
        
        Storage::disk('local')->put('public/image/'.$imageName,$imageEncoded);
        // request()->file('image')->store('public/images'.$imageName,$imageEncoded);
        

        $newsdata=new NewsList;
        $newsdata->Titelnews=$request->Titelnews;
        $newsdata->Description_news=$request->Description_news;
        $newsdata->Check=$request->Check;
        $newsdata->id_typenews=$request->id_typenews;
        $newsdata->imgnews=$imageName;
        $request->session()->put("newsdata",$newsdata);
        $newsdata->save();
        return redirect('/adddata');
    }

    
    
}
