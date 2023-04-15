 

<?php
include 'connection.php';

$userid=$_POST['userid'];
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$dept=$_POST['department'];
$role=$_POST['selectrole'];
$password=$_POST['password'];
$confirmPassword=$_POST['confirmPassword'];
if($password==$confirmPassword){

//$hashpassword=sha1($pass);

$sql = "INSERT INTO Registration (userid,username,email,phone,dob,department,selectrole,password)
VALUES ('$userid','$username','$email','$phone','$dob','$dept','$role','$password')";

if (mysqli_query($conn, $sql)) {
 
    ?>
    <script>
      alert("Registrated Successfully!");
      location.href='index.php';
    </script>

   <?php
}
} 

else {
  ?>
  <script>
    alert("Password and Confirm Password should be same");
    location.href='Register.php';
  </script>
   <?php
}



 

?> 
