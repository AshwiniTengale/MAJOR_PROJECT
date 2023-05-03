<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Patent Details</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css" >
    <style>
    .containerbox{
         width: 50%;
  }

  h1{
    text-align: center;
  }

    </style>
  </head>
  <body>
  <div class="containerbox">
  
        <div class="col-md-6 offset-md-3 " >
      <h1 class="mb-3">Add Patent details</h1>
      <form action="adddetails.php" method="post">
        <div class="mb-3">
            <label for="faculty member" class="col-sm-offset col-form-label">Faculty Member</label>
            <input type="text" class="form-control" id="fmember" name="fmember" placeholder="" required>
        </div>

        <div class="mb-3">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <input type="text" class="form-control" id="title"  name="title" placeholder="" required>
        </div>

        <div class="mb-3">
            <label for="input3" class="col-sm-2 col-form-label">Application No</label>
            <input type="text" class="form-control" id="application_no"  name="application_no" placeholder="" required>
        </div>

        

        <div class="mb-3">
            <label for="Paper Published" class="form-label"> Status</label>
            <select class="form-select" id="status" name="status" required >
                <option value="">Select</option>
                <option value="Applied">Applied</option>
                <option value="Awarded">Awarded</option>
                <option value="Published">Published</option>
            </select>
        </div>
    
        
        <div class="mb-3">
            <label for="dop" class="col-sm-offset col-form-label">Award Date</label>
            <input type="date" class="form-control" id="dop" name="dop" required>
        </div>

        <div class="">
            <label for="input5" class="col-sm-offset col-form-label">Award Reference No</label>
            <input type="text" class="form-control" id="reference_no" name="reference_no" placeholder="" required>
        </div>
        
        <div class="text-center">
        <button type="submit" class="btn btn-primary" value="4" name="submit">Add</button>
        </div>
      </form>
    </div>
</div>
</div>
  </body>
</html>