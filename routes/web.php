<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FeedsController@news');

Route::get('/index', 'FeedsController@news');
Route::get('/FeedNews', 'FeedsController@ActivityNew');


Route::get('/showHotnews', 'FeedsController@showHotnews');
Route::get('/HotNewfeeds', 'FeedsController@HotNew');



Route::get('/indexNOnews', 'IndexController@indexNOnews'); //หน้าหลัก
// Route::get('/index', 'IndexController@index'); //หน้าหลัก
Route::get('/NavActivityNew ', 'IndexController@NavActivityNew'); //Nav หน้าหลักไม่มีย้อนกลับ
Route::get('/ActivityNew', 'IndexController@ActivityNew'); //Nav หน้าหลักมีย้อนกลับ
Route::get('/News1', 'IndexController@News1'); //ข่าวสารหน้า1
Route::get('/News2', 'IndexController@News2'); //ข่าวสารหน้า2
Route::get('/News3', 'IndexController@News3'); //ข่าวสารหน้า3
Route::get('/News4', 'IndexController@News4'); //ข่าวสารหน้า4
Route::get('/News5', 'IndexController@News5'); //ข่าวสารหน้า5
Route::get('/Newsindex', 'IndexController@Newsindex'); //หน้าหลักหน้าข่าวสาร
Route::get('/Activity', 'IndexController@Activity'); //หน้าหลักหน้ากิจกรรม
Route::get('/NewsCom', 'IndexController@NewsCom'); //หน้าหลักหน้าข่าว
Route::get('/layouts', 'IndexController@layouts'); //layouts


Route::get('/News6', 'IndexController@News6'); //ข่าวสารหน้6



Route::get('/TravelIndex', 'TravelController@index'); //TravelIndex
// Route::get('/Travel', 'TravelController@travel'); //Travel
// Route::get('/eat', 'TravelController@eat'); //eat
Route::get('/shop', 'TravelController@shop'); //shop
Route::get('/hotel', 'TravelController@hotel'); //hotel
Route::get('/detaileat', 'TravelController@detaileat');//detaileat
Route::get('/detailshop', 'TravelController@detailshop');//detailshop
Route::get('/detailtravel', 'TravelController@detailtravel');//detailtravel
Route::get('/detailhotel', 'TravelController@detailhotel');//detailhotel

Route::get('/detaileat2', 'TravelController@detaileat2');//detaileat
Route::get('/detailshop2', 'TravelController@detailshop2');//detailshop
Route::get('/detailtravel2', 'TravelController@detailtravel2');//detailtravel
Route::get('/detailhotel2', 'TravelController@detailhotel2');//detailhotel

Route::get('/detaileat3', 'TravelController@detaileat3');//detaileat
Route::get('/detailshop3', 'TravelController@detailshop3');//detailshop
Route::get('/detailtravel3', 'TravelController@detailtravel3');//detailtravel
Route::get('/detailhotel3', 'TravelController@detailhotel3');//detailhotel


Route::get('/detaileat4', 'TravelController@detaileat4');//detaileat
Route::get('/detailshop4', 'TravelController@detailshop4');//detailshop
Route::get('/detailtravel4', 'TravelController@detailtravel4');//detailtravel
Route::get('/detailhotel4', 'TravelController@detailhotel4');//detailhotel



Route::get('/coursesIndex', 'CoursesController@index'); //hotel
Route::get('/main', 'CoursesController@main'); //main
Route::get('/page', 'CoursesController@pagevdo'); //pagevdo

Route::get('/couresePage1', 'CoursesController@couresePage1'); //page1
Route::get('/couresePage2', 'CoursesController@couresePage2'); //page2

Route::get('/couresePageJAJA', 'CoursesController@couresePageJAJA'); //page2
Route::get('/couresePageJAJA2', 'CoursesController@couresePageJAJA2'); //page2

Route::get('/coureseJAVA', 'CoursesController@coureseJAVA'); //page2
Route::get('/coureseJAVA2', 'CoursesController@coureseJAVA2'); //page2

Route::get('/coureseVDO', 'CoursesController@coureseVDO'); //page2
Route::get('/courses', 'CoursesController@courses'); //page2


Route::get('/VDO1', 'IndexController@test'); //page2
Route::get('/VDO2', 'IndexController@test2'); //page2
Route::get('/VDO3', 'IndexController@test3'); //page2
Route::get('/VDO4', 'IndexController@test4'); //page2

Route::get('/VDOJAVA', 'IndexController@VDOJAVA'); //page2
Route::get('/VDOJAVA2', 'IndexController@VDOJAVA2'); //page2
Route::get('/VDOJAVA3', 'IndexController@VDOJAVA3'); //page2
Route::get('/VDOJAVA4', 'IndexController@VDOJAVA4'); //page2




// TypeNewsController//
Route::get('/addtype', 'TypeNewsController@addtype'); //fromaddtype
Route::post('/addtypenews', 'TypeNewsController@addtypenews'); //fromaddtype

// TypeNewsController//
Route::get('/adddata', 'NewsListController@adddata'); //fromadddata
Route::post('/adddata', 'NewsListController@adddatafrom'); //adddatafrom


Route::get('/addlocation', 'TravelController@addlocationform'); //fromadddata
Route::post('/addlocation', 'TravelController@addlocation'); //fromadddata

////ส่วนของ Lv1
Route::get('/addmenumain', 'MainmenuController@addmenu'); //fromadddata
Route::post('/addmenumain', 'MainmenuController@addmenumain'); //fromadddata
Route::get('/showmenumain', 'MainmenuController@showmenumain'); //showdata

/////ส่วนของ Lv2
Route::get('/addsubcoures', 'SubcouresController@addsub'); //fromadddata
Route::post('/addsubcoures', 'SubcouresController@addsubcoures'); //fromadddata
Route::get('/showsubcoures/{id}','SubcouresController@showsubcoures');

// Route::get('/showsubcoures','SubcouresController@showsubcoures');


///ส่วนของ Lv3
Route::get('/addlist','listController@addlist');
Route::post('/addlist','listController@addlistfrom');
Route::get('/showlist/{id}','listController@showlist');


///ส่วนLv4
Route::get('adddetail','detailController@adddetail');
Route::post('adddetail','detailController@addfromdetail');
Route::get('showdetail/{id}','detailController@showdetail');


///AlllocationT
Route::get('/Travel','TravelController@AlllocationTravel');//listTravel
Route::get('/detailTravel/{id}','TravelController@detailTravel');//detailTravel

Route::get('/eat','TravelController@AlllocationEat');//listeat
Route::get('/detaileat/{id}','TravelController@detailEat');//detaileat

Route::get('/shop','TravelController@AlllocationShop');//listshop
Route::get('/detailshop/{id}','TravelController@detailShop');//detailshop

Route::get('/hotel','TravelController@Alllocationhotel');//listshop
Route::get('/detailhotel/{id}','TravelController@detailhotel');//detailshop

Route::get('/menumainshow', 'MainmenuController@showmenumain');

Route::get('/testtttt', 'MainmenuController@showmenumaintest');
