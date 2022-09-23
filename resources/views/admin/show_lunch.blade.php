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
          
            <div class="col-sm-10 mt-20 mx-auto">
            <h1 style="text-align: center; font-size:40px;">Lunch Menu</h1>
                <table class="table table-bordered  bg-white ">
                    <thead class="thead-dark">
                        <tr>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>image</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                       @foreach($data as $data)
                        <tr>
                            <td>{{$data->title}}</td>
                             <td>${{$data->price}}</td>
                             <td>{{$data->description}}</td>
                             <td>
                                <img style="width: 70px; height:70px;" src="lunchImg/{{$data->image}}" alt="">
                             </td>
                            <td>
                                <a onclick="return confirm('Are You Sure to delete this?')" class="btn btn-danger" href="{{url('/delete_lunch_menu',$data->id)}}">delete</a>
                                <a  class="ml-3 px-4 btn btn-primary" href="{{url('/edit_lunch',$data->id)}}">Edit</a>
                            </td>
                           
                            
                          
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