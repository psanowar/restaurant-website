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

            <h1>Customer Orders</h1>

            <table>
              

              <tr>
                <th style="padding:20px">Name</th>
                <th style="padding:40px">Phone</th>
                <th style="padding:20px">Address</th>
                <th style="padding:20px">FoodName</th>
                <th style="padding:20px">Price</th>
                <th style="padding:20px">Quantity</th>
                <th style="padding:20px">TotalPrice</th>
              </tr>

              @foreach($data as $data)
              <tr align="center" style="background-color: tomato;">
                <td>{{ $data->name }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->foodname }}</td>
                <td>{{ $data->price }}$</td>
                <td>{{ $data->quantity }}</td>
                <td>{{ $data->price * $data->quantity }}$</td>
              </tr>
              @endforeach


            </table>

          </div>
      </div>

    @include('admin.adminjs')
  </body>
</html>