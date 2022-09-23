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

            <h1 style="font-size:40px; font-weight:bold; text-align:center;" class=" mt-24">Add Lunch Menu</h1>
                <form action="{{url('add_lunch_save')}}" method="POST"  enctype="multipart/form-data">
                 @csrf
                <div class="form-floating mb-3">
                <label for="floatingInput">Title</label>
               <input type="text" class="text text-success form-control" name="title" placeholder="title of food" required>
               </div>
        
        
               <div class="form-floating">
              <label for="floatingPassword">Price</label>
               <input type="number" class="text text-success form-control" name="price"  placeholder="enter food price" required>
               </div>


               <div class="form-floating">
              <label for="floatingPassword">Discription</label>
               <input type="text" class="text text-success form-control" name="description" placeholder="description" required>
               </div>


               <div class="form-floating">
              <label for="floatingPassword">Image</label>
               <input type="file" class="form-control" name="image" required>
               </div>

               
               <div class="form-floating">
               <input type="submit" value="Add Lunch"  class="btn btn-success form-control" name="submit">
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