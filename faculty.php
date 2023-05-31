<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faculty</title>
</head>

</html><?php
session_start();
$USER_ID=$_SESSION['ID'];
?>

<?php 
include 'connection.php' ;
include 'nav.php' ;
?>

<fieldset class="tabledashboard">
  <legend>Personal Info</legend>
  <?php
  $sql="Select * From Registration where Id='$USER_ID'";
  $result=mysqli_query($conn,$sql);

  if($result) {
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="row">
      <div class="label">USER ID:</div>
      <div class="value"><?php echo $row["userid"]; ?></div>
    </div>
    <div class="row">
      <div class="label">NAME:</div>
      <div class="value"><?php echo $row["username"]; ?></div>
    </div>
    <div class="row">
      <div class="label">DOB:</div>
      <div class="value"><?php echo $row["dob"]; ?></div>
    </div>
    <div class="row">
      <div class="label">EMAIL ID:</div>
      <div class="value"><?php echo $row["email"]; ?></div>
    </div>
    <div class="row">
      <div class="label">PHONE NO:</div>
      <div class="value"><?php echo $row["phone"]; ?></div>
    </div>
    <?php
  } else {
    echo "<div class='row'><div class='value'>Error: No data</div></div>";
  }
  ?>

  <!-- <div style="float:right;margin-right:40px;"> -->
  <div class="trow" style="float:left; margin-left:15%; margin-top:5%">
  
  <?php include 'summary.php';?>
  <!-- </div> -->
  </div>
</fieldset>

<style>
  .tabledashboard {
    background-color: #f7f7f7;
    font-family: Arial, Helvetica, sans-serif;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 10px 10px;
    border: none;
    margin: 0;
    width: 30%;
   
  }
  legend {
    background-color: #228B22;
    color: white;
    padding: 20px;
    border-radius: 10px;
    font-size: 20px;
    
  }
  .row {
    display: flex;
    margin-bottom: 10px;
  }
  .label {
    flex: 1;
    color: #555;
    font-weight: bold;
  }
  .value {
    flex: 2;
    color: #555;
  }

</style>