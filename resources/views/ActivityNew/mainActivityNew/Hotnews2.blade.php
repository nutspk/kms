@extends('ActivityNew.Conten.indexNews')
@section('news')

 
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