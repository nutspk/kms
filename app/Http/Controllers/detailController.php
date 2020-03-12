<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listsub;
use App\detailcoures;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class detailController extends Controller
{
    public function adddetail(){
        $main = listsub::All();
        // dd($couressub);
        return view('Blackened.Coures.adddetail')->with('main', $main);
    }

    public function addfromdetail(Request $request)
    {
        // $subcores=DB::table('main__department')
        // ->join('couressub', 'main__department.id_menumain', '=', 'couressub.id_menumain')
        // // ->select('users.id', 'contacts.phone', 'orders.price')
        // ->where('couressub.id_menumain','=',3)
        // ->get();
        // // return view('addsubcoures',["subcores"=>$subcores]);

        $stringImageReFormat=base64_encode('_'.time()); //เปลี่ยนชื่อภาพเข้ารหัส ชื่อ _เวลา
        $ext=$request->file('img_detail')->getClientOriginalExtension();
        $imageName=$stringImageReFormat.".".$ext;
        $imageEncoded=File::get($request->img_detail); //เอาภาพเก็บไว้ในตัวแปล$imageEncoded
        
        Storage::disk('local')->put('public/image/'.$imageName,$imageEncoded);

        $detaildata=new detailcoures; 
        // $couressub=new main__department;

        // $couressub->$subcores;
        $detaildata->titaldetail=$request->titaldetail;
        $detaildata->Description_detail=$request->Description_detail;
        $detaildata->img_detail=$imageName;
        $detaildata->Check=$request->Check; 
        $detaildata->id_list=$request->id_list;
        // $couressub->main__department()->associate($main__department);
        // $couressub->id_menumain=$request->get('id_menumain');
        $request->session()->put("detaildata",$detaildata);
        $detaildata->save();
        return redirect('adddetail');

       
    }

    public function showdetail($id_list){
        if($detaildata= DB::table('detailcoures')->where('Check', '=', 'y')->where('id_list', '=', $id_list)->get())  {
            // $newsdata=newslist::all();
            return view("courses.coureseDetail",['detaildata' => $detaildata]); 
            // dd($newsdata);
        }    
        
        else{
            return view('adddatalist');
        }


    }
}
