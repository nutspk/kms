@extends('ActivityNew.Conten.indexNews')
@section('content')



<h1 class="textNews">ข่าวเด่นประจำวัน</h1>
<h2 class="new3"></h2>
<div class="row">
  <!--ฝั่งซ้าย-->
    <div class="col-4" >
        <div class="col">
            <a href="https://www.sanook.com/news/8046542/"><div class="cardTop">
              <img class="cardTopImg" src="https://s.isanook.com/ns/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL25zLzAvdWQvMTYwOS84MDQ2NTQyL2VsZXBoYW50Y2FtcC5qcGc=.jpg" >
              <div class="Cardcontainer ">
                <h4 class="cut-text-multi"><b>ทายาทเจ้าของปางช้างแม่สา-นักธุรกิจพันล้าน ร้องกองปราบสอบการเสียชีวิตของพ่อ</b></h4> 
              </div>
            </div></a>
        </div>
    </div>
  <!--สิ้นสุดฝั่งซ้าย-->
  <!--ฝั่งขวา-->

    <div class=" col-8 CardimgNewsToday ">
      <div class="row row-cols-3">
        
          <div class="col">
            @foreach ($items2 as $itemss) 
            <a href="{{ $itemss->get_permalink()}}"> <div class="card" >
              <img class="imgCard" src="{{ $itemss->get_enclosure()->link }}"  >
              <div class="Cardcontainer ">
                <h4 class="cut-text-multi"><b>{{ $itemss->get_title() }}</b></h4> 
              </div>
            </div>
            </a>
            @endforeach
          </div>

        

      </div>
    </div>
    <!--สิ้นสุดฝั่งขวา-->
    
</div>

<h1 class="textNews">ข่าวเด่นประจำสัปดาห์</h1>
<h2 class="new4"></h2>
 
    <div class="imgNewsToday">
        <div class="row">
            @foreach ($items as $item) 
            <div class="col">
              <a href="{{ $item->get_permalink() }}"> <div class="card">
                <img class="imgCard" src="{{ $item->get_enclosure()->link }}"  >
                <div class="Cardcontainer ">
                    <h4 class="cut-text-multi"><b>{{ $item->get_title() }}</b></h4> 
                </div>
                </div>
              </a>
            </div>
            @endforeach
        </div>
    </div>
 

  @endsection