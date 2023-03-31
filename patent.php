<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Patent Details</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css" >
    <style>
    
    </style>
  </head>
  <body>
  <div class="containerbox">
    <div class="container">
      <h1 class="mt-5 mb-3">Add Patent details</h1>
      <form action="" method="post">
        <div class="mb-3">
            <label for="faculty member" class="col-sm-offset col-form-label">Faculty Member</label>
            <input type="text" class="form-control" id="fmember" placeholder="">
        </div>

        <div class="mb-3">
            <label for="input2" class="col-sm-2 col-form-label">Title</label>
            <input type="text" class="form-control" id="input2" placeholder="">
        </div>

        <div class="mb-3">
            <label for="input3" class="col-sm-2 col-form-label">Application No</label>
            <input type="text" class="form-control" id="ano" placeholder="">
        </div>

        <div class="mb-3">
            <label for="input4" class="col-sm-2 col-form-label">Status</label>
            <input type="text" class="form-control" id="status" placeholder=""> 
        </div>

        <div class="mb-3">
            <label for="Paper Published" class="form-label">Paper Published</label>
            <select class="form-select" id="ppublished" name="ppublished">
                <option value="">Select</option>
                <option value="1">Appllied</option>
                <option value="2">Awarded</option>
                <option value="3">Published</option>
            </select>
        </div>
    
        
        <div class="mb-3">
            <label for="doi" class="col-sm-offset col-form-label">Award Date</label>
            <input type="date" class="form-control" id="dop" placeholder="dop">
        </div>

        <div class="mb-3">
            <label for="input5" class="col-sm-offset col-form-label">Award Reference No</label>
            <input type="text" class="form-control" id="arefno" placeholder="">
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Add</button>
        </div>
      </form>
    </div>
</div>
  </body>
</html>