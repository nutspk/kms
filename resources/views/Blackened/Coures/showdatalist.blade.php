<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="style/nav.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/fonts.css">
  <link rel="stylesheet" href="style/img.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
  <link href="css/courses.css" rel="stylesheet">
  <link href="css/ScrollDown.css" rel="stylesheet">
  <link href="css/slidNav.css" rel="stylesheet">
  <link href="css/Scrollup.js." rel="stylesheet">
 
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="canonical" href="https://getbootstrap.com/docs/4.0/layout/grid/">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link href="css/ActivityNew.css" rel="stylesheet">
  <link href="css/coureseVDO.css" rel="stylesheet">
  <link href="css/courese.css" rel="stylesheet">
<script type="text/javascript" src="js/Scroll.js "></script>

<script src="https://www.w3schools.com/lib/w3.js"></script>




  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
      <title>Showmenumain</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-10">
                <form>
                    @foreach ($listcouresll as $item)
                    <div class="card" style="width: 12 rem;">
                        <img src="{{asset('storage')}}/image/{{$item->img_list}}"  class="card-img-top img-thumbnail img-fluid" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$item->titallist}}</h5>
                          <p class="card-text">{{$item->Description}}</p>
                          <a href="#" class="btn btn-primary">เข้าสู่บทเรียน</a>
                          <a href="{{action('detailController@idlistdetail',$item->id_list)}}" style="width: 200px;" class="btn btn-primary pull-right">ok</a>
                        </div>
                      </div>

                    @endforeach

                </form>
            </div>
            <div class="col-1">
            </div>
        </div>
    </div>
    
</body>
</html>