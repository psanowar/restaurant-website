<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
      <!-- partial -->

      <div class="main-panel">
          <div class="content-wrapper">

            <div>
              
              <form action="{{ url('addchef') }}" method="post" enctype="multipart/form-data">

                @csrf
                
                <div>
                  <label style="padding:20px">Name</label>
                  <input style="color:black;" type="text" name="name" placeholder="Name" required>
                </div>

                <div>
                  <label style="padding:20px">Speciality</label>
                  <input style="color:black;" type="text" name="speciality" placeholder="Speciality" required>
                </div>

                <div>
                  <label style="padding:20px">Image</label>
                  <input style="color:black;" type="file" name="image" required>
                </div>

                <div>
                  <input style="position: relative; right: -20px;" class="btn btn-primary" type="submit" value="Save">
                </div>

              </form>

            </div>

            <div style="position:relative; top: 100px">
              <h1>Show ChefData</h1>
              <table>
                <tr>
                  <th style="padding:30px">Name</th>
                  <th style="padding:30px">Speciality</th>
                  <th style="padding:30px">Image</th>
                  <th style="padding:30px">Action</th>
                </tr>

                @foreach($data as $data)
                <tr align="center">
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->speciality }}</td>
                  <td>
                    <img width="100px" height="100px" src="chefimage/{{ $data->image }}">
                  </td>
                  <td>
                    <a href="{{ url('deletechef',$data->id) }}">Delete</a>
                    <a href="{{ url('chefupdate',$data->id) }}">Update</a>
                  </td>
                  
                </tr>
                @endforeach

              </table>
              <br>
              <br>
              <br>
              <br>
              <br>

            </div>


          </div>
      </div>

    @include('admin.adminjs')
  </body>
</html>