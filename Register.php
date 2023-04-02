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
      <h1 class="mt-5 mb-3">Registration Form</h1>
      <form action="addnewuser.php" method="post">
      <div class="mb-3">
          <label for="name" class="form-label">User ID:</label>
          <input type="text" class="form-control" id="userid" name="userid" required>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" name="username" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone:</label>
          <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
          <label for="dob" class="form-label">Date of Birth:</label>
          <input type="date" class="form-control" id="dob" name="dob" required>
        </div>
      
        <div class="mb-3">
								<label for="department">Department</label>
								
								<select class="form-control" id="department" name="department" required>
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
              <div class="mb-3">
								<label for="category">Select Role</label>
								<select class="form-control" id="selectrole" name="selectrole" required>
								<option disabled selected>Select Role</option>
								<option value="1">Faculty</option>
								<option value="2">Student</option>
								</select>
							</div>
              <div class="mb-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="Password" name="password" placeholder="Password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
              title="Must contain atleast one number and one uppercase and one lowercase letter and 8 characters" required>
            </div>
            <div class="mb-3">
              <label for="password">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
              title="Must contain atleast one number and one uppercase and one lowercase letter and 8 characters" required>
            </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Register</button>
        </div>
      </form>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-U9g1O+nzmg7r5k5sz5w5V5w5iH0BDv5x92cNXK9Xu2tB/WPBMv8mWlskAheGGdQn" crossorigin="anonymous"></script> -->
  </body>
</html>