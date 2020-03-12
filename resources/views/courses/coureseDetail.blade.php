@include('courses.head')
@include('courses.headforcourese')
@include('courses.headNav')
@include('courses.nav')



<body>
  <!--Start-body-left-->
  
  <div class="row" >
    
      <div class="col-10 col-md-7 " >
          <article class="textTab4">
            @foreach ($detaildata as $item)
              <div>
                <h1 class="textNews2">{{$item->titaldetail}}</h1>
                  <img src="{{asset('storage')}}/image/{{$item->img_detail}}" class="imgNews4" >
              </div>
             
              
              
              
              <p class="fontP">{{$item->Description_detail}}</p>
              
               
              <p></p>@endforeach


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
              <p class="TabTextLinkNews "><a href="" class="textLinkNews5 ">Java-EP 1 : OOP Concept เบื้องต้นกับการสร้างบ้านสักหลัง : Class & Object</a> </p>
              <h2 class="new4"></h2>
                <!--NewS2-->
              <p class="TabTextLinkNews "><a href="" class="textLinkNews5 ">Java-EP 2 : โครงสร้างของภาษา Java</a> </p>
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
</body>

  @include('courses.foot')