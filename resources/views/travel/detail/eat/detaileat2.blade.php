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
            <img src="https://www.songkhla.go.th/tmp/f8a94f1771e67aafa277018664ac52ad.png" class="imgNews">
          </div>
          <div>
            <h2><b>Seafood Dip</b></h2>
            <i class="far fa-calendar-alt  iconCalendar"></i><span class="textCalendar">27 ม.ค.2563</span>
          </div>

          <p class="fontP">Seafood Dip ร้านกุ้งถังที่ถือคติ “Eat with your hands” 
            ไม่ต้องบินไปกินกุ้งถังไกลถึงกรุงเทพมหานคร เพราะหาดใหญ่ก็มีร้านกุ้งถังรสชาติกลมกล่อมอร่อยจนพุงกาง 
            ร้าน Seafood Dip แห่งนี้เป็นร้านเปิดโล่งสบาย ๆ อาหารจะมีไซส์ S,M,L ให้เลือก สามารถสั่งแยกเป็น 
            หอย ปู หรือกุ้งได้ มีซอสให้เลือก 2 แบบ และสามารถเลือกระดับความเผ็ดได้ถึง 5 ระดับ
             ลูกค้าสามารถเลือกสั่งได้ตามใจชอบ นอกจากนี้ยังมีเมนูอื่นอีกมากมายให้เลือกรับประทาน 
             เช่น ข้าวโพดหวาน ไส้กรอก  ปีกไก่ทอด และคอร์นชีส เป็นต้น Seafood Dipจึงถือเป็นร้านอาหารทะเลรูปแบบใหม่
              ให้คนที่ไม่ชอบอะไรซ้ำซากจำเจได้แวะเวียนมาชิมกัน
          </p>

          <p></p>
          <p></p>

          <h2 style="margin-top: 6%;">รูปภาพที่เกี่ยวข้อง</h2>
          <br>
          <div class="w3-content">
            <div class="mySlides">
              <main class="grid">
                <img src="https://www.songkhla.go.th/tmp/c0f0017d5bb0d444bfa85fc49a91e4e6.jpg" alt="Sample photo">
                <img src="https://www.songkhla.go.th/tmp/bc3f07af45b269eebb9ef1da3e012a74.jpg" alt="Sample photo">
                <img src="https://www.songkhla.go.th/tmp/39a2e7e4cb7e7fc7a42e297831cfc214.jpg" alt="Sample photo">
                <img src="https://www.songkhla.go.th/tmp/36b6e3bac8afa15d5757151899bda4ce.png" alt="Sample photo">
                <!-- <img src="https://www.museumthailand.com/upload/evidence/1504167609_62706.jpg" alt="Sample photo">
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLDA9SKM7JnvSFpaqav--sAYWwAsixIa4F9rR7ZiPYjei_yGYx"
                  alt="Sample photo">
                <img
                  src="https://www.chillpainai.com/src/wewakeup/chillwriter/uploads/2016-11-20%2009:32:29_%E0%B8%AA%E0%B8%A1%E0%B8%B4%E0%B8%AB%E0%B8%A5%E0%B8%B2-17.jpg"
                  alt="Sample photo">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/0c/b7/1a/11/caption.jpg" alt="Sample photo"> -->
              </main>
            </div>

            <div class="mySlides">
              <!-- <main class="grid">
                <img src="https://www.museumthailand.com/upload/evidence/1504166353_25320.jpg" alt="Sample photo">
                <img src="https://archive.clib.psu.ac.th/online-exhibition/Songkhla/images/DSC_0667_resize.jpg"
                  alt="Sample photo">
                <img src="https://u01.appmifile.com/images/2019/06/15/87bf9e11-b156-40d0-9625-d30d6359650d.jpg"
                  alt="Sample photo">
                <img src="https://mpics.mgronline.com/pics/Images/560000001018701.JPEG" alt="Sample photo"> -->
              <!-- <img src="images/news/n2.jpg" alt="Sample photo">
                <img src="images/news/n1.jpg" alt="Sample photo">
                <img src="images/news/n5.jpg" alt="Sample photo">
                <img src="images/news/n6.jpg" alt="Sample photo"> -->
              </main>
            </div>

            <div class="mySlides">
              <main class="grid">
                <!-- <img src="images/news/n5.jpg" alt="Sample photo">
                <img src="images/news/n4.jpg" alt="Sample photo">
                <img src="images/news/n6.jpg" alt="Sample photo">
                <img src="images/news/n3.jpg" alt="Sample photo">
                <img src="images/news/n1.jpg" alt="Sample photo">
                <img src="images/news/n2.jpg" alt="Sample photo">
                <img src="images/news/n5.jpg" alt="Sample photo">
                <img src="images/news/n6.jpg" alt="Sample photo"> -->
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
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7920.135068611742!2d100.48065642399426!3d7.001329679769797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304d2856e17a0f7b%3A0x368d7c00cb92abc6!2z4LiB4Li44LmJ4LiH4LiW4Lix4LiHQOC4q-C4suC4lOC5g-C4q-C4jeC5iA!5e0!3m2!1sth!2sth!4v1583374027231!5m2!1sth!2sth"
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
            <div class="row box">
              

              <a href="/detaileat"><div class="row">
                <h4 class="new1 textLinkNews"> ชามากะเตี๋ยว</h4>
                <div class="col-4">
                  <img class="imglocation" src="https://www.songkhla.go.th/tmp/9b6fd6bf935a69e6cd9e3f02150cc0ff.png"
                    alt="">
                </div>
                <div class="col-8">
                  <p class="textlocation cut-text-multi2">ร้าน ชามากะเตี๋ยว
                    เป็นร้านก๋วยเตี๋ยวที่มีชาพะยอมรสชาติดีให้ดื่มด้วย คำว่า “มากะเตี๋ยว” แปลว่า พิเศษใส่ทุกอย่าง
                    ทั้งกระดูกหมูชิ้นใหญ่ หมูแดง ลูกชิ้น หมูสับ และไข่ยางมะตูม
                    ส่วนรสชาตินั้นแทบจะไม่ต้องปรุงเพิ่มเลยทีเดียว น้ำต้มยำหอมโดดเด่นปรุงด้วยถั่วลิสงเข้มข้น
                    และที่สำคัญกระดูกหมูชิ้นใหญ่เนื้อหวานนุ่ม ยิ่งเคียงกับไข่ยางมะตูมเยิ้ม </p>
                  <p class="textlocation cut-text-multi2" style="margin-left: -61%;"><i class="fas fa-eye"></i> : 1605</p>
                </div>
              </div></a>
            </div>
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
                    <p class="textlocation cut-text-multi2"><i class="fas fa-eye"></i> : 1227</p>
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