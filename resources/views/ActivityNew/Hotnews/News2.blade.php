@extends('ActivityNew.main')
@section('content')



<h1 class="textNews">ข่าวสาร</h1>
<h2 class="new1"></h2>


  <!--Start-body-left-->
  <div class="row">
      <div class="col-10 col-md-7 " >
        
          <article class="textTab">
            @foreach ($items as $item) 
              <div>
                <img  src="{{ $item->get_enclosure()->link }}" class="imgNews" >
              </div>
              <div>
                  <h2><b> {{ $item->get_title() }}</b></h2>
                  <i class="far fa-calendar-alt  iconCalendar" ></i><span class="textCalendar">{{ $item->get_date('j M Y ') }}</span>
              </div>
              
              <p class="fontP">{{ $item->get_description()->comments }}</p>
              <p></p>
              <p></p>
              @endforeach
              <h2 style="margin-top: 6%;">รูปภาพที่เกี่ยวข้อง</h2>
              <br>
              <div class="w3-content" >
                <div class="mySlides">
              <main class="grid">
                @foreach ($items as $item) 
                <img  src="{{ $item->get_enclosure()->link }}" alt="Sample photo">
                    
                @endforeach
              </main>
              </div>
            
            <div class="mySlides">
              <main class="grid">
                    <img src="images/news/n6.jpg" alt="Sample photo">
                    <img src="images/news/n5.jpg" alt="Sample photo">
                    <img src="images/news/n4.jpg" alt="Sample photo">
                    <img src="images/news/n3.jpg" alt="Sample photo">
                    <img src="images/news/n2.jpg" alt="Sample photo">
                    <img src="images/news/n1.jpg" alt="Sample photo">
                    <img src="images/news/n5.jpg" alt="Sample photo">
                    <img src="images/news/n6.jpg" alt="Sample photo">
              </main>
              </div>
            
            <div class="mySlides">
              <main class="grid">
                    <img src="images/news/n5.jpg" alt="Sample photo">
                    <img src="images/news/n4.jpg" alt="Sample photo">
                    <img src="images/news/n6.jpg" alt="Sample photo">
                    <img src="images/news/n3.jpg" alt="Sample photo">
                    <img src="images/news/n1.jpg" alt="Sample photo">
                    <img src="images/news/n2.jpg" alt="Sample photo">
                    <img src="images/news/n5.jpg" alt="Sample photo">
                    <img src="images/news/n6.jpg" alt="Sample photo">
              </main>
              </div>
            
           </div>        
                  
                  
          <div class="w3-center Tabbutton">
            <div class="w3-section">
              <i class="fas fa-chevron-circle-left sixeIcon " onclick="plusDivs(-1)"></i>
              <button type="button" class="btn btn-light" onclick="currentDiv(1)">1</button> 
              <button type="button" class="btn btn-light" onclick="currentDiv(2)">2</button> 
              <button type="button" class="btn btn-light" onclick="currentDiv(3)">3</button> 
              <i class="fas fa-chevron-circle-right sixeIcon " onclick="plusDivs(-1)"></i>
            </div>
          </div>
          
          <script>
          var slideIndex = 1;
          showDivs(slideIndex);
          
          function plusDivs(n) {
            showDivs(slideIndex += n);
          }
          
          function currentDiv(n) {
            showDivs(slideIndex = n);
          }
          
          function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" w3-red", "");
            }
            x[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " w3-red";
          }
          </script>
        </article>
       
      </div>

<!--END-body-left-->

<!--Start-body-right-->   
      <div class=" col-8 col-md-5 ">
          <article class="textTab2">
            <h1 class="fontHeadLinkNews">Latest News</h1>
            <div class="container ">
              @foreach ($items as $item) 
              <!--NewS1-->
              <p class="TabTextLinkNews "><a href="http://127.0.0.1:8000/News1" class="textLinkNews ">{{ $item->get_title() }}</a> </p>
              <h2 class="new2"></h2>
              
              @endforeach
            </div>

            <h1 class="fontHeadLinkNews" style="margin-top: 16%;">ข่าวสารน่าสนใจ</h1>
         
            <div class="container ">
              @foreach ($items as $item) 
              <!--NewS1-->
              <p class="TabTextLinkNews "><a href="http://127.0.0.1:8000/News1" class="textLinkNews ">{{ $item->get_title() }}</a> </p>
              <h2 class="new2"></h2>
              
              @endforeach
            </div>

         
            
        </article>
       
      </div>
  </div>
  <!--END-body-right--> 

  @endsection