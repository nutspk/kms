<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\create_mainmenu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class CoursesController extends Controller
{
    function index(){
        return view('courses.head');
    }
    function main(){
        return view('courses.main');
    }
    function pagevdo(){
        return view('courses.VDO');
    }
    function couresePage1(){
        return view('courses.couresePage1');
    }
    function couresePage2(){
        return view('courses.couresePage2');
    }
    function couresePageJAJA(){
        return view('courses.couresePageJAJA');
    }
    function couresePageJAJA2(){
        return view('courses.couresePageJAJA2');
    }
    function coureseVDO(){
        return view('courses.coureseVDO');
    }
    function coureseJAVA(){
        return view('courses.coureseJAVA');
    }
    function coureseJAVA2(){
        return view('courses.coureseJAVA2');
    }
    function test(){
        return view('courses.head2');
    }
    function courses($id_menumain){
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

        // return view('courses.courses');
    }
    public function addsubcoures(){
        return view('Blackened.Coures.addsubcoures');
    }
}
