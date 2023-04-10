<?php
include 'connection.php' ;


session_start();
$UID=$_SESSION['ID'];

$sql1="SELECT COUNT(scopusindex)
FROM Book
WHERE scopusindex='yes' AND webofscience='no' AND User_id=$UID ";
$result1=mysqli_query($conn,$sql1);

if($row = mysqli_fetch_assoc($result1))
{
    $count1=$row['COUNT(scopusindex)'];
    echo "scopus_index_count: $count1 <br>";
}





$sql2="SELECT COUNT(webofscience)
FROM Book
WHERE webofscience='no' AND scopusindex='no'   AND User_id=$UID ";
$result2=mysqli_query($conn,$sql2);

if($row = mysqli_fetch_assoc($result2))
{
    $count2=$row['COUNT(webofscience)'];
    echo "<br>"." webofscience_count:".$count2;
}





$sql3="SELECT COUNT(scopusindex)
FROM Book
WHERE scopusindex='no' AND webofscience='no' AND User_id=$UID ";
$result3=mysqli_query($conn,$sql3);

if($row = mysqli_fetch_assoc($result3))
{
    $Count3=$row['COUNT(scopusindex)'];
    echo "scopus_index_count: $Count3<br> ";
}
else{
    echo " ";
}



$sql="SELECT COUNT(scopusindex)
FROM Book
WHERE scopusindex='yes' AND webofscience='no' AND User_id=$UID ";
$result=mysqli_query($conn,$sql);

if($row = mysqli_fetch_assoc($result))
{
    $Min_date=$row['COUNT(scopusindex)'];
    echo "scopus_index_count:".$Min_date;
}
else{
    echo " ";
}
?>