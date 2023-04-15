<?php
include 'connection.php' ;


session_start();
$UID=$_SESSION['ID'];


$sql1="SELECT COUNT(*) as count from Book WHERE User_id='$UID'";
$result1=mysqli_query($conn,$sql1);
echo"Activity<br>";
if($result1->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($result1)) 
    {
       $bcount=$row['count'];
    }
    echo "Book count :".$bcount."<br>";
}



$sql2="SELECT COUNT(*) as count from Conference WHERE User_id='$UID'";
$result2=mysqli_query($conn,$sql2);

if($result2->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($result2)) 
    {
       $ccount=$row['count'];
    }
    echo "Conference count :".$ccount."<br>";
}


$sql3="SELECT COUNT(*) as count from Journal WHERE User_id='$UID'";
$result3=mysqli_query($conn,$sql3);

if($result3->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($result3)) 
    {
       $jcount=$row['count'];
    }
    echo "Journal count :".$jcount."<br>";
}





?>