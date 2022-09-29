<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
      
      .input_deg{
        margin: 10px;
      }

    </style>

    <base href="/public">
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
      <!-- partial -->

      <div class="main-panel">
          <div class="content-wrapper">
            
            <div>
              <form action="{{ url('update',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div>
                  <label>Title</label>
                  <input class="input_deg" style="color:black" type="text" name="title" value="{{ $data->title }}" required>
                </div>

                <div>
                  <label>Price</label>
                  <input class="input_deg" style="color:black" type="num" name="price" value="{{ $data->price }}" required>
                </div>

                <div>
                  <label>Description</label>
                  <input class="input_deg" style="color:black" type="text" name="description" value="{{ $data->description }}" required>
                </div>



                <div>
                  <label>Old Image</label>
                  <img width="100px" height="100px" src="foodimage/{{ $data->image }}">
                </div>

                <div>
                  <label>New Image</label>
                  <input class="input_deg" type="file" name="image" required>
                </div>




                <div>
                  <input class="btn btn-primary" type="submit" value="Update">
                </div>

              </form>

              </div>

          </div>
      </div>

    @include('admin.adminjs')
  </body>
</html>