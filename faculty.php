<html>
<?php
session_start();
$USER_ID=$_SESSION['ID'];

?>

<?php 
include 'connection.php' ;
 include 'nav.php' ;?>
    <div class="tabledashboard">
    <p>
      
       <?php

$sql="Select * From Registration where Id='$USER_ID'";
$result=mysqli_query($conn,$sql);

       if($result)
   {

       $row= mysqli_fetch_assoc($result)
  
          ?>
         <p  style=" padding-top:5%;text-align:left;">
           <?php  
         echo "USER ID: ".$row["userid"]."<br>"."NAME: " . $row["username"]. " <br>"."Dob: " . $row["dob"]. " <br>"."EMAIL ID: " . $row["email"]." <br>"."Phone No:".$row["phone"];
         ?>
         </p> 
        
        <?php
      
      
     }
     else{
      echo "Error:No data";
     }

  

     ?>