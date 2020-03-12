@extends('layouts.admin')
@section('body')

<body>
  <h1>Add News/Activity</h1>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
               
                  <form action="/adddata" method="post"  enctype="multipart/form-data">
                    {{csrf_field()}}
                  <br>
                  <div class="form-group">
                    <label for="Titelnews">Titelnews</label>
                    <input type="text" class="form-control" id="Titelnews" name="Titelnews" >
                  </div>
                      <br>
                      <div class="form-group">
                        <label for="imgnews">เลือกรูปภาพ</label>
                        <input type="file" class="form-control" id="imgnews" name="imgnews">
                      </div>
                      <div class="form-group">
                        <label for="Description_news">ข้อมูล</label>
                        <input type="text" class="form-control" id="Description_news" name="Description_news" >
                      </div>
                      <div class="form-group">
                      <label for="id_typenews">Example select</label>
                      <select  name="id_typenews" id="id_typenews" class="form-control" required>
                          <option value=""> -- Select One --</option>
                          @foreach($main as $item)
                              <option for="id_typenews" name="id_typenews" id="id_typenews" 
                              value="{{$item->id_typenews}}">{{$item->typenews}}
                                 
                              </option>
                          @endforeach
                      </select>
                    </div>
                    
                      <br>
                      <div class="form-group">
                        <label for="Check">	Check</label>
                        <input type="text" class="form-control" id="Check" name="Check" >
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