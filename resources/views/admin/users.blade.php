<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
      
      .th_design{
        padding: 10px;
      }
      
      .table_deg{
        border: 1px solid white;
        width: 70%;
        text-align: center;
        margin: auto;
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
            
              <table class="table_deg" style="position: relative; top: 30px;">
                <tr>
                  <th class="th_design">Name</th>
                  <th class="th_design">Email</th>
                  <th class="th_design">Action</th>
                </tr>

                @foreach($data as $data)
                <tr>
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->email }}</td>

                  @if($data->usertype == '0')
                  <td><a class="btn btn-danger" href="{{ url('userdelete',$data->id) }}">Delete</a></td>
                  @else
                  <td><a>Not Allowed</a></td>
                  @endif

                </tr>
                @endforeach

              </table>

          </div>
      </div>

    @include('admin.adminjs')
  </body>
</html>