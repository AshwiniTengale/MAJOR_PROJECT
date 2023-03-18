<?php
include 'connection.php';

// $value=$_POST['selectrole'];
// $Username=$_POST['username'];
// $pass=$_POST['password'];
// $hash=sha1($pass);



?>
<a href ="faculty1.php"></a>
<?php
$sql="Select * From $value where password='$hash' and username='$Username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result) ;

if(mysqli_num_rows($result) > 0){

session_start();
$_SESSION['ID']=$row['Id'];
$_SESSION['Role']=$value;

if($value=='admin')
{

 header('Location:admin1.php');
 exit();
}
if($value=='Faculty')
{
 
 header('Location:faculty1.php');
 exit();
}
}
else{
  ?>
  <script>
    alert("Please enter correct information");
    location.href='login.php';
  </script>

 <?php
  }
      
?>
