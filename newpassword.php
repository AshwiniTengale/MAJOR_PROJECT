<?php

include 'connection.php';


$Id=$_POST["userid"];
$email=$_POST["email"];
$pass=$_POST["newPassword"];
$conf_pass=$_POST["confirmPassword"];

if($pass==$conf_pass){

$sql="Select * From Registration where userid='$Id' and email='$email'";

   $result=mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result) ;//array elements


   if(mysqli_num_rows($result) > 0){

$update_query="UPDATE Registration SET password='$pass' WHERE userid='$Id' and email='$email'"; 

if(mysqli_query($conn,$update_query)===TRUE){
            
    ?> 
    <script>
    alert("New password updated successfully");
    location.href='index.php';
  </script>

<?php

}
else{
    ?> 
    <script>
    alert("Please Enter valid Userid and Email");
    location.href='ForgotPassword.php';
  </script>
<?php
}
   }
   else{
    ?> 
    <script>
    alert("Please check your input details");
    location.href='ForgotPassword.php';
  </script>
<?php
  
   }
}
else{
    ?> 
    <script>
    alert("Password and Confirm Password should be same");
    location.href='ForgotPassword.php';
  </script>
<?php
  
}
?>