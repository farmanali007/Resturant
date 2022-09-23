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
          
            <div class="col-sm-6 mt-20 mx-auto">
            <h1 style="text-align: center; font-size:40px;">All Users</h1>
                <table class="table table-bordered bg-white ">
                    <thead class="thead-dark">
                        <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $users)
                        <tr align="center">
                            <td>{{$users->name}}</td>
                             <td>{{$users->email}}</td>
                             @if($users->usertype == '0')
                            <td>
                                <a onclick="return confirm('Are You Sure to delete {{$users->name}} from this list?')" class="btn btn-danger" href="{{url('delete_users',$users->id)}}">delete</a>
                            </td>
                            @else
                            <td>
                                 <a class="btn btn-danger disabled" href="">Not Allowed</a>
                            </td>
                            
                            @endif
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