<?php
include 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="margin-left:15%;padding:1px 16px;height:1000px;">
        <h1 style="text-align:center">  B.V.V SANGHA'S  </h1>
        <h2 style="text-align:center">BASAVESHWAR  ENGINEERING COLLEGE (AUTONOMOUS) BAGALKOT</h2>
      
    <?php
        session_start();
        $uId=$_SESSION['ID'];
    ?>
    <?php 
     include 'connection.php' ;
     
     ?>
    <div class="tabledashboard">
     <p>
      
    <?php

     $sql="Select * From Registration where Id='$uId'";
     $result=mysqli_query($conn,$sql);

       if($result)
       {

       $row= mysqli_fetch_assoc($result)
  
          ?>
         <p >
           <?php  
           echo $row["userid"];
         echo "FACULTY ID: ".$row["userid"]."<br>"."NAME: " . $row["username"]." <br>"."DOB: " . $row["dob"]. " <br>"."EMAIL ID: " . $row["email"].
         " <br>";
         
        
        
        
         session_start();
         $_SESSION['Username']=$row["username"];
         $_SESSION['userid']=$row["userid"];
         
         $_SESSION['Dob']=$row["Dob"];
         $_SESSION['Emailid']=$row["email"];
         $_SESSION['faculty_id']=$row["Id"];
        
      
     }
     else{
      echo "Error:No data";
     }

  

     ?>
        
</body>
</html>