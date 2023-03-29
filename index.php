<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Link Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap.css">
    <style>
		.card,card-body {
			background-color: rgba(255, 255, 255, 0.8);
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}
		body{
  background-image: url('image/nature.jpg');
  background-size: cover; /* This property ensures that the image covers the entire container */
  /* Other CSS properties for styling the card */
}
/* Example CSS for applying custom font to form */
body {
  font-family: 'Open Sans', sans-serif; /* Replace with the font of your choice */
}

.form-group label {
  font-size: 16px;
  font-weight: bold;
  color: #333;
}

.form-control {
  font-size: 16px;
  border-radius: 10px;
  border: 1px solid #ddd;
  padding: 10px;
  margin-bottom: 10px;
  color: #333;
}

		/* Style for the form */
form {
  background-color: #fff;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  max-width: 500px;
  margin: 0 auto;
}

/* Style for the form header */
.card-header h3 {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 20px;
  text-align: center;
  text-transform: uppercase;
  color: #1e90ff;
}

/* Style for the form labels */
label {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 10px;
  color: #1e90ff;
}

/* Style for the form inputs */
input,
select {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 12px;
  margin-bottom: 20px;
  width: 100%;
  font-size: 16px;
}

/* Style for the form inputs when they are focused */
input:focus,
select:focus {
  border-color: #1e90ff;
  outline: none;
}

/* Style for the form submit button */
button[type="submit"] {
  background-color: #1e90ff;
  border: none;
  border-radius: 5px;
  color: #fff;
  font-size: 20px;
  font-weight: 700;
  padding: 12px 24px;
  margin-top: 20px;
  width: 100%;
  transition: all 0.3s ease;
}

/* Style for the form submit button when it is hovered */
button[type="submit"]:hover {
  background-color: #00bfff;
  cursor: pointer;
}

/* Style for the form link */
.text-center a {
  color: #1e90ff;
  text-decoration: none;
  font-size: 16px;
}

/* Style for the form link when it is hovered */
.text-center a:hover {
  text-decoration: underline;
}

/* Style for the form select dropdown */
select.form-control {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
 
  background-repeat: no-repeat;
  background-position: right 10px top 50%;
  background-size: 10px 6px;
  padding-right: 30px;
  cursor: pointer;
}

/* Style for the form select dropdown arrow icon */
select.form-control::-ms-expand {
  display: none;
}

/* Style for the form error message */
.error-message {
  color: #dc3545;
  font-size: 14px;
  margin-top: 5px;
}

/* Style for the form success message */
.success-message {
  color: #28a745;
  font-size: 14px;
  margin-top: 5px;
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
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" pattern="(?=^.{8,}$)(?=.\d)(?=.[!@#$%^&]+)(?![.\n])(?=.[A-Z])(?=.[a-z]).$"
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