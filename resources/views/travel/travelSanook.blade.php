@extends('travel.main')
@section('content')






    <div class="row ">
      <img class="img-h" src="images/s_t2.jpg" alt="">
    </div>

    <div class="row ">
      <div class="box-bg">
        <!-- <h1 class="text-tra">เที่ยวสนุก</h1> -->
        <img class="img-tra" src="images/label-travel-01.png" alt="">
        <!-- row1 -->
        <div class="row row-img">
          @foreach ($travel as $travels)
          <div class="col-3">
            <a href="/detailTravel/{{$travels->id_travel}}">
              <div class="flip">
                <div class="front"
                style="background-image: url({{asset('storage')}}/Location_image/{{$travels->image}})">
                  <h1 class="text-shadow text-imgtra text-bg cut-text-multi2">{{$travels->name_location	}}</h1>
                </div>
                <div class="back">
                  <h2 class="cut-text-multi2">{{$travels->name_location	}}</h2>
                  <p class="cut-text-multi">{{$travels->description	}}</p>
                </div>
              </div>
            </a>
          </div>
              
          @endforeach
          
          
        </div>
        {{ $travel->links()}}
    

        </section>
      </div>
    </div>
  </div>




@endsection