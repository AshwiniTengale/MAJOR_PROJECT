<?php
include 'connection.php';

$SELECTROLE=$_POST['selectrole'];
$DEPT=$_POST['department'];
$USERID=$_POST['userid'];
$PASSWORD=$_POST['password'];


$sql="Select * From Registration where selectrole='$SELECTROLE' and department='$DEPT' and userid='$USERID' and password='$PASSWORD'";

$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result) ;//array elements


 if(mysqli_num_rows($result) > 0){

  
  session_start();
  $_SESSION['ID']=$row['Id'];
  $_SESSION['USERNAME']=$row['username'];


if($SELECTROLE=='admin')
{
 echo "admin";
 header('Location:admin.php');
 exit();
}
if($SELECTROLE=='1')
{
 echo "faculty";
 header('Location:faculty.php');
 echo $_SESSION['ID'];
 exit();
}
if($SELECTROLE=='2')
{
 echo "student";
 header('Location:student.php');
 exit();
}
}
else{
?>
<script>
  alert("Please enter correct information");
  location.href='index.php';
</script>

<?php
}
    
?>


