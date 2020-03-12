<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\create_mainmenu;
use App\create_subcoures;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;


class SubcouresController extends Controller
{
    public function addsub(){
        $main = create_mainmenu::All();
        // dd($couressub);
        return view('Blackened.Coures.addsubcoures')->with('main', $main);
        // return view("addsubcoures",['couressub' => $couressub]); 

        // return view('addsubcoures');
        
    }

    public function addsubcoures(Request $request)
    {
        // $subcores=DB::table('main__department')
        // ->join('couressub', 'main__department.id_menumain', '=', 'couressub.id_menumain')
        // // ->select('users.id', 'contacts.phone', 'orders.price')
        // ->where('couressub.id_menumain','=',3)
        // ->get();
        // // return view('addsubcoures',["subcores"=>$subcores]);

        $stringImageReFormat=base64_encode('_'.time()); //เปลี่ยนชื่อภาพเข้ารหัส ชื่อ _เวลา
        $ext=$request->file('img_sub')->getClientOriginalExtension();
        $imageName=$stringImageReFormat.".".$ext;
        $imageEncoded=File::get($request->img_sub); //เอาภาพเก็บไว้ในตัวแปล$imageEncoded
        
        Storage::disk('local')->put('public/image/'.$imageName,$imageEncoded);

        $couressub=new create_subcoures;
        // $couressub=new main__department;

        // $couressub->$subcores;
        $couressub->name_sub=$request->name_sub;
        $couressub->img_sub=$imageName;
        $couressub->Check=$request->Check;
        $couressub->id_menumain=$request->id_menumain;
        $couressub->description_sub=$request->description_sub;
        // $couressub->id_menumain=$request->get('id_menumain');
        // $request->session()->put("couressub",$couressub);
        $couressub->save();
        return redirect('addsubcoures');

       
    }
  
    public function showsubcoures($id_menumain){
        
        if($couressub= DB::table('create_subcoures')
        ->where('Check', '=', 'y')->where('id_menumain', '=', $id_menumain)->get())  {
            // dd($subvedio);
           
            return view("courses.courses")
            ->with('couressub',$couressub); 
            // ->where('type_sub', '=', 'des')
        }    
        
        else
        {
            return view('Blackened.Coures.addsubcoures');
        }


    }
    // public function id_menumain($id_menumain)
    // {
    //     // dd($id_menumain);
    //     $couressub=$id_menumain;
    //     if($couressub= DB::table('create_subcoures')
    //     ->where('Check', '=', 'y')->where('id_menumain', '=', $id_menumain)->get())  {
    //         // dd($subvedio);
    //         return view("Blackened.Coures.showsub",['couressub' => $couressub]); 
    //         // ->where('type_sub', '=', 'des')
    //     }    
        
    //     else
    //     {
    //         return view('Blackened.Coures.addsubcoures');
    //     }

    // }
}
