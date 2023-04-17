<?php
include 'connection.php';
session_start();
$UID=$_SESSION['ID'];
$username=$_SESSION['USERNAME'];
$userid=$_SESSION['userid'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
$dob=$_SESSION['dob'];


?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=N">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
          <h1 class="text-center mb-4">Edit Here</h1>
          <form action="editprofile.php" method="post">

          <div class="form-group">
          <label for="name" class="form-label">User Name:</label>
          <input type="text" class="form-control" id="username" name="username" value="<?php echo $username?>" >
        </div>


          <div class="form-group">
          <label for="name" class="form-label">User ID:</label>
          <input type="text" class="form-control" id="userid" name="userid" value="<?php echo $userid?>"  >
        </div>


            <div class="form-group">
                <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email"  value="<?php echo $email?>" >
            </div>

            <div class="form-group">
          <label for="phone" class="form-label">Phone:</label>
          <input type="tel" class="form-control" id="phone" name="phone"  value="<?php echo $phone?>" >
        </div>

            <div class="form-group">
          <label for="dob" class="form-label">Date of Birth:</label>
          <input type="date" class="form-control" id="dob" name="dob"  value="<?php echo $dob?>" >
        </div>
          
            <div class="form-group">
              <label for="password">New Password</label>
              <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
              title="Must contain atleast one number and one uppercase and one lowercase letter and 8 characters"  required>
            </div>
            
         
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>
        </div>
      </div>
    </div>
    
  </body>
</html>
