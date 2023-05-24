

<?php

$servername = "localhost";
$username = "root";
$Password = "";
//$Password = "Ashwini123";
$databasename= "MajorProject";
// Create connection
$conn = mysqli_connect($servername,$username,$Password,$databasename);



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo "";
}

// Close connection
 //mysqli_close($conn);

?>
