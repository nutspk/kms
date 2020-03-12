<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\create_mainmenu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;


class MainmenuController extends Controller
{
    public function addmenu(){
        return view('Blackened.Coures.addmenumain');
        
    }

    public function addmenumain(Request $request){
        // $request->validate([
        //     'Wroding' => 'required',
            
        //     'dispaly' => 'required',
        //     'iconpart' => 'required|file|image|mimes:png|max:5000'

        // ]);
        
        $stringImageReFormat=base64_encode('_'.time()); //เปลี่ยนชื่อภาพเข้ารหัส ชื่อ _เวลา
        $ext=$request->file('iconpart')->getClientOriginalExtension();
        $imageName=$stringImageReFormat.".".$ext;
        $imageEncoded=File::get($request->iconpart); //เอาภาพเก็บไว้ในตัวแปล$imageEncoded
        
        Storage::disk('local')->put('public/image/'.$imageName,$imageEncoded);

        $datamenu=new create_mainmenu;
        $datamenu->Wroding=$request->Wroding;
        $datamenu->dispaly=$request->dispaly;
        $datamenu->iconpart=$imageName;
        $request->session()->put("datamenu",$datamenu);
        $datamenu->save();
        return view('Blackened.Coures.addmenumain');
        // dd("ok");
    }

    public function showmenumain()  
    {
        // $newsdata= DB::table('newslist')->where('Check', '=', 'y')->get();
        // return view("shownewsdata",['newsdata' => $newsdata]); 

        if($datamenu= DB::table('create_mainmenus')->where('dispaly', '=', 'y')->get())  {
            // $newsdata=newslist::all();
            return view("index.head",['datamenu' => $datamenu])
            ; 
            // dd($datamenu);
        }    
        
        else{
            return view('Blackened.Coures.addmenumain');
        }

    }

    public function showmenumaintest()  
    {
        // $newsdata= DB::table('newslist')->where('Check', '=', 'y')->get();
        // return view("shownewsdata",['newsdata' => $newsdata]); 

        if($datamenu= DB::table('create_mainmenus')->where('dispaly', '=', 'y')->get())  {
            // $newsdata=newslist::all();
            return view("test",['datamenu' => $datamenu])
            ; 
            // dd($datamenu);
        }    
        
        else{
            return view('Blackened.Coures.addmenumain');
        }

    }

    
}
