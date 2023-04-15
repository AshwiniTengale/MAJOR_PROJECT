<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Link Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="style1.css">
    <style>
body{
 
background-image: url('image/Background3.jpeg');
background-size: cover;  
background-position:center center;
background-repeat:N-repeat;
height:100vh;


}
form{
  
  background-color: rgba(255, 255, 255, 0.6);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
 
}

	</style>
</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h3 class="text-center">LOGIN</h3>
					</div>
					<div class="card-body">
						<form action="authentication.php" method="post">
							
							<div class="form-group">
								<label for="category">Select Role</label>
								<select class="form-control" id="selectrole" name="selectrole" required>
								<option disabled selected>Select Role</option>
								<option value="admin">Admin</option>
								<option value="1">Faculty</option>
								<option value="2">Student</option>
								</select>
							</div>
							<div class="form-group">
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
							<div class="form-group">
								<label for="username">Userid</label>
								<input type="text" class="form-control" id="userid" name="userid" placeholder="Enter userid" required>
							</div>
              <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="Password" name="password" placeholder="Password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
              title="Must contain atleast one number and one uppercase and one lowercase letter and 8 characters" required>
							</div>
							<button type="submit" class="btn btn-primary btn-block" required>Login</button>
							<div class="mt-3 text-center">
								<a href="ForgotPassword.php">Forgot Password?</a>
								<span class="mx-2">|</span>
								<a href="Register.php">Register</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>