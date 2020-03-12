@extends('layouts.admin')
@section('body')

<body>
  <h1>เมนู</h1>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form action="addmenumain" method="POST"  enctype="multipart/form-data">
                  @csrf
                  <br>
                  <div class="form-group">
                    <label for="Wroding">Wroding</label>
                    <input type="text" class="form-control" id="Wroding" name="Wroding" >
                  </div>
                      <br>
                      <div class="form-group">
                        <label for="iconpart">เลือกรูปภาพ</label>
                        <input type="file" class="form-control" id="iconpart" name="iconpart">
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

                      <br>
                      <button type="submit" name="submit1" class="btn btn-primary">บันทึกข้อมูล</button>

                </form>

            </div>
            <div class="col-1"></div>

        </div>
    </div>
    
</body>
@endsection