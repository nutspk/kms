<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
use App\travel;
use App\Type_locations;
use App\files;

class TravelController extends Controller
{
    function index(){
        return view('travel.main');
    }
    function travel(){
        return view('travel.travelSanook');
    }
    function eat(){
        return view('travel.eat');
    }
    function shop(){
        return view('travel.shop');
    }
    function hotel(){
        return view('travel.hotel');
    }
    // function detaileat(){
    //     return view('travel.detail.eat.detaileat');
    // }
    // function detailshop(){
    //     return view('travel.detail.shop.detailshop');
    // }
    // function detailtravel(){
    //     return view('travel.detail.travel.detailtravel');
    // }
    // function detailhotel(){
    //     return view('travel.detail.hotel.detailhotel');
    // }


    function detaileat2(){
        return view('travel.detail.eat.detaileat2');
    }
    function detailshop2(){
        return view('travel.detail.shop.detailshop2');
    }
    function detailtravel2(){
        return view('travel.detail.travel.detailtravel2');
    }
    function detailhotel2(){
        return view('travel.detail.hotel.detailhotel2');
    }


    function detaileat3(){
        return view('travel.detail.eat.detaileat3');
    }
    function detailshop3(){
        return view('travel.detail.shop.detailshop3');
    }
    function detailtravel3(){
        return view('travel.detail.travel.detailtravel3');
    }
    function detailhotel3(){
        return view('travel.detail.hotel.detailhotel3');
    }


    function detaileat4(){
        return view('travel.detail.eat.detaileat4');
    }
    function detailshop4(){
        return view('travel.detail.shop.detailshop4');
    }
    function detailtravel4(){
        return view('travel.detail.travel.detailtravel4');
    }
    function detailhotel4(){
        return view('travel.detail.hotel.detailhotel4');
    }


    public function addlocationform()///เรียกหน้าเพิ่มโลเคชั่น
    {
        $type = Type_locations::All();

        return view('Blackened.Travel.insertsongkhla')->with('type',$type);
    }
    public function addlocation(Request $request) //เพิ่มโลเคชั่น
    {
        // validate
        // $request->validate([
        //     'name' => 'required', ///ห้ามเป็นค่าว่าง
        //     'description' =>'required',
        //     'category' =>'required',
        //     'image' =>'required|file|image|mimes:jpeg,png,jpg|max:5000',//เช็ค ต้องเป็นไฟล img กำหนดสกุล ขนาด หน่วยกิโลไบต์
        //     'price' =>'required|numeric'
        // ]);
        
        //covert name img
        $stringImageReFormat=base64_encode('_'.time()); //เปลี่ยนชื่อภาพเข้ารหัส ชื่อ _เวลา
        $ext=$request->file('image')->getClientOriginalExtension();

        $imageName=$stringImageReFormat.".".$ext;
        $imageEncoded=File::get($request->image); //เอาภาพเก็บไว้ในตัวแปล$imageEncoded
        
       
        //upload & insert
        Storage::disk('local')->put('public/Location_image/'.$imageName,$imageEncoded);

        $product=new travel;
        $product->name_location=$request->name;
        $product->type_id=$request->id_type;
        $product->map_url=$request->Location;
        $product->description=$request->description;  //format ตัวแปร->Attributdb=$request->ค่าในform
        $product->display=$request->display;
        $product->image=$imageName;

        $product->save();

        Session()->flash('success', 'บัณทึกข้อมูลสำเร็จ');
        return redirect('/addlocation');


     }
     public function AlllocationTravel()
     {
        $data_travel = travel::where('type_id','1')->where('display', '=', 'y')->paginate(8);
        return view('travel.travelsanook')->with('travel',$data_travel);
             
     }

     public function detailTravel($id){
          $data_Travel = travel::find($id);
          $data_img = files::where('id_travel', '=', $id)->get();

             
                if($id = $data_Travel){
                    return view('travel.detail.Travel.detailTravel')->with('travels',$data_Travel)->with('img',$data_img);   

                    // dump('ถูก');
                }
                else{

                    return view('travel.detail.Travel.detailTravel');
                    // dump  ('ผิด');
                }
            //  return view('travel.detail.Travel.detailTravel')->with('travels',$data_Travel);
     }

     public function AlllocationEat()
     {
        $data_travel = travel::where('type_id','2')->where('display', '=', 'y')->paginate(8);
        return view('travel.eat')->with('travel',$data_travel);
             
     }

     public function detailEat($id){
          $data_Travel = travel::find($id);
          $data_img = files::where('id_travel', '=', $id)->get();

             
                if($id = $data_Travel){
                    return view('travel.detail.eat.detaileat')->with('travels',$data_Travel)->with('img',$data_img);   

                    // dump('ถูก');
                }
                else{

                    return view('travel.detail.eat.detaileat');
                    // dump  ('ผิด');
                }

            //  return view('travel.detail.eat.detaileat')->with('travels',$data_Travel);
     }
     public function AlllocationShop()
     {
        $data_travel = travel::where('type_id','3')->where('display', '=', 'y')->paginate(8);
        return view('travel.shop')->with('travel',$data_travel);
             
     }

     public function detailShop($id){
          $data_Travel = travel::find($id);
          $data_img = files::where('id_travel', '=', $id)->get();

             
          if($id = $data_Travel){
              return view('travel.detail.shop.detailshop')->with('travels',$data_Travel)->with('img',$data_img);   

              // dump('ถูก');
          }
          else{

              return view('travel.detail.shop.detailshop');
              // dump  ('ผิด');
          }
            //  return view('travel.detail.shop.detailshop')->with('travels',$data_Travel);
     }

     public function Alllocationhotel()
     {
        $data_travel = travel::where('type_id','4')->where('display', '=', 'y')->paginate(8);
        return view('travel.hotel')->with('travel',$data_travel);
             
     }

     public function detailhotel($id){
          $data_Travel = travel::find($id);
          $data_img = files::where('id_travel', '=', $id)->get();

             
          if($id = $data_Travel){
              return view('travel.detail.hotel.detailhotel')->with('travels',$data_Travel)->with('img',$data_img);   

              // dump('ถูก');
          }
          else{

              return view('travel.detail.hotel.detailhotel');
              // dump  ('ผิด');
          }
        //   return view('travel.detail.hotel.detailhotel')->with('travels',$data_Travel);
     }

     

}
