@extends('layouts.admin')
@section('body')

<body>
  <h1>รายวิชา</h1>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form action="addsubcoures" method="POST"  enctype="multipart/form-data">
                  @csrf
                  <br>
                  <div class="form-group">
                    <label for="name_sub">ชื่อวิชาเรียน</label>
                    <input type="text" class="form-control" id="name_sub" name="name_sub" >
                  </div>
                      <br>
                      <div class="form-group">
                        <label for="img_sub">เลือกรูปภาพ</label>
                        <input type="file" class="form-control" id="img_sub" name="img_sub">
                      </div>
                     <br>
                      <div class="form-group">
                        <label for="description_sub">ข้อมูล</label>
                        <input type="text" class="form-control" id="description_sub" name="description_sub" >
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
                        <label for="id_menumain">Example select</label>
                        <select  name="id_menumain" id="id_menumain" class="form-control" required>
                            <option value=""> -- Select One --</option>
                            @foreach($main as $item)
                                <option for="id_menumain" name="id_menumain" id="id_menumain" 
                                value="{{$item->id_menumain}}">{{$item->Wroding}}
                                   
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