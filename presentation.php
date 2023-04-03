<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css" >
    <style>
    
    </style>
  </head>
  <body>
    <div class="container">
      <h1 class="mt-5 mb-3">Presentation Details</h1>
      <form action="" method="post">
      <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
   
        <div class="mb-3">
          <label for="Name of the Event" class="form-label">Name of the Event</label>
          <input type="text" class="form-control" id="eventname" name="eventname" required>
        </div>
        <div class="mb-3">
								<label for="Type of Activity">Type of Activity</label>
								<select class="form-control" id="activitytype" name="activitytype" required>
								<option disabled selected>Select Activity</option>
								<option value="Invited Talk">Invited Talk</option>
								<option value="Oral Presentation">Oral Presentation</option>
                                <option value="Poster Presentation">Poster Presentation</option>
								</select>
							</div>
        
         <div class="mb-3">
          <label for="Name of the Activity" class="form-label">Title of the Activity</label>
          <input type="text" class="form-control" id="activitytitle" name="activitytitle" required>
        </div>                    
        
        <div class="mb-3">
        <label for="level" class="form-label">Level</label>
        <select class="form-select" id="level" name="level">
        <option disabled selected>Select Level</option>
        <option value="National">National</option>
        <option value="international">International</option>
        
      </select>
     </div>
        <div class="mb-3">
          <label for="dob" class="form-label">Date</label>
          <input type="date" class="form-control" id="date" name="date" required>
        </div>
       
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
      </form>
    </div>
 
  </body>
</html>