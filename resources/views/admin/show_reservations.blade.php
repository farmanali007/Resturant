<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>      
       

        <div class="container-scroller">
        @include('admin.navbar')
       
        <div class="container">
        <div class="row">
          
            <div class="col-sm-10 mt-44 mx-auto">
            <h1 style="text-align: center; font-size:40px; padding: 40px;">All Reservations</h1>
                <table class="table table-bordered bg-white ">
                    <thead class="thead-dark">
                        <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Time</th>
                        <th>Data</th>
                        <th>No. Of Guest</th>
                        <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                             <td>{{$data->email}}</td>
                             <td>{{$data->phone}}</td>
                             <td>{{$data->time}}</td>
                             <td>{{$data->date}}</td>
                             <td>{{$data->guest}}</td>
                             <td>{{$data->message}}</td>
                         
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   </div>
  
       @include('admin.header')
       @include('admin.adminscript')
  </body>
</html>