@extends('travel.detail.Travel.index')
@section('content')

  <h1 class="textNews">เที่ยวสนุก</h1>
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
          <h1 class="fontHeadLinkNews">สถานที่ท่องเที่ยวใกล้เคียง</h1>
          <div class="container ">
            <a href="/detailtravel3"><div class="row box">
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
            </div></a>
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
                  <p class="textlocation cut-text-multi">ย่านเมืองเก่าอยู่บริเวณถนนนางงาม นครใน นครนอก และยะลา เป็นถนนเล็กๆ ตึก และบ้านเรือนร้านค้าในละแวกนี้สร้างตาม สถาปัตยกรรมแบบจีนปนยุโรป มีลวดลายปูนปั้นประดับที่กรอบหน้าต่างและหัวเสาสวยงาม นอกจากนี้ บริเวณนี้ยังเป็นย่านอาหารพื้นเมือง ของสงขลา เช่นก๋วยเตี๋ยวสงขลา เต้าคั่ว ขนมกระบอก เป็นต้น

                  </p>
                </div>
              </div>
            </div>



          </div>


          <!-- hotel -->
          <h1 class="fontHeadLinkNews" style="margin-top: 16%;">ที่พัก</h1>
          <div class="container">
            <div class="blog-card">
              <div class="meta">
                <div class="photo"
                  style="background-image: url(https://lh3.googleusercontent.com/p/AF1QipNvhP-cFXZM1lV2nFbdajtWbrWM5TaxD5mWkfny=w296-h202-n-k-rw-no-v1)">
                </div>
                <ul class="details">
                  <!-- <h1>let go</h1> -->
                </ul>
              </div>
              <div class="description">
                <h1>เก้าเส้ง รีสอร์ท Kaoseng Resort</h1>
                <h2>4.0 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i><i class="far fa-star"></i></h2>
                <p><i class="fas fa-wifi"></i> Wifi ฟรี</p>
                <p class="read-more">
                  <a>฿ 390 </a>
                </p>
              </div>
            </div>
            <div class="blog-card">
              <div class="meta">
                <div class="photo"
                  style="background-image: url(https://lh3.googleusercontent.com/proxy/ib15ZLE9z7ZI5JTjb4DsYYOpjI3_gT9-5XkEBh4tWMLD8pRGU5e2VTlBaTSx7nalXxSt7VRTD3-vVaHBwiMr1vNhaekre3QQM9knxak66IE4klHHf8wnIrm6mA8_dyd3nIa0lqGNe_2O7uNLo4VXj3RKrb87xcc=w296-h202-n-k-rw-no-v1)">
                </div>
                <ul class="details">
                  <!-- <h1>let go</h1> -->
                </ul>
              </div>
              <div class="description">
                <h1>Sabai Sabai Resort</h1>
                <h2>4.0 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i><i class="far fa-star"></i></h2>
                <p><i class="fas fa-wifi"></i> Wifi ฟรี</p>
                <p class="read-more">
                  <a>฿ 600 </a>
                </p>
              </div>
            </div>

            <div class="blog-card">
              <div class="meta">
                <div class="photo"
                  style="background-image: url(https://lh3.googleusercontent.com/proxy/ykG7xRyuZM7a2b91zTSTPa9k4-vACisz7kLlzZ7xKrFcGi3QBAKiJaGpviN9XPiCKMkgiIaAPT8aDM7ubrsOvkM29HCwaqz9ITfoZKd_lZ10LqEXsz1NOnBRGEmbSczKZiDmpBYcst4B4hrdF9tobRKGN2qHv8M=w296-h202-n-k-rw-no-v1)">
                </div>
                <ul class="details">
                  <!-- <h1>let go</h1> -->
                </ul>
              </div>
              <div class="description">
                <h1>เดอะฮิลล์รีสอร์ท@สงขลา</h1>
                <h2>3.9 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i><i class="far fa-star"></i></h2>
                <p><i class="fas fa-wifi"></i> Wifi ฟรี</p>
                <p class="read-more">
                  <a>฿ 450 </a>
                </p>
              </div>
            </div>

            <div class="blog-card">
              <div class="meta">
                <div class="photo"
                  style="background-image: url(https://lh5.googleusercontent.com/p/AF1QipNUiGyQiGslKxvRMU4Gm-GRMOqfm-xPJvc_gA00=w325-h299-k-no)">
                </div>
                <ul class="details">
                  <!-- <h1>let go</h1> -->
                </ul>
              </div>
              <div class="description">
                <h1>Today Resort ทูเดย์รีสอร์ท</h1>
                <h2>3.9 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i><i class="far fa-star"></i></h2>
                <p><i class="fas fa-wifi"></i> Wifi ฟรี</p>
                <p class="read-more">
                  <a>฿ 428 </a>
                </p>
              </div>
            </div>

          </div>



        </article>

      </div>
    </div>
    <!--END-body-right-->
  </section>


</body>

@endsection