@extends('layouts.admin')
@section('body')

<body>
  <h1>Add Type</h1>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form action="/addtypenews" method="post"  enctype="multipart/form-data">
                  {{csrf_field()}}
                      <br>
                      <div class="form-group">
                        <label for="typenews">ประเภท</label>
                        <input type="text" class="form-control" id="typenews" name="typenews" >
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
                      <button type="submit" name="submit" class="btn btn-primary">บันทึกข้อมูล</button>

                </form>

            </div>
            <div class="col-1"></div>

        </div>
    </div>
    
</body>
@endsection