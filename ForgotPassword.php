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
          <h1 class="text-center mb-4">Forgot Password</h1>
          <form action="newpassword.php" method="post">
          <div class="form-group">
          <label for="name" class="form-label">User ID:</label>
          <input type="text" class="form-control" id="userid" name="userid" placeholder="Enter User ID" required>
        </div>
            <div class="form-group">

              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
              
            </div>
          
            <div class="form-group">
              <label for="password">New Password</label>
              <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
              title="Must contain atleast one number and one uppercase and one lowercase letter and 8 characters" required>
            </div>
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
              title="Must contain atleast one number and one uppercase and one lowercase letter and 8 characters" required>
            </div>
         
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>
        </div>
      </div>
    </div>
    
  </body>
</html>
