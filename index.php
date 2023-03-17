<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Link Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
		.card {
			background-color: rgba(255, 255, 255, 0.8);
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
						<h3 class="text-center">Login</h3>
					</div>
					<div class="card-body">
						<form action="authentication.php" method="post">
							
							<div class="form-group">
								<label for="category">Select Role</label>
								<select class="form-control" id="selectrole" name="selectrole" required>
								<option disabled selected>Select Role</option>
								<option value="1">Admin</option>
								<option value="2">Teacher</option>
								<option value="3">Student</option>
								</select>
							</div>
							<div class="form-group">
								<label for="department">Department</label>
								
								<select class="form-control" id="department" name="department" required>
								<option disabled selected>Select Department</option>
									<option value="1">AI & ML</option>
									<option value="2">Automobile</option>
									<option value="3">Biotechnology</option>
									<option value="4">Civil</option>
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
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
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
