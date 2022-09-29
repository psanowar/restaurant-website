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

          	<table>
          		<tr>
          			<th style="padding:20px">Name</th>
          			<th style="padding:20px">Email</th>
          			<th style="padding:20px">Phone</th>
          			<th style="padding:20px">Date</th>
          			<th style="padding:20px">Time</th>
          			<th style="padding:20px">Person</th>
          			<th style="padding:20px">Message</th>
          		</tr>

          		@foreach($data as $data)
          		<tr align="center">
          			<td>{{ $data->name }}</td>
          			<td>{{ $data->email }}</td>
          			<td>{{ $data->phone }}</td>
          			<td>{{ $data->date }}</td>
          			<td>{{ $data->time }}</td>
          			<td>{{ $data->person }}</td>
          			<td>{{ $data->message }}</td>
          		</tr>
          		@endforeach

          	</table>

          </div>
      </div>

    @include('admin.adminjs')
  </body>
</html>