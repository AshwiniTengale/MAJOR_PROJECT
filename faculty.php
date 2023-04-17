<html>
   <head>
      <style>
         /* *{
            box-sizing:border-box;
         } */
         .trow{
            display: flex;
            
           
            /* flex:50%; */

         }
        
      </style>
   </head>
<?php

session_start();
$UID=$_SESSION['ID'];



?>

<?php 
include 'connection.php' ;
 include 'nav.php' ;?>
    <div class="tabledashboard">
    <p>
      
       <?php

$sql="Select * From Registration where Id='$UID'";
$result=mysqli_query($conn,$sql);

       if($result)
   {

       $row= mysqli_fetch_assoc($result)
      
          ?>
         
            
         <!-- <p  style=" padding-top:5%;text-align:left;"> -->
           <!-- 
         // echo "USER ID: ".$row["userid"]."<br>"."NAME: " . $row["username"]. " <br>"."Dob: " . $row["dob"]. " <br>"."EMAIL ID: " . $row["email"]." <br>"."Phone No:".$row["phone"];
         ?> -->
         <!-- </p>  -->
        
         <div class="trow" style="float:left;margin-top:5%;">
         
         <table>
            <tr><th> <h4 > User Details</h4></th></tr>
            <tr>
               <th>USER ID</th>
               <td><?php echo $row["userid"]?></td>
            </tr>
            <tr>
               <th> Name</th>
               <td><?php echo $row["username"]?></td>
            </tr>
            <tr>
               <th> Dob</th>
               <td><?php echo $row["dob"]?></td>
            </tr>
            <tr>
               <th> Email</th>
               <td><?php echo $row["email"]?></td>
            </tr>
            <tr>
               <th> Phone</th>
               <td><?php echo $row["phone"]?></td>
            </tr>
            
         </table>
         </div>
        
        <?php
      
      session_start();
      $_SESSION['userid']=$row["userid"];
      $_SESSION['email']=$row["email"];
      $_SESSION['phone']=$row["phone"];
      $_SESSION['dob']=$row["dob"];
     ;
     }
     else{
      echo "Error:No data";
     }
?>
<!-- <fieldset style="float:right;margin-right:40px;margin-top:20px;" > -->
   
  <div class="trow" style="float:left; margin-left:15%; margin-top:5%">
  
     <?php include 'summary.php';?>
     </div>
   <!-- </fieldset> -->
     