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
  <legend>Personal Information</legend>
  <?php
  $sql="Select * From Registration where Id='$USER_ID'";
  $result=mysqli_query($conn,$sql);

  if($result) {
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="row">
      <div class="label">User Id:</div>
      <div class="value"><?php echo $row["userid"]; ?></div>
    </div>
    <div class="row">
      <div class="label">Name:</div>
      <div class="value"><?php echo $row["username"]; ?></div>
    </div>
    <div class="row">
      <div class="label">Dob:</div>
      <div class="value"><?php echo $row["dob"]; ?></div>
    </div>
    <div class="row">
      <div class="label">Email Id:</div>
      <div class="value"><?php echo $row["email"]; ?></div>
    </div>
    <div class="row">
      <div class="label">Phone no:</div>
      <div class="value"><?php echo $row["phone"]; ?></div>
    </div>
    <?php
  } else {
    echo "<div class='row'><div class='value'>Error: No data</div></div>";
  }
  ?>

  <!-- <div style="float:right;margin-right:40px;"> -->
  
  
  <?php include 'summary.php';?>

  <legend>Summary</legend>
<div class="row">
      <div class="label">Book/BookChapter:</div>
      <div class="value"><?php echo$bcount ?></div>
    </div>
    <div class="row">
      <div class="label">Conference:</div>
      <div class="value"><?php echo $ccount  ?></div>
    </div>
    <div class="row">
      <div class="label">Journal:</div>
      <div class="value"><?php echo $jcount ?></div>
    </div>
    <div class="row">
      <div class="label">Patent:</div>
      <div class="value"><?php echo $pcount ?></div>
    </div>
    <div class="row">
      <div class="label">Phd:</div>
      <div class="value"><?php echo $phcount ?></div>
    </div>
  
</fieldset>

<style>

  .tabledashboard {
   
    background-color: rgba(247, 247, 247, 0.8);
  font-family: Arial, Helvetica, sans-serif;
  padding: 22px;
  border-radius: 10px;

  border: none;
  width: 30%;
  margin: auto;
  margin-right: 28%;
}

legend {
  background-color: #228B22;
  color: white;
  padding: 10px;
  border-radius: 10px;
  font-size: 25px;
}

.row {
  display: flex;
  align-items: center;
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
  margin-left: 10px;
}

</style>