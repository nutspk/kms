<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
    <title>KM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('src/css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link href="css/main.css" rel="stylesheet">
    <link href="css/travel.css" rel="stylesheet">
    <link href="css/Head_nang.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
    <script type="text/javascript" src="js/nav.js "></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
    <title>KM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="css/Head_nang.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
    <script type="text/javascript" src="js/nav.js "></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="css/travel.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <style type="text/css">
        html,
        body {
            margin: 0;
            padding: 0;
        }

        * {
            box-sizing: border-box;
        }

        .slider {
            width: 90%;
            margin: 100px auto;
        }

        /* .slick-slide {
      margin: 0px 20px;
    } */

        /* .slick-slide img {
      width: 100%;
    } */

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }


        .slick-slide {
            transition: all ease-in-out .3s;

        }



        .slick-current {
            opacity: 1;
        }

        .cardpoly{
            background-color: white; */
    /* box-shadow: 0 4px 20px 0 rgba(0,0,0,0.2); */
    /* transition: 0.3s; */
            width: 250px;
    height: 250px;
    border-radius: 10px;
        }

    </style>
</head>

<body>


<div class="container">
    <section class="regular2 slider">
        @foreach ($datamenu as $travels)
        <div class="col-sm-4 col-md-3 ">
            <div class="cardpoly">
                <div class="iconimg">
                    <div style="margin-top: 35px;margin-left: 55px;">
                      <img src="{{asset('storage')}}/image/{{$travels->iconpart}}"  alt="Avatar" class="iconH">
                    </div>
                   
                      <br/><br/>
                      <div class="text" style="margin-top: 25px;font-size: 18px;">{{$travels->Wroding}}</div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
</div>  

  



    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).on('ready', function () {

            $(".regular2").slick({
                //       autoplay:true,
                // autoplaySpeed:10,
                // arrows:true,
                dots: true,
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 4
            });

        });

    </script>

</body>

</html>