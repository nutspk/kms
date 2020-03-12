@extends('layouts.admin')
@section('body')
<body>
    <h1>เนื้อหา สงขลาวันเดียวก็เที่ยวได้</h1>
    <div class="container">
        <form action="/addlocation" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
            </div>
    
          

            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select  name="id_type" class="form-control" required>
                    <option value=""> -- Select One --</option>
                    @foreach($type as $maintype)
                        <option value="{{ $maintype->type_id }}">
                            {{ $maintype->name }}
                        </option>
                    @endforeach
                </select>
              </div>
    

            <div class="form-group">
                <label for="description">description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="description">
            </div>

            <div class="form-group">
                <label for="description">Location</label>
                <input type="text" class="form-control" name="Location" id="description" placeholder="description">
            </div>

            <div class="form-group">
                <label for="display">display</label>
                <input type="text" class="form-control" name="display" id="description" placeholder="display">
            </div>



            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control"  name="image" id="image" >
            </div>
    
            
    
    
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>
@endsection