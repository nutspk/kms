  
 <div id="navbar1" class="nav1" >
  {{-- <a href="/index"><img class="logo" style="margin-left: 1%;margin-top: 0.2%;margin-bottom: 0.2%;" src="images/inetlogoPNG.png" alt=""></a> --}}
    {{-- <span><a href="#section1" class="phase-nav" style="margin-left: 24%;"><i class="fas fa-home" ></i>  หน้าหลัก</a></span> --}}
    <span><a href="#section4" class="phase-nav" style="margin-left: 30%;"><i class="far fa-newspaper" ></i> ข่าวสาร</a></span>
    <span><a href="#section3" class="phase-nav"><i class="fas fa-route" ></i> ท่องเที่ยว</a></span>
    <span><a href="#section2" class="phase-nav"><i class="fas fa-book"></i>  คลังความรู้</a></span>
  
    <span><a href="#" class="phase-nav"><i class="fas fa-user-tie"></i>  Login</a></span>
    <span style="font-size:50px;cursor:pointer"  onclick="openNav()">&#9776;</span>
  </div>

  
  <!-- jsnav -->
  <!-- testnav -->
  <div id="navbar">
    <!-- <a href="#" style="font-size:20px; " onclick="openNav()" >&#9776;</a>
    <a href="#" style="font-size:20px; " onclick="openNav()" >&#9776;</a> -->
   

   
    <a href="#contact"><i class="fas fa-user-tie"></i>  login</a>
     <a href="#section2"><i class="fas fa-book"></i>  คลังความรู้</a>
     <a href="#section3"><i class="fas fa-route" ></i>  ท่องเที่ยว</a>
     <a href="#section4"><i class="far fa-newspaper" ></i> ข่าวสาร</a>
     <a href="#section1"><i class="fas fa-home" ></i>  หน้าหลัก</a>
  
  </div>
  <script>
    // When the user scrolls down 20px from the top of the document, slide down the navbar
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navbar").style.top = "0";
      } else {
        document.getElementById("navbar").style.top = "-50px";
      }
    }
    </script>