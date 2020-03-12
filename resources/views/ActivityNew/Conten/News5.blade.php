@extends('ActivityNew.main')
@section('content')



<h1 class="textNews">ข่าวสาร</h1>
<h2 class="new1"></h2>


  <!--Start-body-left-->
  <div class="row">
      <div class="col-10 col-md-7 " >
          <article class="textTab">
              <div>
                  <img src="images/news/n2.jpg" class="imgNews" >
              </div>
              <div>
                  <h2><b>INET ร่วมงาน OppDay เสนอแผนธุรกิจครึ่งปีหลัง</b></h2>
                  <i class="far fa-calendar-alt  iconCalendar" ></i><span class="textCalendar">27 ม.ค.2563</span>
              </div>
              
              <p class="fontP">เมื่อวันพฤหัสบดีที่ 5 กันยายน 2562 คุณวัลล์ชัย เวชชีวะดำรงค์ รองกรรมการผู้จัดการ บริษัท อินเทอร์เน็ตประเทศไทย จำกัด (มหาชน) หรือ INET ได้ร่วมงานบริษัทจดทะเบียนพบผู้ลงทุน (Opportunity Day) ประจำไตรมาสที่ 2/62 ณ ห้องประชุม 603 อาคารตลาดหลักทรัพย์แห่งประเทศไทย ถ.รัชดาภิเษก พร้อมรายงานผลประกอบการธุรกิจปี 2562 คาดว่ารายได้ปีนี้เติบโต 35% ซึ่งรักษากำไรก่อนหักภาษีไม่ต่ำกว่า 5% และเพิ่มจำนวนลูกค้าองค์กรปีนี้เพิ่มขึ้น 35% โดยเผยถึงแผนการดำเนินงานครึ่งปีหลังว่าจะลดการลงทุนเพิ่มในเรื่องบริการ Cloud Solutions โดยเน้นขาย Knowledge as a Service</p>
              <img src="https://www.inet.co.th/assets/img/blog/oppday2019-2.jpg" class="imgNews" >
              <p class="fontP">สำหรับความคืบหน้ากองทุนรวมโครงสร้างพื้นฐาน ยังคงติดประเด็นเรื่องใบอนุญาตของสำนักงานคณะกรรมการกิจการกระจายเสียง กิจการโทรทัศน์ และกิจการโทรคมนาคมแห่งชาติ (กสทช.) ทำให้แผนการจัดตั้งกองทุนรวมฯ ต้องเลื่อนไปอย่างไม่มีกำหนด</p>
              <p></p>
              <p></p>

              <h2 style="margin-top: 6%;">รูปภาพที่เกี่ยวข้อง</h2>
              <br>
              <div class="w3-content" >
                <div class="mySlides">
              <main class="grid">
                    <img src="images/news/n1.jpg" alt="Sample photo">
                    <img src="images/news/n2.jpg" alt="Sample photo">
                    <img src="images/news/n3.jpg" alt="Sample photo">
                    <img src="images/news/n4.jpg" alt="Sample photo">
                    <img src="images/news/n5.jpg" alt="Sample photo">
                    <img src="images/news/n6.jpg" alt="Sample photo">
                    <img src="images/news/n5.jpg" alt="Sample photo">
                    <img src="images/news/n6.jpg" alt="Sample photo">
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
              <!--NewS1-->
              <p class="TabTextLinkNews "><a href="http://127.0.0.1:8000/News1" class="textLinkNews ">Alibaba Cloud ผนึกกำลังพันธมิตร INET ให้บริการ "คลาวด์เซอร์วิส" ระดับเฟิร์สคลาส รายแรกในไทย</a> </p>
              <h2 class="new2"></h2>
                <!--NewS2-->
              <p class="TabTextLinkNews "><a href="http://127.0.0.1:8000/News2" class="textLinkNews ">INET ร่วมสนับสนุนงาน "OIIO" Thailand TECHLAND 2019 5-6 พฤศจิกายน 2562 ณ รอยัล พารากอน ฮอลล์</a> </p>
              <h2 class="new2"></h2>
                <!--NewS3-->
              <p class="TabTextLinkNews"><a href="http://127.0.0.1:8000/News3" class="textLinkNews ">มาฟังประโยชน์ของการบริหารจัดการ IT Infrastructure ในยุคดิจิทัลที่ดีกัน</a> </p>
              <h2 class="new2"></h2>
              <!--NewS4-->
              <p class="TabTextLinkNews"><a href="http://127.0.0.1:8000/News4" class="textLinkNews ">INET ได้รับเกียรติบัตรเชิดชูสถานประกอบการที่สนับสนุนการจ้างงานคนพิการเชิงสังคม ประจำปี 2562</a> </p>
              <h2 class="new2"></h2>
              <!--NewS5--> 
              <p class="TabTextLinkNews"><a href="http://127.0.0.1:8000/News5" class="textLinkNews Linkactive ">INET ร่วมงาน OppDay เสนอแผนธุรกิจครึ่งปีหลัง</a> </p>
              <h2 class="new2"></h2>
              
            </div>

            <h1 class="fontHeadLinkNews" style="margin-top: 16%;">ข่าวสารน่าสนใจ</h1>
            <div class="container ">
              <!--NewS1-->
              <p class="TabTextLinkNews "><a href="" class="textLinkNews ">Alibaba Cloud ผนึกกำลังพันธมิตร INET ให้บริการ "คลาวด์เซอร์วิส" ระดับเฟิร์สคลาส รายแรกในไทย</a> </p>
              <h2 class="new2"></h2>
                <!--NewS2-->
              <p class="TabTextLinkNews "><a href="" class="textLinkNews ">INET ร่วมสนับสนุนงาน "OIIO" Thailand TECHLAND 2019 5-6 พฤศจิกายน 2562 ณ รอยัล พารากอน ฮอลล์</a> </p>
              <h2 class="new2"></h2>
                <!--NewS3-->
              <p class="TabTextLinkNews"><a href="" class="textLinkNews ">มาฟังประโยชน์ของการบริหารจัดการ IT Infrastructure ในยุคดิจิทัลที่ดีกัน</a> </p>
              <h2 class="new2"></h2>
              <!--NewS4-->
              <p class="TabTextLinkNews"><a href="" class="textLinkNews ">INET ได้รับเกียรติบัตรเชิดชูสถานประกอบการที่สนับสนุนการจ้างงานคนพิการเชิงสังคม ประจำปี 2562</a> </p>
              <h2 class="new2"></h2>
              <!--NewS5--> 
              <p class="TabTextLinkNews"><a href="" class="textLinkNews ">INET ร่วมงาน OppDay เสนอแผนธุรกิจครึ่งปีหลัง</a> </p>
              <h2 class="new2"></h2>
              
            </div>

         
            
        </article>
       
      </div>
  </div>
  <!--END-body-right--> 

  @endsection