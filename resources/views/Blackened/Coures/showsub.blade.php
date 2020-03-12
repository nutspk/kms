<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('style/nav.css')}}" rel="stylesheet">
  <link href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('style/fonts.css')}}" rel="stylesheet">
  <link href="{{asset('style/img.css')}}" rel="stylesheet">
  <link href="{{asset('https://www.w3schools.com/w3css/4/w3.css')}}" rel="stylesheet">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Raleway')}}" rel="stylesheet">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Kodchasan&display=swap')}}" rel="stylesheet">
  <link href="{{asset('css/courses.css')}}" rel="stylesheet">
  <link href="{{asset('css/ScrollDown.css')}}" rel="stylesheet">
  <link href="{{asset('css/Scrollup.css')}}" rel="stylesheet">
  <link href="{{asset('css/slidNav.css')}}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <title></title>

</head>
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
  
    @foreach ($couressub as $item)
  
    <div class="cards-list">
    
      <a href="{{action('listController@showlist',$item->id_sub)}}" ><div class="card 1">
        <div class="card_image"><img src="{{asset('storage')}}/image/{{$item->img_sub}}" /> </div>
        <div class="card_title title-white">
     
        </div>
      </div></a>
      
      
      
      </div>
  
      @endforeach
  </div>
  
  </body>
  

</html>