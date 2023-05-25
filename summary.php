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
<html>
    <head>
        <style>
        
        </style>
    </head>
    
<table>
<tr style="text-align:center;">
    <th><h4>SUMMARY<h4></th>
</tr>
    <tr>
       
        <th>Activity</th>
        <th>Count</th>
    </tr>
    <tr>
        <td>Book/bookChapter </td>
        <td style="text-align:center;"> <?php echo $bcount ?></td>
    </tr>
    <tr>
        <td>Conference </td>
        <td style="text-align:center;"><?php echo $ccount ?></td>
    </tr>
    <tr>
        <td>Journal </td>
        <td style="text-align:center;"><?php echo $jcount ?></td>
    </tr>
    <tr>
        <td>Patent </td>
        <td style="text-align:center;"><?php echo $pcount ?></td>
    </tr>
    <tr>
        <td>Phd </td>
        <td style="text-align:center;"><?php echo $phcount ?></td>
    </tr>
    
</table>
</html>