@extends('layouts.admin')
@section('body')

<body>
  <h1>หัวข้อรายวิชา</h1>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form action="/addlist" method="POST"  enctype="multipart/form-data">
                  @csrf
                  <br>
                  <div class="form-group">
                    <label for="titallist">ชื่อรายวิชา</label>
                    <input type="text" class="form-control" id="titallist" name="titallist" >
                  </div>
                      <br>
                      <div class="form-group">
                        <label for="img_list">เลือกรูปภาพ</label>
                        <input type="file" class="form-control" id="img_list" name="img_list">
                      </div>
                      <div class="form-group">
                        <label for="Description">คำอธิบาย</label>
                        <input type="text" class="form-control" id="Description" name="Description" >
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="Check">Example select</label>
                        <select  name="Check" id="Check" class="form-control" required>
                          <option value=""> เลือกว่าจะโชว์หรือไม่โชว์</option>
                                <option for="Check" name="Check" id="Check" 
                                value="y">y
                                   
                                </option>
                                <option for="Check" name="Check" id="Check" 
                                value="n">n
                                   
                                </option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="id_sub">Example select</label>
                        <select  name="id_sub" id="id_sub" class="form-control" required>
                            <option value=""> -- Select One --</option>
                            @foreach($main as $item)
                                <option for="id_sub" name="id_sub" id="id_sub" 
                                value="{{$item->id_sub}}">{{$item->id_sub}}
                                   
                                </option>
                            @endforeach
                        </select>
                      </div>
                     
                      {{-- <label for="id_menumain">เลือกไอดี</label>
 
                      <select >
                      <option>เลือกมา 1 ไอดี</option>
                      <option value="Android" name="id_menumain" id="id_menumain">1</option>
                      <option value="PHP" name="id_menumain" id="id_menumain">2</option>
                      <option value="Java" name="id_menumain" id="id_menumain">3</option>
                      <option value="JavaScript" name="id_menumain" id="id_menumain">4</option>                      
                      </select>  --}}
                      <br>
                      <button type="submit" name="submit1" class="btn btn-primary">บันทึกข้อมูล</button> 

                </form>

            </div>
            <div class="col-1"></div>

        </div>
    </div>
    
</body>
@endsection