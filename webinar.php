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
    <h1 style="text-align:center">Add Webinar/Seminar Details</h1>
    <div class="row">
      <div class="col-md-6">

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="wname" name="wname">
        </div>

        <div class="mb-3">
            <label for="Type of the activity" class="form-label">Type of the Activity</label>
            <select class="form-select" id="typeactivity" name="typeactivity">
            <option value=""></option>
            <option value="webninar">Webinar</option>
            <option value="seminar">Seminar</option>
            </select>
        </div>
        <div class="mb-3">
          <label for="Name of the activity" class="form-label">Name of the Activity</label>
          <input type="text" class="form-control" id="activityname" name="activityname">
        </div>

        <div class="mb-3">
            <label for="Role" class="form-label">Role</label>
            <select class="form-select" id="role" name="role">
            <option value=""></option>
            <option value="attented">Attented</option>
            <option value="presented">Presented</option>
            <option value="organised">Organised</option>
            </select>
        </div>
       


        <div class="mb-3">
            <label for="Level" class="form-label">Level</label>
            <select class="form-select" id="level" name="level">
            <option value=""></option>
            <option value="national">national</option>
            <option value="international">international</option>
            </select>
        </div>

       

       

         
    </div>
      <div class="col-md-6">
      <div class="mb-3">
          <label for="role" class="form-label">Role</label>
          <input type="text" class="form-control" id="role" name="role">
        </div>
      <div class="mb-3">
          <label for="From" class="form-label">From</label>
          <input type="date" class="form-control" id="from" name="from">
        </div>

        <div class="mb-3">
          <label for="To" class="form-label">To</label>
          <input type="date" class="form-control" id="to" name="to">
        </div>
      <div class="mb-3">
          <label for="fundingAgency" class="form-label">Funding Agency</label>
          <input type="text" class="form-control" id="fundingAgency" name="fundingAgency">
        </div>
        <div class="mb-3">
          <label for="fundingAmount" class="form-label">Funding Amount</label>
          <input type="text" class="form-control" id="fundingAmount" name="fundingAmount">
        </div>

      
    
  </div>
</div>
<div class="row">
  <div class="col-md-6">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>

  </form>
</div>

           

</body>
</html>