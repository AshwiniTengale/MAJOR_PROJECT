<?php

include 'connection.php';
$table=$_POST['tablename'];
$rowid=$_POST['rowid'];
$delete="Delete From $table where Id='$rowid'";
$result = mysqli_query($conn, $delete);




if($result){?>

   <script>alert("deleted successfully");

   location.href='editresearchdeatils.php';
   </script>

   <?php
}

?>