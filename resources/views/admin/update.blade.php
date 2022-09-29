<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
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
              
              <form action="{{ url('updatechef',$data->id) }}" method="post" enctype="multipart/form-data">

                @csrf
                
                <div>
                  <label style="padding:20px">Name</label>
                  <input style="color:black;" type="text" name="name" value="{{ $data->name }}" required>
                </div>

                <div>
                  <label style="padding:20px">Speciality</label>
                  <input style="color:black;" type="text" name="speciality" value="{{ $data->speciality }}" required>
                </div>

                <div>
                  <label style="padding:20px">oldImage</label>
                  <img width="100px" height="100px" src="chefimage/{{ $data->image }}">
                </div>

                <div>
                  <label style="padding:20px">NewImage</label>
                  <input style="color:black;" type="file" name="image">
                </div>

                <div>
                  <input style="position: relative; right: -20px;" class="btn btn-primary" type="submit" value="UpdateChef">
                </div>

              </form>

            </div>


          </div>
      </div>

    @include('admin.adminjs')
  </body>
</html>