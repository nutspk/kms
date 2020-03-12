@extends('courses.main')
@section('body')


<body>
  
{{-- <h1 class="textNews"><b>NAME</b></h1> --}}


  <section>
    <!--Start-body-left-->
    <div class="row">
      <div class="col-10 col-md-7 ">
        <article class="textTab">
          @foreach ($listcoures as $item)
          <a href="{{action('detailController@showdetail',$item->id_list)}}"><div class="card1">
              <div class="card-header ">
                <h2 class="card-title ml-3 ">{{$item->titallist}}<small></small> </h2>
              </div>
              <div class="card-body">
                <div class="row">
                </div>
                <div class="row 1">
                  <div class="col-1"><img src="{{asset('storage')}}/image/{{$item->img_list}}" class="imgbox"></div>
                  <div class="col-8">
                    <p class="card-text">{{$item->Description}}</p>
                  </div>
                </div>
              </div>
            </div></a> 

                  
                  <div class="container mr-3">
                    <div class="row1">
                      <div class="col">
                        <div class="media">
                          <img src="{{asset('storage')}}/image/manod.jpg" class="imgblog" alt="...">
                          <div class="media-body ">
                            <h5 class="ml-2">Media heading &nbsp; <small class="ml-5">20/02/2020</small>
                              </small> <span class=" iconblig" ></span><i class="far fa-eye" style="font-size: 15px;">&nbsp;124</i>  &nbsp; <i class="far fa-comments" style="font-size: 15px;">&nbsp;12</i>
                              </span> </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  @endforeach
           
                 

            <br>

            <hr>
            <div>
            {{ $listcoures->links()}}
            
            </div>



          
           
        </article>
        
      </div>

      <!--END-body-left-->

      <!--Start-body-right-->
      <div class=" col-8 col-md-5 ">
        
        <article class="textTab2">
          <h1 class="fontHeadLinkNews">Software Eng</h1>
          <hr>
          <!--NewS1-->
          <p class="TabTextLinkNews "><a href="http://127.0.0.1:8000/showlist/1" class="textLinkNews Linkactive">PHP Laravel</a> </p>
          <h2 class="new2"></h2>
          <!--NewS2-->
          <p class="TabTextLinkNews "><a href="http://127.0.0.1:8000/showlist/2" class="textLinkNews Linkactive">JAVA </a> </p>
          <h2 class="new2"></h2>
          <!--NewS3-->
          <p class="TabTextLinkNews"><a href="http://127.0.0.1:8000/showlist/3" class="textLinkNews Linkactive">CSS</a> </p>
          <h2 class="new2"></h2>
          <!--NewS4-->
          <p class="TabTextLinkNews"><a href="http://127.0.0.1:8000/showlist/4" class="textLinkNews Linkactive">HTML</a> </p>
          <h2 class="new2"></h2>
          <!--NewS5-->
          <p class="TabTextLinkNews"><a href="http://127.0.0.1:8000/showlist/5" class="textLinkNews Linkactive">vue.js</a> </p>
          <h2 class="new2"></h2>
          <p class="TabTextLinkNews"><a href="http://127.0.0.1:8000/showlist/6" class="textLinkNews Linkactive">Angula</a> </p>
          <h2 class="new2"></h2>








        </article>
        <article class="textTab2">
          <h1 class="fontHeadLinkNews">Tags</h1>
          <hr>
          <!--NewS1-->
          <p class="TabTextLinkNews "><a href="" class="textLinkNews Linkactive">PHP</a> </p>
          <h2 class="new2"></h2>
          <!--NewS2-->
          <p class="TabTextLinkNews "><a href="" class="textLinkNews Linkactive">INET ร่วมสนับสนุนงาน "OIIO" Thailand
              TECHLAND 2019 5-6 พฤศจิกายน 2562 ณ รอยัล พารากอน ฮอลล์</a> </p>
          <h2 class="new2"></h2>
          <!--NewS3-->
          <p class="TabTextLinkNews"><a href="" class="textLinkNews Linkactive">มาฟังประโยชน์ของการบริหารจัดการ IT
              Infrastructure ในยุคดิจิทัลที่ดีกัน</a> </p>
          <h2 class="new2"></h2>
          <!--NewS4-->
          <p class="TabTextLinkNews"><a href="" class="textLinkNews Linkactive">INET
              ได้รับเกียรติบัตรเชิดชูสถานประกอบการที่สนับสนุนการจ้างงานคนพิการเชิงสังคม ประจำปี 2562</a> </p>
          <h2 class="new2"></h2>
          <!--NewS5-->
          <p class="TabTextLinkNews"><a href="" class="textLinkNews Linkactive">INET ร่วมงาน OppDay
              เสนอแผนธุรกิจครึ่งปีหลัง</a> </p>
          <h2 class="new2"></h2>






        </article>

      </div>
    </div>
    <!--END-body-right-->
  </section>













</body>

@endsection