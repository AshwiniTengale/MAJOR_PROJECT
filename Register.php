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
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" name="name" required>
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
          <label for="designation" class="form-label">Designation:</label>
          <select class="form-select" id="designation" name="designation">
            <option value="" selected>Select Designation</option>
            <option value="developer">Developer</option>
            <option value="designer">Designer</option>
            <option value="manager">Manager</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password:</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Register</button>
        </div>
      </form>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-U9g1O+nzmg7r5k5sz5w5V5w5iH0BDv5x92cNXK9Xu2tB/WPBMv8mWlskAheGGdQn" crossorigin="anonymous"></script> -->
  </body>
</html>