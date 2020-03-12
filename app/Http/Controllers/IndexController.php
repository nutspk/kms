<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function indexNOnews(){
        
        return view('index.index');

    }
    function index(){
        
        return view('index.contennews');

    }
    function ActivityNew(){
        
        return view('ActivityNew.main');

    }
    function NavActivityNew(){
        
        return view('ActivityNew.Conten.indexNews');

    }
    function News1(){
        
        return view('ActivityNew.Conten.body');

    }
    function News2(){
        
        return view('ActivityNew.Conten.News2');

    }
    function News3(){
        
        return view('ActivityNew.Conten.News3');

    }
    function News4(){
        
        return view('ActivityNew.Conten.News4');

    }
    function News5(){
        
        return view('ActivityNew.Conten.News5');

    }
    function Newsindex(){
        
        return view('ActivityNew.body');

    }
    function Activity(){
        
        return view('ActivityNew.mainActivityNew.Activity');

    }
    function NewsCom(){
        
        return view('ActivityNew.mainActivityNew.NewsCom');

    }
    function News6(){
        
        return view('ActivityNew.Conten.News6');

    }
    function test(){
        
        return view('courses.detallVDO');

    }
    function test2(){
        
        return view('courses.detallVDO2');

    }
    function test3(){
        
        return view('courses.detallVDO3');

    }
    function test4(){
        
        return view('courses.detallVDO4');

    }
    function layouts(){
        
        return view('layouts.admin');

    }
    function VDOJAVA(){
        
        return view('courses.detallVDOJAVA');

    }
    function VDOJAVA2(){
        
        return view('courses.detallVDOJAVA2');

    }
    function VDOJAVA3(){
        
        return view('courses.detallVDOJAVA3');

    }
    function VDOJAVA4(){
        
        return view('courses.detallVDOJAVA4');


    }

  
}
