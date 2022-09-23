<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss')
  </head>
  <body>
  
        <div class="container-scroller">
        @include('admin.navbar')
    
     <div class="container ">
        <div class="row">
        
            <div class="col-sm-6 mt-32 mx-auto">

            <h1 style="font-size:40px; font-weight:bold; text-align:center;" class=" mt-24">Update Chef</h1>
                <form action="{{url('save_edit_chefs',$data->id)}}" method="POST"  enctype="multipart/form-data">
                 @csrf
                <div class="form-floating mb-3">
                <label for="floatingInput">Name</label>
               <input type="text" class="text text-success form-control" name="name" value="{{$data->name}}" required>
               </div>
        
        
               <div class="form-floating">
              <label for="floatingPassword">Role</label>
               <input type="text" class="text text-success form-control" name="role" value="{{$data->role}}" required>
               </div>

                <p>Curent Image</p><br>
               <img width="100px" height="100px" src="/chefsimages/{{$data->image}}" alt="">


               <div class="form-floating">
              <label for="floatingPassword">Image</label>
               <input type="file" class="form-control"  name="image">
               </div>

               
               <div class="form-floating">
               <input type="submit" value="Update Chef"  class="btn btn-success form-control" name="submit">
               </div>
                

                </form>

                
            </div>
        </div>
        <div class="mx-auto col-sm-6">
           
        </div>
     </div>

       </div>
       

          
        @include('admin.header')
       @include('admin.adminscript')
  </body>
</html>