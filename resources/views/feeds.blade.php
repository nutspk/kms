@include('index.head')
<style type="text/css">
  

  .slider {
    width: 100%;
    margin: 100px auto;
    margin-top: 2%;
  }

  .slick-slide {
    margin: 0px 20px;
  }

  .slick-slide img {
    width: 100%;
  }

  .slick-prev:before,
  .slick-next:before {
    color: black;
  }


  /* .slick-slide {
    transition: all ease-in-out .3s;

  }
   */
  /* .slick-active {
    opacity: .5;
  } */

  /* .slick-current {
    opacity: 1;
  } */
</style>



<div class="row">
  <div class="container">
      <div class="grid-item item5">
          <div  class="marginphoto2 " ><img src="images/hoy2.png" width="70" height="75"  ></div>
          <center><p class="hotnew2 margintext">ข่าวเด่นประจำสัปดาห์</p></center>
      </div>
    
    
    <div class="grid-item item5" style="margin:-25px"> 
        <div class="line2">
          <div id="slideimg2" class="carousel slide" data-ride="carousel"   >
            <div class="carousel-inner" style="padding-bottom: 20px;">
             
  
                  
                  <div class="row" >

<section class="regular slider">

    @foreach ($items as $item) 
    <div class="col-sm-4 col-md-3 " >
        <div class="card2 shadowfilter2">
            <img  src="{{ $item->get_enclosure()->link }}"  class="sizeimgcard2 "> 
            <div class="w3-container">
             <div class="w3-row">
                <div class="w3-third w3-center w3-center w3-animate-top">
                  <h3></h3>
                </div>
                <div class="w3-third w3-left">
                  <h3 class=" w3-center w3-animate-top bgtextTap ">
                    <i class="fas fa-calendar-alt imgcalendar2" ></i><p class="bgtextTab4"  >{{ $item->get_date('j M Y ') }} .</p><br>
                    <p class="texth4"><a href="{{ $item->get_permalink() }}">
                        {{ $item->get_title() }}
                    </a></p></h3>                        
                </div>
                <div class="w3-third w3-center w3-margin-bottom">  
                </div>
              <h3 class="w3-center w3-animate-top texth4"></h3>
            </div>  
          </div>
        </div>
       </a>
     </div>
     @endforeach
    </div>
  </div>
    
</div>
</div>
</div>
</div>
</div>

  
</section>



<script type="text/javascript">
  $(document).on('ready', function() {
    
    $(".regular").slick({
      autoplay:true,
      autoplaySpeed:1000,
      arrows:true,
      dots: true,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4
      
    });
   
  });
</script>