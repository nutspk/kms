@extends('courses.mainVDO')
@section('body')
<body>
  <section>
    <article>
      <div class="row">
        <div class="column ">
          <div class="card-header" style="margin-left: 3%;width: 212%;">
            <h2 class="card-title ml-5 fontHeadVDO ">JAVA EP2 : <small style="font-size: 82%;">ติดตั้ง Visual Studio Code</small> </h2>
          </div>  
          <div class="card-header  " style="width:210%;margin-left: 3%;">
            <h2 class="card-title ml-5  "></h2>
            <iframe width="930" height="582" src="https://www.youtube.com/embed/Px4_PEV08sM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="media ml-5" style="margin-right: 20%;">
            <img src=" images/img1/mo.jpg" class="mr-3 w3-circle imgmedia" >
          <div class="media-body">
            <h1 class="mt-0" style="font-size: 28px;font-family: 'Sukhumvit Set';"><b>Patipon neamkeaw</b></h1>
            <small></small><h3 class="mt-0" style="font-size:19px;font-family: 'Sukhumvit Set';"><b>Software Trainee No.63016</b></h3></small>
            <br>
          </small> <span class="far fa-eye sizeicon" >&nbsp;3246</i>  &nbsp; <i class="far fa-heart sizeicon" >&nbsp;436</i>&nbsp; <i class="far fa-thumbs-up sizeicon">&nbsp;436</i>
          </div>
        </div> 
      </div>
    </div>
        
    </article>

    <article2>
      <div class="column">
        <div class="card-header " style="width: 291%;margin-left: -51%;">
           <h2 class="card-title ml-5  fontHeadVDO ">Video <small> </small> </h2>
        </div>
        <div class="scrollbar" id="hoang-2">
          <div class="overflow">
            <table>
              <tr>
                <td>EP1 :ติดตั้งและเซ็ท Path</td>
                <td><a href="/VDOJAVA"><button type="submit" class="button22 button4">Play </button></a> </td>
              </tr>
              <tr>
                <td>EP2 :ติดตั้ง Visual Studio Code</td>
                <td><a href="/VDOJAVA2"><button  type="submit" class="button22 button4">Play</button></a></td>
              </tr>
              <tr>
                <td>EP3 :ใส่คำอธิบายโค้ดด้วย Comment</td>
                <td><a href="/VDOJAVA3"><button  class="button22 button4">Play</button></a></td>
              </tr>
              <tr>
                <td>EP4 :ชนิดข้อมูลพื้นฐาน</td>
                <td><a href="/VDOJAVA4"><button class="button22 button4">Play</button></a></td>
              </tr>
              <tr>
                <td>EP5 :ตัวแปร (Variable)</td>
                <td><button class="button22 button4">Play</button></td>
              </tr>
              <tr>
                <td>EP6 :การแปลงชนิดข้อมูล</td>
                <td><button class="button22 button4">Play</button></td>
              </tr>
              <tr>
                <td>EP7 :รับค่า Input ด้วย Scanner</td>
                <td><button class="button22 button4">Play</button></td>
              </tr>
            
              
            </table>
          </div>
        </div>
      </div>
    </article2> 
  </section>
<section>
<article3> 
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
          <form class="form-inline" role="form">
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Your comments" />
            </div>
            <div class="form-group">
              <button class="btn btn-default">Add</button>
            </div>
          </form>
        </div>
      </div>
  </div>
  
</article3> 

</section>

</body>

@endsection

