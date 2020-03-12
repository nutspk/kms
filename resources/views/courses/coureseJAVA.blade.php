@include('courses.head')
@include('courses.headNav')
@include('courses.nav')
<!DOCTYPE html>
<html lang="en">
<head>

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
</head>



  <!--Start-body-left-->
  
  <div class="row" >
    
      <div class="col-10 col-md-7 " >
          <article class="textTab4">
              <div>
                <h1 class="textNews2">Java-EP 1 : OOP Concept เบื้องต้นกับการสร้างบ้านสักหลัง : Class & Object </h1>
                  <img src="https://www.arnondora.in.th/static/ada57f81a86abcb2d468d0ce4a80f250/56d83/OOP_EP1_1.webp" class="imgNews4" >
              </div>
             
              
              
              
              <p class="fontP">Class & Object
                ก่อนอื่น เราต้องมาดูกันก่อนว่า ปกติ ถ้าเราจะอธิบายสิ่งของสักอย่าง มันต้องมีอะไรบ้าง
                คุณสมบัติ - รูปร่าง สี ขนาด อะไรทำนองนั้น เช่นกรรไกร อันนี้มีสีส้ม ขนาดสัก 23 cm. 
                ในการเขียนโปรแกรมก็เช่นกัน เอาไว้แสดงคุณสมบัติ และลักษณะเช่นเดียวกัน เราจะเรียกแต่ล่ะคุณสมบัติว่า Attribute
                สิ่งที่มันทำได้ (นึกไม่ออกจริง ๆ ว่าภาษาไทยใช้คำว่าอะไรดี) - เช่นถ้าเราซื้อกรรไกรมา เราก็สามารถนำกรรไกรมาตัดได้ 
                และมีคู่มืออธิบายอีกด้วย หรือจะเป็นกาวที่สามารถติดสิ่งของที่พังเข้าด้วยกันได้ โดยเราสามารถติดกับของบางอย่างเท่านั้น
                 เราจะอธิบายว่าของสิ่งนั้นมันทำอะไรได้ และต้องทำยังไง โดยการใช้ Method นั่นเอง กลับมาที่บ้านของเรากัน
                  เราลองมาอธิบายกันดีกว่า ว่าบ้านต้องมีคุณสมบัติ และทำอะไรบ้าง เริ่มต้นที่คุณสมบัติก่อนดีกว่า (เอาคร่าว ๆ ล่ะกัน เดี๋ยวจะเยอะ)</p>
              
                <img src="https://www.arnondora.in.th/static/928e281d5f5ebcb75268512adfc32507/f86ef/OOP_EP1_2.webp" class="imgNews4" >
                <p class="fontP">ความกว้างของบ้าน
                  ความยาว
                  ความสูง
                  สี
                  จำนวนห้อง และมาที่สิ่งที่บ้านทำได้กัน
                  ทางสีบ้านใหม่ได้
                  ล๊อค/ปลดล๊อก บ้านได้ และเราก็ได้คุณสมบัติ และสิ่งที่มันทำได้แล้ว แต่ลืมอะไรไปรึเปล่า เช่นเราบอกว่า บ้านมีสีเขียว จำนวน 2 ชั้น 
                  ขนาด 2x3 เมตร (บ้านเล็กเนอะ บ้านหรือรังมดเนี่ย) และมี 4 ห้อง สิ่งที่เราลืมคือ การบอกว่า สิ่งเหล่านี้มันคือบ้านนะ ซึ่งเราจะถือว่า 
                  บ้าน เป็น Class ก็ได้ เพราะว่า บ้านมีคุณสมบัติ และยังมีสิ่งที่ทำได้ เพราะฉะนั้น Class จะใช้แสดงถึงสิ่งของที่อาจจะอยู่ในรูปของนามธรรม
                   หรือรูปธรรมก็ได้ โดยมันก็จะประกอบไปด้วย Attribute และ Method เหมือนกับ บ้าน ที่พึ่งยกตัวอย่างไปเมื่อครู่ 
                   แต่ทั้งหมดที่ว่ามามันก็เป็นแค่แบบแปลนอยู่ในกระดาษทั้งนั้น ถึงตอนนี้เราได้คร่าว ๆ แล้วว่าบ้านของเรามันจะเป็นแนวไหน 
                   ขนาดเท่าไหร่ สีอะไร เป็นต้น ซึ่งตอนนี้ผมจะเป็นเจ้าของหมู่บ้านล่ะกัน ที่ได้แบบแปลนบ้าน เพื่อที่จะสร้างบ้านมา 
                   เพราะฉะนั้นบ้านที่สร้างจากแบบแปลนเดียวกันจะมี ลักษณะหน้าตาที่เหมือนกันนั่นเอง</p>               
                
                <p class="fontP"> สมมุติว่า ผมนำแบบแปลนที่ได้มา เอามาสร้างบ้านสัก 5 หลัง ลองดูตามภาพด้านล่างได้ มันจะออกมาเหมือนกัน 100% เลย
                   นั่นเพราะเราใช้แบบแปลนเดียวกันในการสร้างนั่นเอง โดยบ้านที่สร้างเราจะเรียกมันว่า Objec แต่ถามว่า วันใดวันนึงมีเจ้าของมาอยู่ที่บ้านหลังที่ 3
                    แล้วเจ้าของบ้านอยากจะเปลี่ยนสีบ้านของตัวเองเป็นสีฟ้า ถามว่า บ้านทุกหลังจำเป็นมั้ยที่ต้องเปลี่ยนเป็นสีเขียวตามบ้านหลังที่ 3 คำตอบคือ ไม่ 
                    ลองคิดดูในโลกแห่งความเป็นจริงนะครับ ถ้าเราสร้างของชิ้นนั้น ๆ มาแล้ว แต่พอเราจะเปลี่ยนคุณสมบัติหรือเพิ่มอะไรไปในนั้น 
                    จำเป็นมั้ยที่ของแบบเดียวกันที่เหลือต้องเปลี่ยนตาม ในการเขียนโปรแกรมก็ะเช่นกัน ถ้า A เปลี่ยนค่า ค่าใน B ก็ยังจะเท่าเดิม ไม่มีการเปลี่ยนแปลง 
                    ใด ๆ ก่อนจะไปที่อื่นกันต่อ สรุปก่อนว่า ก่อนนี่ได้เรียนรู้ไปแล้วว่า Class คือแบบแปลน หรือพิมพ์เขียวที่คอยอธิบายลักษณะ (Attribute)
                     และการใช้งาน (Method) ของสิ่ง ๆ นั้น เรามาลอง Implement มันลงในโปรแกรมจริงกันเลยดีกว่า โดยภาษาที่ใช้จะเป็น Java นะครับ 
                     เพราะคนเขียนชอบ โอเคนะ ! ห้ามเถียง !</p>
              <p></p>


              <div class="row row2">
                <div class="row icon329">
                  <!-- <div class="col"> -->
                  <div class="detailBox">
                    <div class="titleBox">
                      <label>Comment Box</label>
                      <button type="button" class="close" aria-hidden="true">&times;</button>
                    </div>
                    <div class="commentBox">
              
                      <p class="taskDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="actionBox">
                      <ul class="commentList">
                        <li>
                          <div class="commenterImage">
                            <img src="http://placekitten.com/50/50" />
                          </div>
                          <div class="commentText">
                            <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
              
                          </div>
                        </li>
                        <li>
                          <div class="commenterImage">
                            <img src="http://placekitten.com/45/45" />
                          </div>
                          <div class="commentText">
                            <p class="">Hello this is a test comment and this comment is particularly very long and it goes on and
                              on and on.</p> <span class="date sub-text">on March 5th, 2014</span>
              
                          </div>
                        </li>
                        <li>
                          <div class="commenterImage">
                            <img src="http://placekitten.com/40/40" />
                          </div>
                          <div class="commentText">
                            <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
              
                          </div>
                        </li>
                      </ul>
                      <form class="form-inlinee" role="form">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Your comments" />
                        </div>
                        <div class="form-group">
                          <button class="btn btn-success Tabbuttonn">Add</button>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
              </div>


             
        </article>
      </div>

