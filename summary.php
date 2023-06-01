<?php
include 'connection.php' ;


session_start();
$UID=$_SESSION['ID'];


$sql1="SELECT COUNT(*) as count from Book WHERE User_id='$UID'";
$result1=mysqli_query($conn,$sql1);

if($result1->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($result1)) 
    {
       $bcount=$row['count'];
    }
   
}



$sql2="SELECT COUNT(*) as count from Conference WHERE User_id='$UID'";
$result2=mysqli_query($conn,$sql2);

if($result2->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($result2)) 
    {
       $ccount=$row['count'];
    } 
   
}


$sql3="SELECT COUNT(*) as count from Journal WHERE User_id='$UID'";
$result3=mysqli_query($conn,$sql3);

if($result3->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($result3)) 
    {
       $jcount=$row['count'];
    }
    
    
}



$sql4="SELECT COUNT(*) as count from Patent WHERE User_id='$UID'";
$result4=mysqli_query($conn,$sql4);

if($result4->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($result4)) 
    {
       $pcount=$row['count'];
    } 
   
}

$sql5="SELECT COUNT(*) as count from Phd WHERE User_id='$UID'";
$result5=mysqli_query($conn,$sql5);

if($result4->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($result5)) 
    {
       $phcount=$row['count'];
    } 
   
}




?>

