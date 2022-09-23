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

            <h1 style="font-size:40px; font-weight:bold; text-align:center;" class=" mt-24">Update Dinner Menu</h1>
                <form action="{{url('save_edit_dinner',$data->id)}}" method="POST"  enctype="multipart/form-data">
                 @csrf
                <div class="form-floating mb-3">
                <label for="floatingInput">Title</label>
               <input type="text" class="text text-success form-control" name="title" value="{{$data->title}}" required>
               </div>
        
        
               <div class="form-floating">
              <label for="floatingPassword">Price</label>
               <input type="number" class="text text-success form-control" name="price"  value="{{$data->price}}" required>
               </div>


               <div class="form-floating">
              <label for="floatingPassword">Discription</label>
               <input type="text" class="text text-success form-control" name="description" value="{{$data->description}}" required>
               </div>

               <p>Curent Image</p><br>
               <img width="100px" height="100px" src="/dinnerImg/{{$data->image}}" alt="">
  

               <div class="form-floating">
              <label for="floatingPassword">Image</label>
               <input type="file" class="form-control" name="image">
               </div>

               
               <div class="form-floating">
               <input type="submit" value="Update Dinner Menu"  class="btn btn-success form-control" name="submit">
               </div>
                

                </form>
            </div>
        </div>
     </div>

       </div>
       

          
        @include('admin.header')
       @include('admin.adminscript')
  </body>
</html>