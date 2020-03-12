<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listsub;
use App\create_subcoures;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class listController extends Controller
{
    public function addlist(){
        $main = create_subcoures::All();
        // dd($couressub);
        return view('Blackened.Coures.addlist')->with('main', $main);
        // return view("addsubcoures",['couressub' => $couressub]); 

        // return view('addsubcoures');
        
    }

    public function addlistfrom(Request $request)
    {
        // $subcores=DB::table('main__department')
        // ->join('couressub', 'main__department.id_menumain', '=', 'couressub.id_menumain')
        // // ->select('users.id', 'contacts.phone', 'orders.price')
        // ->where('couressub.id_menumain','=',3)
        // ->get();
        // // return view('addsubcoures',["subcores"=>$subcores]);

        $stringImageReFormat=base64_encode('_'.time()); //เปลี่ยนชื่อภาพเข้ารหัส ชื่อ _เวลา
        $ext=$request->file('img_list')->getClientOriginalExtension();
        $imageName=$stringImageReFormat.".".$ext;
        $imageEncoded=File::get($request->img_list); //เอาภาพเก็บไว้ในตัวแปล$imageEncoded
        
        Storage::disk('local')->put('public/image/'.$imageName,$imageEncoded);

        $listcoures=new listsub;
        // $couressub=new main__department;

        // $couressub->$subcores;
        $listcoures->titallist=$request->titallist;
        $listcoures->Description=$request->Description;
        $listcoures->img_list=$imageName;
        $listcoures->Check=$request->Check;
        $listcoures->id_sub=$request->id_sub;
        // $couressub->main__department()->associate($main__department);
        // $couressub->id_menumain=$request->get('id_menumain');
        $request->session()->put("listcoures",$listcoures);
        $listcoures->save();
        return redirect('/addlist');
       
    }

    public function showlist($id_sub){
 

        if($listcoures= DB::table('listsubs')->where('Check', '=', 'y')
        ->where('id_sub', '=', $id_sub)->paginate(3))  {
            // $newsdata=newslist::all();
          
            return view("courses.couresePage",['listcoures'=>$listcoures]); 
            // dd($newsdata);
        }    
        
        else{
            return view('adddatalist');
        }


    }
   
}
