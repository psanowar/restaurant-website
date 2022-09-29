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

    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
      <!-- partial -->

      <div class="main-panel">
          <div class="content-wrapper">

          	<div>
          		<form action="{{ url('addfood') }}" method="post" enctype="multipart/form-data">
          			@csrf
          			
          			<div>
          				<label>Title</label>
          				<input class="input_deg" style="color:black" type="text" name="title" placeholder="Title" required>
          			</div>

          			<div>
          				<label>Price</label>
          				<input class="input_deg" style="color:black" type="num" name="price" placeholder="Price" required>
          			</div>

          			<div>
          				<label>Description</label>
          				<input class="input_deg" style="color:black" type="text" name="description" placeholder="Description" required>
          			</div>

          			<div>
          				<label>Image</label>
          				<input class="input_deg" type="file" name="image" required>
          			</div>

          			<div>
          				<input class="btn btn-primary" type="submit" value="Save">
          			</div>

          		</form>

              </div>

              <div style="position:relative; top: 50px;">

                <h1 style="text-align: center;">All Foods</h1>

                <table style="border:1px solid red; text-align: center; width: 70%; margin: auto;">
                  <tr>
                    <th style="padding:30px">Name</th>
                    <th style="padding:30px">Price</th>
                    <th style="padding:30px">Description</th>
                    <th style="padding:30px">Image</th>
                    <th style="padding:30px">Action</th>
                  </tr>
                  @foreach($data as $data)
                  <tr >
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->price }}</td>
                    <td>{{ $data->description }}</td>
                    <td align="center"><img width="100" height="100" src="/foodimage/{{ $data->image }}"></td>
                    <td>
                      <a class="btn btn-danger" href="{{ url('deletefood',$data->id) }}">Delete</a>
                      <a class="btn btn-primary" href="{{ url('updatefood',$data->id) }}">Update</a>
                    </td>
                  </tr>
                  @endforeach
                </table>
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