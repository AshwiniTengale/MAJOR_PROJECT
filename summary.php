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
    // echo "Book count :".$bcount."<br>";
    // echo "Conference count :".$ccount."<br>";
    // echo "Journal count :".$jcount."<br>";
    
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
    
</table>
</html>