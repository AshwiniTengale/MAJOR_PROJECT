<?php

include 'connection.php';


$Id=$_POST["userid"];
$email=$_POST["email"];
$pass=$_POST['newPassword'];
$conf_pass=$_POST["confirmPassword"];

if($pass==$conf_pass)
{
   

session_start();
$_SESSION['uid']=$Id;

        // output data of each row
    
          $update="Update registration set password='$pass' where userid='$Id' and email='$email'";
          $result1=mysqli_query($conn,$update);

         if($result1) {?>
      
          <script>

          alert("New password updated successfully");
          location.href='index.php';
        </script>
    
<?php
}
else{
  ?>
  <script>

  alert("Please check your input deatils");
  location.href='forgotpassword.html';
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
   









