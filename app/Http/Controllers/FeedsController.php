<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Feeds;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use App\NewsList;
use App\TypeNews;
use App\travel;

class FeedsController extends Controller
{
    public function news()
    {
       $feed = Feeds::make(['http://rssfeeds.sanook.com/rss/feeds/sanook/news.index.xml']);
       $data = array(
          'title'     => $feed->get_title(),
          'permalink' => $feed->get_permalink(),
          'items'     => $feed->get_items(),
       );
      
          $data_travel = travel::where('type_id','1')->where('display', '=', 'y')->get();///เที่ยว
          $data_eat = travel::where('type_id','2')->where('display', '=', 'y')->get();///กิน
          $data_shop = travel::where('type_id','3')->where('display', '=', 'y')->get();///ช้อป
          $data_hotel = travel::where('type_id','4')->where('display', '=', 'y')->get();///พัก
          $datamenu= DB::table('create_mainmenus')->where('dispaly', '=', 'y')->get();
                  
                                      
    
       return view('index.contennews', $data)
            ->with('travel',$data_travel)
            ->with('eat',$data_eat)
            ->with('shop',$data_shop)
            ->with('hotel',$data_hotel)
            ->with('datamenu',$datamenu);
    }


    public function ActivityNew()
    {

       $feed = Feeds::make(['http://rssfeeds.sanook.com/rss/feeds/sanook/news.index.xml']);
       $data = array(
          'title'     => $feed->get_title(),
          'permalink' => $feed->get_permalink(),
          'items'     => $feed->get_items(),
       );
       $feeds = Feeds::make(['http://rssfeeds.sanook.com/rss/feeds/sanook/news.index.xml'],6);
       $data2 = array(
        'title'     => $feeds->get_title(),
        'permalink' => $feeds->get_permalink(),
        'items2'     => $feeds->get_items(),
     );
  
     
    
   //  dd($data3);
       return view('ActivityNew.mainActivityNew.Hotnews',$data,$data2);
        

      
    }
  
}
