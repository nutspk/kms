@extends('travel.detail.eat.index')
@section('content')



<body>
 



  <h1 class="textNews">บุกของกิน</h1>
  <h2 class="new1"></h2>

  <section>
    <!--Start-body-left-->
    <div class="row">
      <div class="col-10 col-md-7 ">
        <article class="textTab">
          <div>
            <img src="{{asset('storage')}}/Location_image/{{$travels->image}}" class="imgNews">
          </div>
          <div>
            <h2><b>{{$travels->name_location}}</b></h2>
            <i class="far fa-calendar-alt  iconCalendar"></i><span class="textCalendar">{{$travels->created_at->format('d-m-y') }}</span>
          </div>

          <p class="fontP">{{$travels->description}}
          </p>

          <p></p>
          <p></p>

          <h2 style="margin-top: 6%;">รูปภาพที่เกี่ยวข้อง</h2>
          <br>
          <div class="w3-content">
            <div class="mySlides">
              <main class="grid">
                             
                @foreach ($img as $listimg)
                <div class="col-lg-2 col-md-2 col-sm-2">
                 <a href="{{ URL::to('storage/image/'.$listimg->part)}}" class="portfolio-box">
                     <img src="{{asset('storage')}}/image/{{$listimg->part}}" class="img-responsive" alt="--">
                     <div class="portfolio-box-caption">
                         <div class="portfolio-box-caption-content">
                             <span class="glyphicon glyphicon-zoom-in" style="font-size: 80px"></span>
                         </div>
                     </div>
                 </a>
             </div>
                    
                @endforeach
            
             </main>
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
              if (n > x.length) {
                slideIndex = 1
              }
              if (n < 1) {
                slideIndex = x.length
              }
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-red", "");
              }
              x[slideIndex - 1].style.display = "block";
              dots[slideIndex - 1].className += " w3-red";
            }

          </script>
          <div class="container">
            <div class="row">
              <div style="padding-bottom: 10%;">
                <h2 style="margin-top: 6%;">แผนที่การเดินทาง</h2>
                <iframe
                  src="{{$travels->map_url}}"
                  width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>

        </article>
      </div>



      <!--END-body-left-->


      <!--Start-body-right-->
      <div class=" col-8 col-md-5 ">
        <article class="textTab2">
          <h1 class="fontHeadLinkNews">ของกินแนะนำ</h1>
          <div class="container ">
            <a href="/detaileat2"><div class="row box">
              <h4 class="new1 textLinkNews">Seafood Dip</h4>
              <div class="row">
                <div class="col-4">
                  <img class="imglocation" src="https://www.songkhla.go.th/tmp/3fafc8fb2831a609604b85c0c5031b8f.png"
                    alt="">
                </div>
                <div class="col-8">
                  <p class="textlocation cut-text-multi2">Seafood Dip ร้านกุ้งถังที่ถือคติ “Eat with your hands” ไม่ต้องบินไปกินกุ้งถังไกลถึงกรุงเทพมหานคร เพราะหาดใหญ่ก็มีร้านกุ้งถังรสชาติกลมกล่อมอร่อยจนพุงกาง ร้าน Seafood Dip แห่งนี้เป็นร้านเปิดโล่งสบาย ๆ อาหารจะมีไซส์ S,M,L ให้เลือก สามารถสั่งแยกเป็น หอย ปู หรือกุ้งได้ มีซอสให้เลือก 2 แบบ และสามารถเลือกระดับความเผ็ดได้ถึง 5 ระดับ ลูกค้าสามารถเลือกสั่งได้ตามใจชอบ

                  </p>
                  <p class="textlocation cut-text-multi2" style="margin-left: -61%;"><i class="fas fa-eye"></i> : 867</p>
                </div>
              </div>
            </div></a>


            <a href="/detaileat4"><div class="row box">
              <h4 class="new1 textLinkNews"> ร้านอาหารป่ายาง</h4>

              <div class="row">
                <div class="col-4">
                  <img class="imglocation" src="https://www.songkhla.go.th/tmp/df9babf69c0bb0654d8246ddf81ff4ef.png"
                    alt="">
                </div>
                <div class="col-8">
                  <p class="textlocation cut-text-multi2">ร้านอาหารป่ายาง “Thai touch of The Traditional Southern Cuisine” 
                    เป็นร้านอาหารไทยพื้นเมืองของภาคใต้โดดเด่นด้วยอาหารรสชาติจัดจ้าน เมนูขึ้นชื่อของร้านนี้ คือ แกงเหลือง
                     ใส่ปลากระบอกเนื้อหวาน สดใหม่ ผสานกับวัตถุดิบปรุงรสชั้นดี รสชาติเผ็ดตามตำรับอาหารใต้ 
                     และยังมีอาหารพื้นเมืองภาคใต้ให้เลือกชิมอีกหลากหลายเมนู เช่น คั่วกลิ้ง แกงไตปลาย่าง ใบเหลียงผัดไข่ 
                     เป็นต้น พนักงานให้บริการด้วยใบหน้ายิ้มแย้ม ตกแต่งภายในร้านได้อย่างดูดี สะอาด แอร์เย็นฉ่ำ 
                     ทำให้แขกที่มาใช้บริการนั่งรับประทานอาหารได้อย่างสะดวกสบาย ถ้าแวะมาหาดใหญ่ อย่าพลาดแวะชิมร้านอาหารปักษ์ใต้รสเด็ดร้านนี้</p>
                  <p class="textlocation cut-text-multi2" style="margin-left: -61%;"><i class="fas fa-eye"></i> : 1605</p>
                </div>
              </div>
            </div></a>
            <a href="/detaileat3"><div class="row box">
              <h4 class="new1 textLinkNews">Sugar Rock</h4>
              <div class="row">
                <div class="col-4">
                  <img class="imglocation" src="https://www.songkhla.go.th/tmp/5c90c063dd818fd934ea8af26a0acb11.png"
                    alt="">
                </div>
                <div class="col-8">
                  <p class="textlocation cut-text-multi2">Sugar Rock ตั้งอยู่ใกล้มหาวิทยาลัยสงขลานครินทร์ 
                    ร้านอาหารแห่งนี้ตกแต่งสไตล์คันทรี่ เปิดเพลงคลอเบา ๆ เหมาะแก่การเจริญอาหาร 
                    ทำให้มีลูกค้าแวะเวียนมาอุดหนุนเป็นประจำ เมนูอาหารมีให้เลือกมากมาย 
                    ยิ่งถ้าเป็นอาหารท้องถิ่นของภาคใต้ยิ่งมีรสชาติเข้มข้น เผ็ดร้อน จัดจ้าน
                     แถมอร่อยได้แบบไม่ต้องห่วงค่าเครื่องดื่มเลย เพราะร้านนี้มีบริการน้ำเปล่าฟรี 
                     อาหารพร้อมเสิร์ฟในเวลาไม่นาน พนักงานบริการดีเยี่ยม ราคาไม่แพง 
                     ถือเป็นร้านอาหารแนะนำอีกร้านหนึ่งที่พลาดไม่ได้ในย่านธรรมนูญวิถีแห่งนี้</p>
                    <p class="textlocation cut-text-multi2" style="margin-left: -61%;"><i class="fas fa-eye"></i> : 1227</p>
                </div>
              </div>
            </div></a>
           

            <div class="row box">
              <h4 class="new1 textLinkNews">ทัศปัน เบค ชอป</h4>
              <div class="row">
                <div class="col-4">
                  <img class="imglocation" src="https://www.songkhla.go.th/tmp/a52e0b5d8763df05185e7746d3c1de46.png"
                    alt="">
                </div>
                <div class="col-8">
                  <p class="textlocation cut-text-multi2">ทัศปัน เบค ชอป”
                    ร้านเบเกอรี่โฮมเมดที่อบขนมปังโฮลวีทอร่อยที่สุดในหาดใหญ่ เป็นร้านที่พิถีพิถันตั้งแต่การเลือกวัตถุดิบ
                    จนถึงกระบวนการผลิตที่สะอาดเพื่อให้ได้ขนมปังคุณภาพดีที่สุด
                    เป็นร้านเบเกอรี่และเครื่องดื่มที่ลดปริมาณน้ำตาล เนย ครีม และน้ำมันลง
                    จึงเป็นร้านที่เหมาะกับคนรักสุขภาพ ถึงแม้จะขึ้นชื่อว่าเป็นเบเกอรี่คลีน แต่รสชาติอร่อยนุ่มละมุนลิ้นมาก
                    “ทัศปัน เบค ชอป” ไม่ได้ขายเฉพาะของหวานเท่านั้น </p>
                    <p class="textlocation cut-text-multi2" ><i class="fas fa-eye"></i> : 1227</p>
                </div>
              </div>
            </div>


          <!-- hotel -->
          <h1 class="fontHeadLinkNews" style="margin-top: 16%;">สถานที่ท่องเที่ยว</h1>
          <div class="container ">
            <div class="row box">
              <h4 class="new1 textLinkNews"> เขาตังกวน (897 เมตร)</h4>

              <div class="row">
                <div class="col-4">
                  <img class="imglocation" src="https://www.songkhla.go.th/tmp/f0d8757e8a76db713565e517c446a226.jpg"
                    alt="">
                </div>
                <div class="col-8">
                  <p class="textlocation cut-text-multi">อยู่ทางทิศตะวันตกของเขาน้อย มีบันไดทางขึ้นอยู่ใกล้วัดแหลมทราย
                    สูงจากระดับน้ำทะเลประมาณ 290 ฟุต ปัจจุบันเทศบาลนครสงขลาสร้างลิฟต์ขึ้นเขาตังกวนอีกทางหนึ่ง
                    บนยอดเขามีเจดีย์สร้างในสมัยศิลปะสมัยทราวดี
                    ต่อมาเมื่อพระบาทสมเด็จพระจอมเกล้าเจ้าอยู่หัวเสด็จประพาสเมืองสงขลา</p>
                </div>
              </div>
            </div>
            <div class="row box">
              <h4 class="new1 textLinkNews">หาดชลาทัศน์ (934 เมตร)</h4>
              <div class="row">
                <div class="col-4">
                  <img class="imglocation" src="https://www.songkhla.go.th/tmp/4af6d58228e8ba7f6223178789283875.jpg"
                    alt="">
                </div>
                <div class="col-8">
                  <p class="textlocation cut-text-multi">หาดชลาทัศน์
                    เป็นชายหาดที่ยาวต่อเนื่องมาจากหาดสมิหลาโดยมีแหลมสมิหลาเป็นจุดแบ่ง
                    มีหาดทรายที่ขาวสะอาดเล่นน้ำได้ตลอดแนว ลักษณะของหาดค่อนข้างเป็นเส้นตรง
                    มีถนนชลาทัศน์เลียบแนวชายหาดและมีแนวต้นสนให้ความร่มรื่นยาวตลอดหาด
                    เนื่องจากหาดหันไปทางด้านทิศตะวันออกเฉียงเหนือ ในช่วงเช้าจึงพอจะใช้เป็นที่ชมพระอาทิตย์ขึ้นได้ด้วย</p>
                </div>
              </div>
            </div>
            <div class="row box">
              <h4 class="new1 textLinkNews">ย่านเมืองเก่าสงขลา</h4>
              <div class="row">
                <div class="col-4">
                  <img class="imglocation" src="https://www.songkhla.go.th/tmp/49fbaea3c397b70ced891c980c8149b7.jpg"
                    alt="">
                </div>
                <div class="col-8">
                  <p class="textlocation cut-text-multi">ย่านเมืองเก่าอยู่บริเวณถนนนางงาม นครใน นครนอก และยะลา
                    เป็นถนนเล็กๆ ตึก และบ้านเรือนร้านค้าในละแวกนี้สร้างตาม สถาปัตยกรรมแบบจีนปนยุโรป
                    มีลวดลายปูนปั้นประดับที่กรอบหน้าต่างและหัวเสาสวยงาม นอกจากนี้ บริเวณนี้ยังเป็นย่านอาหารพื้นเมือง
                    ของสงขลา เช่นก๋วยเตี๋ยวสงขลา เต้าคั่ว ขนมกระบอก เป็นต้น

                  </p>
                </div>
              </div>
            </div>



          </div>



        </article>

      </div>
    </div>
    <!--END-body-right-->
  </section>


</body>


</div>

</html>
@endsection