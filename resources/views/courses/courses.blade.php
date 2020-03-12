@extends('courses.main')
@section('body')

<body >
<div style="background-color: #ffead5;">
  <div class="container" >
    <div class="row">
      <div class="col">
        <h1 class="testh2">Software Engineer</h1>
      </div>
      
      <div class="col">
        <div class="wrap">
          <div class="search">
            <input type="textsearch" class="searchTerm" placeholder="search">
            <button type="submit" class="searchButton">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="row">
   
    @foreach ($couressub as $item) 
   
    <div class="col-3" style="max-width: 21%;margin-left: 5%;margin-right: -3%;">
      <a href="{{action('listController@showlist',$item->id_sub)}}"> <div class="card">
        <img class="card_image" src="{{asset('storage')}}/image/{{$item->img_sub}}"  >
        
        </div>
      </a>
    </div>
 
    @endforeach
 
</div>


      
  </div>
    


</body>

@endsection