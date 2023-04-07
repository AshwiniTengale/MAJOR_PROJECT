<?php



$servername = "localhost";
$username = "root";
 $Password = "";

$databasename= "MajorProject";
// Create connection
$conn = mysqli_connect($servername,$username,$Password,$databasename);


if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
else
{
  echo"";
}
?>

