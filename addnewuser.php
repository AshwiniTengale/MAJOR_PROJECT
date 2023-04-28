 

<?php
include 'connection.php';

$userid=$_POST['userid'];
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$dept=$_POST['department'];
$role=$_POST['selectrole'];
$password=$_POST['password'];
$confirmPassword=$_POST['confirmPassword'];
$profile=$_POST['profile'];

session_start();
$_SESSION['profile']=$profile;

if($password==$confirmPassword){




  if (isset($_FILES['profile']['name']) AND !empty($_FILES['profile']['name'])) 
  {
         
         
    $img_name = $_FILES['profile']['name'];
    $tmp_name = $_FILES['profile']['tmp_name'];
    $error = $_FILES['profile']['error'];
    // echo $img_name."<br>",$tmp_name."<br>",$error."<br>";
    if($error === 0)
    {
       $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
       $img_ex_to_lc = strtolower($img_ex);
  
      //  echo  $img_ex."<br>".$img_ex_to_lc."<br>";
  
       $allowed_exs = array('jpg', 'jpeg', 'png');
       if(in_array($img_ex_to_lc, $allowed_exs))
       {
          $new_img_name = uniqid($uname, true).'.'.$img_ex_to_lc;
          $img_upload_path = 'image/'.$new_img_name;
  
          // echo $new_img_name."<br>".$img_upload_path;
  
          move_uploaded_file($tmp_name, $img_upload_path);
  
       }
    }
    
//$hashpassword=sha1($pass);

$sql = "INSERT INTO Registration (userid,username,email,phone,dob,department,selectrole,password,profile)
VALUES ('$userid','$username','$email','$phone','$dob','$dept','$role','$password','$new_img_name')";

if (mysqli_query($conn, $sql)) 
{
 echo "asdfghj";
    ?>
    <script>
      alert("Registrated Successfully!");
      location.href='index.php';
    </script>

   <?php
}
  }

 else 
 {


$sql1 = "INSERT INTO Registration (userid,username,email,phone,dob,department,selectrole,password)
VALUES ('$userid','$username','$email','$phone','$dob','$dept','$role','$password')";

if (mysqli_query($conn, $sql1)) 
{
 
  ?>
   <script>
      alert("Registrated Successfully!");
      location.href='index.php';
    </script>
      <?php
    

 
}
  
}
  

}



else{
  ?>
  <script>
    alert("Password and Confirm Password should be same");
    location.href='Register.php';
  </script>
   <?php

}

  

?> 
