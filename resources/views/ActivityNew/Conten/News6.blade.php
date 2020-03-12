@extends('ActivityNew.main')
@section('content')

<style>
  .textTabcard{
    margin-left: 2%;
    margin-right: 3%;
    margin-top: 5.5%;
    margin-bottom: 8%;

}
.cardTab {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 225px;
  border-radius: 10px;
  background-color: white;

}

.cardTab:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
  
}
.cardImgTab{
  width:199px;
  height: 142px;
  margin-top: 4%;
  margin-left: 6%;
  margin-right: 5%;
}
.overtext {
  white-space: nowrap; 
  width: 200px; 
  overflow: hidden;
  text-overflow: ellipsis; 
 
}
.grid2 { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-gap: 2px;
  align-items: stretch;
  margin-top: 5%;
    margin-bottom: 5%;
    margin-left: 5%;
  }
.grid2 img {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px  zrgba(0,0,0,0.3);
  width: 189px;
  height: 122px;
  object-fit: cover;
}
.bg{
  background-image: url('../images/bg_songkhla.gif');
  text-align: -webkit-center;
  object-fit: cover;
}
.fontHeadLinkNews2{
  font-size: 33px;
  text-align: center;
  margin-top: 5%;
}

  </style>

<h1 class="textNews">ข่าวสาร</h1>
<h2 class="new1"></h2>


  <!--Start-body-left-->
  <div class="row">
      <div class="col-10 col-md-7 " >
          <article class="textTab">
              <div>
                  <img src="images/news/n5.jpg" class="imgNews" >
              </div>
              <div>
                  <h2><b>INET ได้รับเกียรติบัตรเชิดชูสถานประกอบการที่สนับสนุนการจ้างงานคนพิการเชิงสังคม ประจำปี 2562</b></h2>
                  <i class="far fa-calendar-alt  iconCalendar" ></i><span class="textCalendar">27 ม.ค.2563</span>
              </div>
              
              <p class="fontP">เมื่อวันที่ 18 กันยายน 2562 บริษัท อินเทอร์เน็ตประเทศไทย จำกัด(มหาชน) ได้รับเกียรติบัตรเชิดชูสถานประกอบการที่สนับสนุนการจ้างงานคนพิการเชิงสังคม ประจำปี 2562 จากมูลนิธินวัตกรรมทางสังคม เพื่อเชิดชูการทำประโยชน์ทางสังคมในฐานะที่เป็นสถานประกอบการที่ได้สนับสนุนการจ้างงานคนพิการเชิงสังคมอย่างต่อเนื่อง ซึ่งการสนับสนุนนี้ถือว่าเป็นการสร้างโอกาสให้คนพิการมีอาชีพและมีงานทำใกล้บ้าน อีกทั้งยังช่วยทำให้คนพิการเหล่านั้นมีรายได้สามารถพึ่งพาตนเอง โดย INET มีความภูมิใจที่ได้เป็นส่วนหนึ่งในการเพิ่มคุณค่าและคุณภาพชีวิตให้กับคนพิการให้ดีขึ้น และร่วมทำประโยชน์ให้กับสังคมอีกช่องทางหนึ่ง</p>
              <img src="https://www.inet.co.th/assets/img/blog/disabled2.jpg" class="imgNews" >
              <p class="fontP">ทั้งนี้ INET ได้มอบหมายให้คุณหรรษา นวาระพรรณ ผู้อำนวยการอาวุโส บริษัท อินเทอร์เน็ตประเทศไทย จำกัด(มหาชน) เป็นผู้แทนเข้ารับเกียรติบัตรเชิดชูสถานประกอบการที่สนับสนุนการจ้างงานคนพิการเชิงสังคม ประจำปี 2562 ณ ห้องมัฆวานรังสรรค์ สโมสรทหารบก</p> 
              
              <p></p>
              <p></p>

             
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
                          <img class="cardImgTab" src="images/news/n6.jpg" >
                            <div class="container">
                              <h4><b>Sugar Rock</b></h4> 
                              <p class="overtext">Sugar Rock  12341/4
                              Sugar Rock ตั้งอยู่ใกล้มหาวิทยาลัยสงขลานครินทร์ ร้านอาหารแห่งนี้ตกแต่งสไตล์คันทรี่ เปิดเพลงคลอเบา ๆ</p> 
                            </div>
                        </div>

                        <div class="cardTab ">
                          <img class="cardImgTab" src="https://www.songkhla.go.th/tmp/5c90c063dd818fd934ea8af26a0acb11.png" >
                            <div class="container">
                              <h4><b>Sugar Rock</b></h4> 
                              <p class="overtext">Sugar Rock  12341/4
                              Sugar Rock ตั้งอยู่ใกล้มหาวิทยาลัยสงขลานครินทร์ ร้านอาหารแห่งนี้ตกแต่งสไตล์คันทรี่ เปิดเพลงคลอเบา ๆ</p> 
                            </div>
                        </div>               
                    </main>
              </div>
            
            <div class="nature">
                  <main class="grid2">    
                    <div class="cardTab ">
                      <img class="cardImgTab" src="https://www.songkhla.go.th/tmp/5c90c063dd818fd934ea8af26a0acb11.png" >
                        <div class="container">
                          <h4><b>Sugar Rock</b></h4> 
                          <p class="overtext">Sugar Rock  12341/4
                          Sugar Rock ตั้งอยู่ใกล้มหาวิทยาลัยสงขลานครินทร์ ร้านอาหารแห่งนี้ตกแต่งสไตล์คันทรี่ เปิดเพลงคลอเบา ๆ</p> 
                        </div>
                    </div>
                    
                    <div class="cardTab ">
                      <img class="cardImgTab" src="images/news/n6.jpg" >
                        <div class="container">
                          <h4><b>Sugar Rock</b></h4> 
                          <p class="overtext">Sugar Rock  12341/4
                          Sugar Rock ตั้งอยู่ใกล้มหาวิทยาลัยสงขลานครินทร์ ร้านอาหารแห่งนี้ตกแต่งสไตล์คันทรี่ เปิดเพลงคลอเบา ๆ</p> 
                        </div>
                    </div>
                  </main>
            </div>
                <script>
                  w3.slideshow(".nature", 10000);
                </script>
            </div>

       
          
      </article>
       
      </div>
  </div>
  <!--END-body-right--> 

  @endsection