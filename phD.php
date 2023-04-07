<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    
</head>
<body>
<form>
  <div class="container">
    <h1 style="text-align:center">PhD Details</h1>
    <div class="row">
      <div class="col-md-6">

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="bname" name="bname">
        </div>

        <div class="mb-3">
          <label for="text" class="form-label">Subject</label>
          <input type="text" class="form-control" id="bauthor" name="bauthor">
        </div>
        
        <div class="mb-3">
          <label for="publisher" class="form-label">Title of the Thesis</label>
          <input type="text" class="form-control" id="bpublisher" name="bpublisher">

        </div>
        <div class="mb-3">
          <label for="doi" class="form-label">Name of the University</label>
          <input type="text" class="form-control" id="nuniversity" name="dop">
        </div>

        <div class="mb-3">
          <label for="clgName" class="form-label">Department</label>
          <input type="text" class="form-control" id="clgname" name="clgname">
        </div>

        <div class="mb-3">
            <label for="collabrating Institute" class="form-label">University(Country)</label>
            <input type="text" class="form-control" id="uname" name="uname">
        </div>

      
  
    </div>
      <div class="col-md-6">
      <div class="mb-3">
          <label for="volNo" class="form-label">Role</label>
          <input type="text" class="form-control" id="bvolumeno" name="abvolumeno">
        </div>


        <div class="mb-3">
          <label for="issueNo" class="form-label">Registration Date</label>
          <input type="date" class="form-control" id="date" name="date">
        </div>

        <div class="mb-3">
            <label for="collabrating Institute" class="form-label">Status</label>
            <select class="form-select" id="binstitute" name="binstitute">
            <option value=""></option>
            <option value="1">PhD Awarded</option>
            <option value="N">PhD Submited Details</option>
            <option value="N">PhD Ongoing Details</option>
            </select>
        </div>
      <div class="mb-3">
         <label for="pageNo" class="form-label">Award Date</label>
         <input type="date" class="form-control" id="date" name="pageno">
         </div>

        <div class="mb-3">
      <label for="url" class="form-label">Post PhD Placement</label>
      <input type="url" class="form-control" id="url" name="url">
      </div>
    
  </div>
</div>

<div class="">
  <div class="col-md-6">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>

  </form>
</div>

           

</body>
</html>