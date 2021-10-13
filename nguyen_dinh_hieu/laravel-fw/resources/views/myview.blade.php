<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>My View</title>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container-fluid mt-3" style="width: 70%">
         <h4 class="mb-2">Example Form</h4>
         <form method="post" action="/data">
            @csrf
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label>Last Name</label>
                  <input type="text" name="last-name" class="form-control">
               </div>
               <div class="form-group col-sm-6">
                  <label>First Name</label>
                  <input type="text" name="first-name" class="form-control">
               </div>
            </div>
            <div class="form-group">
               <label for="inputAddress">Address</label>
               <input type="text" name="address1" class="form-control">
            </div>
            <div class="form-group">
               <label for="inputAddress2">Address 2</label>
               <input type="text" name="address2" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
   </body>
</html>