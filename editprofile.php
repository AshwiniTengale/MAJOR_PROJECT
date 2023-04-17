<?php
include 'connection.php';
session_start();
$UID=$_SESSION['ID'];





$name=$_POST['username'];
$uid=$_POST['userid'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$newpassword=$_POST['newPassword'];
$conpassword=$_POST['confirmPassword'];



$update="Update Registration set userid='$uid',username='$name',email='$email',phone='$phone',dob='$dob',password='$newpassword' where Id='$UID'";
$result=mysqli_query($conn,$update);

if($result) {?>
      
    <script>

    alert("Profile Updated Successfully");
    location.href='index.php';
  </script>

<?php
}
else{
?>
<script>

alert("Something when Wrong");
location.href='index.php';
</script>  
<?php
}

?>