<!--END-body-left-->

<!--Start-body-right-->   
      <div class=" col-8 col-md-5 ">
          <article class="textTabcard">
            
            <div class="container bg" >
              <h1 class="fontHeadLinkNews2">เที่ยวสนุก</h1>
              <div class="nature">
                    <main class="grid2">
                        <div class="cardTab ">
                          <img class="cardImgTab" src="images/S__s1.jpg" >
                            <div class="container">
                              <h4><b>Sugar Rock</b></h4> 
                              <p class="overtext">Sugar Rock  12341/4
                              Sugar Rock ตั้งอยู่ใกล้มหาวิทยาลัยสงขลานครินทร์ ร้านอาหารแห่งนี้ตกแต่งสไตล์คันทรี่ เปิดเพลงคลอเบา ๆ</p> 
                            </div>
                        </div>

                        {{-- <div class="cardTab ">
                          <img class="cardImgTab" src="images/S__e1.jpg" >
                            <div class="container">
                              <h4><b>Home</b></h4> 
                              <p class="overtext">Sugar Rock  12341/4
                              Sugar Rock ตั้งอยู่ใกล้มหาวิทยาลัยสงขลานครินทร์ ร้านอาหารแห่งนี้ตกแต่งสไตล์คันทรี่ เปิดเพลงคลอเบา ๆ</p> 
                            </div>
                        </div>                --}}
                    </main>
              </div>
            
            <div class="nature">
                  <main class="grid2">    
                    <div class="cardTab ">
                      <img class="cardImgTab" src="images/31.jpg" >
                        <div class="container">
                          <h4><b>YoTo</b></h4> 
                          <p class="overtext">Sugar Rock  12341/4
                          Sugar Rock ตั้งอยู่ใกล้มหาวิทยาลัยสงขลานครินทร์ ร้านอาหารแห่งนี้ตกแต่งสไตล์คันทรี่ เปิดเพลงคลอเบา ๆ</p> 
                        </div>
                    </div>
                    
                    {{-- <div class="cardTab ">
                      <img class="cardImgTab" src="images/22.jpeg" >
                        <div class="container">
                          <h4><b>Sugar Rock</b></h4> 
                          <p class="overtext">Sugar Rock  12341/4
                          Sugar Rock ตั้งอยู่ใกล้มหาวิทยาลัยสงขลานครินทร์ ร้านอาหารแห่งนี้ตกแต่งสไตล์คันทรี่ เปิดเพลงคลอเบา ๆ</p> 
                        </div>
                    </div> --}}
                  </main>
            </div>
                <script>
                  w3.slideshow(".nature", 2500);
                </script>
            
            </div>
          
            <div class="textTab5">
              <br>
            <h1 class="fontHeadLinkNews2" style=" margin-bottom: -3%;"> Software Engineer</h1>
            <div class="container ">
              <!--NewS1-->
              <p class="TabTextLinkNews4 "><a href="/couresePage1" class="textLinkNews4 ">PHP Laravel</a> </p>
              <h2 class="new4"></h2>
                <!--NewS2-->
              <p class="TabTextLinkNews4"><a href="/couresePageJAJA" class="textLinkNews4 ">Java</a> </p>
              <h2 class="new4"></h2>
                <!--NewS3-->
              <p class="TabTextLinkNews4 "><a href="" class="textLinkNews4 ">Java Script</a> </p>
              <h2 class="new4"></h2>
              <!--NewS4-->
              <p class="TabTextLinkNews4"><a href="" class="textLinkNews4  ">C Sharp</a> </p>
              <h2 class="new4"></h2>
              <!--NewS5--> 
              <p class="TabTextLinkNews4"><a href="" class="textLinkNews4 ">HTML</a> </p>
              <h2 class="new4"></h2>
              <p class="TabTextLinkNews4"><a href="" class="textLinkNews4">CSS</a> </p>
              <h2 class="new4"></h2>
              <p class="TabTextLinkNews4"><a href="" class="textLinkNews4 ">PHP</a> </p>
              <h2 class="new4"></h2>
              <p class="TabTextLinkNews4"><a href="" class="textLinkNews4 ">Angular</a> </p>
              <h2 class="new4"></h2>
              
            </div>

            <h1 class="fontHeadLinkNews2" style=" margin-top: 12%; margin-bottom: -3%;">Java</h1>
            <div class="container ">
              <!--NewS1-->
              <p class="TabTextLinkNews "><a href="/coureseJAVA" class="textLinkNews5 ">Java-EP 1 : OOP Concept เบื้องต้นกับการสร้างบ้านสักหลัง : Class & Object</a> </p>
              <h2 class="new4"></h2>
                <!--NewS2-->
              <p class="TabTextLinkNews "><a href="/coureseJAVA2" class="textLinkNews5 ">Java-EP 2 : โครงสร้างของภาษา Java</a> </p>
              <h2 class="new4"></h2>
                <!--NewS3-->
              <p class="TabTextLinkNews"><a href="" class="textLinkNews5">Java-EP 3 : ตัวแปรและประเภทข้อมูล</a></p>
              <h2 class="new4"></h2>
              <!--NewS4-->
              <p class="TabTextLinkNews"><a href="" class="textLinkNews5 ">Java-EP 4 : ค่าคงที่</a> </p>
              <h2 class="new4"></h2>
              <!--NewS4-->
              <p class="TabTextLinkNews"><a href="" class="textLinkNews5 ">Java-EP 5 : ตัวดำเนินการ</a> </p>
              <h2 class="new4"></h2>
             <!--NewS1-->
             <p class="TabTextLinkNews "><a href="" class="textLinkNews5 ">Java-EP 6 : อาเรย</a> </p>
             <h2 class="new4"></h2>
               <!--NewS2-->
             <p class="TabTextLinkNews "><a href="" class="textLinkNews5 ">Java-EP 7 : String</a> </p>
             <h2 class="new4"></h2>
               <!--NewS3-->
             <p class="TabTextLinkNews"><a href="" class="textLinkNews5">Java-EP 8 : Type Conversions</a></p>
             <h2 class="new4"></h2>
             <!--NewS4-->
             <p class="TabTextLinkNews"><a href="" class="textLinkNews5 ">Java-EP 9 : การเขียนโปรแกรมเชิงวัตถุ</a> </p>
             <h2 class="new4"></h2>
             <!--NewS4-->
             <p class="TabTextLinkNews"><a href="" class="textLinkNews5 ">Java-EP 10 : คลาสและออบเจ็ค</a> </p>
             <h2 class="new4"></h2>
             
            
              
            </div>
            </div>
            <br>
            <div class="container bg2" >
              <h1 class="fontHeadLinkNews2">บุกของกิน</h1>
              <div class="nature">
                    <main class="grid2">
                        <div class="cardTab ">
                          <img class="cardImgTab" src="https://www.songkhla.go.th/tmp/3fafc8fb2831a609604b85c0c5031b8f.png" >
                            <div class="container">
                              <h4><b>Seafood Dip</b></h4> 
                              <p class="overtext">Seafood Dip ร้านกุ้งถังที่ถือคติ “Eat with your hands” 
                                ไม่ต้องบินไปกินกุ้งถังไกลถึงกรุงเทพมหานคร เพราะหาดใหญ่ก็มีร้านกุ้งถังรสชาติกลมกล่อมอร่อยจนพุงกาง 
                                ร้าน Seafood Dip แห่งนี้เป็นร้านเปิดโล่งสบาย ๆ อาหารจะมีไซส์ S,M,L ให้เลือก สามารถสั่งแยกเป็น
                                 หอย ปู หรือกุ้งได้ มีซอสให้เลือก 2 แบบ และสามารถเลือกระดับความเผ็ดได้ถึง 5 ระดับ ลูกค้าสามารถเลือกสั่งได้ตามใจชอบ</p> 
                            </div>
                        </div>

                        {{-- <div class="cardTab ">
                          <img class="cardImgTab" src="https://www.songkhla.go.th/tmp/5c90c063dd818fd934ea8af26a0acb11.png" >
                            <div class="container">
                              <h4><b>Sugar Rock</b></h4> 
                              <p class="overtext">Sugar Rock  12341/4
                              Sugar Rock ตั้งอยู่ใกล้มหาวิทยาลัยสงขลานครินทร์ ร้านอาหารแห่งนี้ตกแต่งสไตล์คันทรี่ เปิดเพลงคลอเบา ๆ</p> 
                            </div>
                        </div>                --}}
                    </main>
              </div>
              

       
          
      </article>
       
      </div>
  </div>


  @include('courses.foot')