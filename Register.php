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
    <div class="container" >
      <div class="row">
        <div class="col-md-6 offset-md-3 mt-5" >
      <h1 class="text-center mb-4">Registration Form</h1>
      <form action="addnewuser.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
          <label for="name" class="form-label">User ID:</label>
          <input type="text" class="form-control" id="userid" name="userid" >
        </div>
        <div class="form-group">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" name="username" >
        </div>
        <div class="form-group">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" name="email" >
        </div>
        <div class="form-group">
          <label for="phone" class="form-label">Phone:</label>
          <input type="tel" class="form-control" id="phone" name="phone" >
        </div>
        <div class="form-group">
          <label for="dob" class="form-label">Date of Birth:</label>
          <input type="date" class="form-control" id="dob" name="dob" >
        </div>
      
        <div class="form-group">
								<label for="department">Department</label>
								
								<select class="form-control" id="department" name="department" >
								<option disabled selected>Select Department</option>
									<option value="1">AI & ML</option>
									<option value="2">Automobile</option>
									<option value="3">Biotechnology</option>
									<option value="4">Civil Engineering</option>
									<option value="5">Computer Science & Engg</option>
									<option value="6">Electronics and Communication Engg</option>
									<option value="7">Electrical and Electronics Engg</option>
									<option value="8">Electronics and Instrumentational Engg</option>
									<option value="9">Industrial and Production Engg</option>
									<option value="10">Information Science and Engg</option>
									<option value="11">Mechanical Engg</option>
									<option value="12">Physics</option>
									<option value="13">Chemistry</option>
								</select>
							</div>
              <div class="form-group">
								<label for="category">Select Role</label>
								<select class="form-control" id="selectrole" name="selectrole" >
								<option disabled selected>Select Role</option>
								<option value="1">Faculty</option>
								<option value="2">Student</option>
								</select>
							</div>
              <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="Password" name="password" placeholder="Password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
              title="Must contain atleast one number and one uppercase and one lowercase letter and 8 characters" >
            </div>
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
              title="Must contain atleast one number and one uppercase and one lowercase letter and 8 characters" >
            </div>

            <div class="form-group">
          <label for="profile" class="form-label">Profile Photo</label>
          <input type="file" class="form-control" id="profile" name="profile" >
        </div>

        <div class="text-center">
            <button type="submit"  name="submit" class="btn btn-primary btn-lg">Register</button>
        </div>

       
      </form>
</div>
</div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-U9g1O+nzmg7r5k5sz5w5V5w5iH0BDv5x92cNXK9Xu2tB/WPBMv8mWlskAheGGdQn" crossorigin="anonymous"></script> -->
  </body>
</html>