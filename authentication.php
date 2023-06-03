<?php
include 'connection.php';

$SELECTROLE=$_POST['selectrole'];
$DEPT=$_POST['department'];
$USERID=$_POST['userid'];
$PASSWORD=$_POST['password'];

if($SELECTROLE=='admin')
{
  $sql="SELECT * FROM admin WHERE User_id='$USERID' and dept='$DEPT' and password='$PASSWORD'";

$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result) ;//array elements

session_start();
$_SESSION['dept_no']=$row['dept'];

 if(mysqli_num_rows($result) > 0){


 header('Location:admin.php');
 exit();
 }
}




$sql="Select * From Registration where selectrole='$SELECTROLE' and department='$DEPT' and userid='$USERID' and password='$PASSWORD'";

$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result) ;//array elements


 if(mysqli_num_rows($result) > 0){

  
  session_start();
  $_SESSION['ID']=$row['Id'];
  $_SESSION['USERNAME']=$row['username'];
  $_SESSION['userid']=$row['userid'];
$_SESSION['email']=$row['email'];
$_SESSION['phone']=$row['phone'];
$_SESSION['dob']=$row['dob'];
$_SESSION['faculty_dept']=$row['department'];


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


