@extends('layouts.admin')
@section('body')

<body>
  <h1>เนื้อหาวิชาสอน</h1>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form action="adddetail" method="POST"  enctype="multipart/form-data">
                  @csrf
                  <br>
                  <div class="form-group">
                    <label for="titaldetail">หัวข้อเรื่อง</label>
                    <input type="text" class="form-control" id="titaldetail" name="titaldetail" >
                  </div>
                      <br>
                      <div class="form-group">
                        <label for="img_detail">เลือกรูปภาพ</label>
                        <input type="file" class="form-control" id="img_detail" name="img_detail">
                      </div>
                      <div class="form-group">
                        <label for="Description_detail">คำอธิบาย</label>
                        <input type="text" class="form-control" id="Description_detail" name="Description_detail" >
                      </div>
                      <br> 
                      <div class="form-group">
                        <label for="Check">Check</label> 
                        <input type="text" class="form-control" id="Check" name="Check" >
                      </div>
                      <div class="form-group">
                        <label for="id_list">เลือกบทเรียน</label>
                        <select  name="id_list" id="id_list" class="form-control" required>
                            <option value=""> -- Select One --</option>
                            @foreach($main as $item)
                                <option for="id_list" name="id_list" id="id_list" 
                                value="{{$item->id_list}}">{{$item->titallist}}
                                   
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