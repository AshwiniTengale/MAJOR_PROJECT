<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        table,th,td{
            border:1px solid black;
            font-family:"Times New Roman",Times,serif;
            width:1%;
            height:60%;
        }
        
    </style>


<?php 
include 'connection.php';
session_start();
$UID=$_SESSION['ID'];


$table= $_POST['selectactivity'];



$sql="SELECT * FROM $table WHERE User_id='$UID'";

$result=mysqli_query($conn,$sql);
if($table=='Book')
{


if($result->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($result)) 
    {
        

        ?>
        <h2><?php echo "Books/Book Chapters" ?></h2>
       
        <br>
            <table  class="table table-sm">
                <thead class="thead-light">
            <tr>
            <th >Sl.No</th>
            <th>Authors</th>
            <th>Year of Publication</th>
            <th>Title of the Chapter </th>
            <th>Title of the Book </th>
            <th>Volume No and<br>Issue No</th>
            <th>Page No</th>
            <th>URL</th>
            <th>Scopus Indexed</th>
            <th>Web of Science</th>
            <th>ISSN/<br>ISBN</th>
            <th>SC/<br>ST/<br>GEN</th>
            <th>International/<br>National</th>
            <th>Update</th>
            <th>Delete</th>
            </tr>        
           </thead>
        
<?php
$sl=1;
do{
    ?>     
             <tr >
              <td><?php echo $sl++; ?></td>
              <td><?php echo $row["bauthor"].",".$row["coauthor"]; ?></td>
              <td><?php echo $row["dop"];?></td>
              <td><?php echo $row["chapter"];?></td>
              <td><?php echo $row["bname"];?></td>
              <td><?php echo $row["bvolumeno"]." and ".$row["issueno"];?></td>
              <td><?php echo $row["pageno"];?></td>
             
              <td><a href="<?php echo $row["url"]; ?> "><?php echo $row["url"];?></a></td>
              <td><?php echo $row["scopusindex"];?></td>
              <td><?php echo $row["webofscience"];?></td>
              <td><?php echo $row["issn"];?></td>
              <td><?php echo $row["category"];?></td>
              <td><?php echo $row["level"];?></td>
              <td><form action="Update_reserach_details.php" method="post">
          <input type="hidden" value="<?php echo $table;?>" name="tablename">
          <input type="hidden" value="<?php echo $row['Id'];?>" name="rowid">
          
          <button type="submit" class="btn btn-primary" name="SubmitButton">Update</button>


          </form></td>
          <td> <form action="deleterow.php" method="post">
          <?php echo $message;?>
          <input type="hidden" value="<?php echo $table;?>" name="tablename">
          <input type="hidden" value="<?php echo $row['Id'];?>" name="rowid">
          <button type="submit" class="btn btn-primary" name="SubmitButton">Delete</button>
       </form></td>
            </tr>
       <?php   
      }while ($row = mysqli_fetch_assoc($result));
  }
             
   ?>
       </table>   <?php
    
}
}


elseif($table=='Conference'){

if($result->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($result)) 
    {

        
        ?><br>
        <h2 ><?php echo "Conference Publications" ?></h2>
        <br>
            <table  class="table table-sm">
                <thead class="thead-light">
                <tr>
                <th>Sl.No</th>
                <th>Authors</th>
                <th>Year of Publication</th>
                <th>Title of Paper </th>
                <th>Title of Conference </th>
                <th>Conduted by and Venue</th>
                <th>Page No</th>
                <th>URL</th>
                <th>Scopus Indexed</th>
                <th>Web of Science</th>
                <th>ISSN/ISBN</th>
                <th>SC/ST/GEN</th>
                <th>International/National</th>
                <th>Update</th>
                <th>Delete</th>
                </tr>        
           </thead>
        
    <?php
    $sl=1;
    
            do{
    ?>     
         <tr >
          <td><?php echo $sl++; ?></td>
          <td><?php echo $row["cauthor"].",".$row["coauthor"]; ?></td>
          <td><?php echo $row["dop"];?></td>
          <td><?php echo $row["cpaper"];?></td>
          <td><?php echo $row["ctitle"];?></td>
          <td><?php echo $row["venue"];?></td>
          <td><?php echo $row["pageno"];?></td>
          <td><a href="<?php echo $row["url"]; ?> "><?php echo $row["url"];?></a></td>
          <td><?php echo $row["scopusindex"];?></td>
          <td><?php echo $row["webofscience"];?></td>
          <td><?php echo $row["issn"];?></td>
          <td><?php echo $row["category"];?></td>
          <td><?php echo $row["level"];?></td>

          <td><form action="Update_reserach_details.php" method="post">
          <input type="hidden" value="<?php echo $table;?>" name="tablename">
          <input type="hidden" value="<?php echo $row['Id'];?>" name="rowid">
         
          <button type="submit" class="btn btn-primary" name="SubmitButton">Update</button>


          </form></td>
          <td> <form action="deleterow.php" method="post">
          <?php echo $message;?>
          <input type="hidden" value="<?php echo $table;?>" name="tablename">
          <input type="hidden" value="<?php echo $row['Id'];?>" name="rowid">
          <button type="submit" class="btn btn-primary" name="SubmitButton">Delete</button>
       </form></td>
            </tr>
        
    <?php }while ($row = mysqli_fetch_assoc($result));

    }
}


}



elseif($table=='Journal')
{
    if($result->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($result)) 
    {
                 
    ?>
    <h2 ><?php echo "Journal Papers" ?></h2>
    <br>

        <table  class="table table-sm">
            <thead class="thead-light">
          <tr>
                <th>Sl.No</th>
                <th>Authors</th>
                <th>Year of Publication</th>
                <th>Title of the Journal and Publisher </th>
                <th>Title of the Book </th>
                <th>Volume No and Issue No</th>
                <th>Page No</th>
                <th>URL</th>
                <th>Scopus Indexed</th>
                <th>Web of Science</th>
                <th>ISSN/ISBN</th>
                <th>SC/ST/GEN</th>
                <th>International/National</th>
                <th>Update</th>
                <th>Delete</th>
             
              </tr>        
       </thead>
    
<?php
$sl=1;

        do {
?>     
    <tr >
     <td><?php echo $sl++; ?></td>
     <td><?php echo $row["jname"].",".$row["coauthor"]; ?></td>
     <td><?php echo $row["dop"];?></td>
     <td><?php echo $row["papertitle"];?></td>
     <td><?php echo $row["journaltitle"]." and ".$row["publisher"];?></td>
     <td><?php echo $row["volumeno"]." and ".$row["issueno"];?></td>
     <td><?php echo $row["pageno"];?></td>
     <td><a href="<?php echo $row["url"]; ?> "><?php echo $row["url"];?></a></td>
     <td><?php echo $row["scopusindex"];?></td>
     <td><?php echo $row["webofscience"];?></td>
     <td><?php echo $row["issn"];?></td>
     <td><?php echo $row["category"];?></td>
     <td><?php echo $row["level"];?></td>


     <td><form action="Update_reserach_details.php" method="post">
          <input type="hidden" value="<?php echo $table;?>" name="tablename">
          <input type="hidden" value="<?php echo $row['Id'];?>" name="rowid">
          
          <button type="submit" class="btn btn-primary" name="SubmitButton">Update</button>


          </form></td>
          <td> <form action="deleterow.php" method="post">
          <?php echo $message;?>
          <input type="hidden" value="<?php echo $table;?>" name="tablename">
          <input type="hidden" value="<?php echo $row['Id'];?>" name="rowid">
         
          <button type="submit" class="btn btn-primary" name="SubmitButton">Delete</button>
       </form></td>
   </tr>
<?php }while ($row = mysqli_fetch_assoc($result));
        
?>
   </table>   <?php



    }
}

}




elseif($table=='Patent')
{
    if($result->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($result)) 
    {
                 
    ?>
    <h2 ><?php echo "Patents" ?></h2>
    <br>

        <table  class="table table-sm">
            <thead class="thead-light">
          <tr>
                <th>Sl.No</th>
                <th>Faculty Member</th>
                <th>Title</th>
                <th>Application No </th>
                <th>Ref.and Date</th>
                <th>Status</th>
                <th>Update</th>
                <th>Delete</th>
             
              </tr>        
       </thead>
    
<?php
$sl=1;

        do {
?>     
    <tr >
     <td><?php echo $sl++; ?></td>
     <td><?php echo $row["fmember"]; ?></td>
     <td><?php echo $row["title"];?></td>
     <td><?php echo $row["application_no"]." & ".$row["application_date"];?></td>
     <td><?php echo $row["reference_no"]." & ".$row["dop"];?></td>
     <td><?php echo $row["status"];?></td>
     


     <td><form action="Update_reserach_details.php" method="post">
          <input type="hidden" value="<?php echo $table;?>" name="tablename">
          <input type="hidden" value="<?php echo $row['Id'];?>" name="rowid">
          
          <button type="submit" class="btn btn-primary" name="SubmitButton">Update</button>


          </form></td>
          <td> <form action="deleterow.php" method="post">
          <?php echo $message;?>
          <input type="hidden" value="<?php echo $table;?>" name="tablename">
          <input type="hidden" value="<?php echo $row['Id'];?>" name="rowid">
         
          <button type="submit" class="btn btn-primary" name="SubmitButton">Delete</button>
       </form></td>
   </tr>
<?php }while ($row = mysqli_fetch_assoc($result));
        
?>
   </table>   <?php



    }
}

}elseif($table=='Phd'){
    if($result->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($result)) 
    {?>
        <h2 ><?php echo " List of Phd Details " ?></h2>
        <br>
    
            <table  class="table table-sm">
                <thead class="thead-light">
              <tr>
                    <th>Sl.No</th>
                    <th>Research Scholar</th>
                    <th>Title of the Thesis</th>
                    <th>Name of the Guide</th>
                    <th>Name of the Co-Guide</th>
                    <th>Status <br>(Awarded/Submitted/Ongoing)</th>
                    <th> Date </th>
                    <th>Research Center</th>
                    <th>Update</th>
                <th>Delete</th>
                    
                    
                 
                  </tr>        
           </thead>
           <?php
                 $sl=1;
     
             do {
        ?>     
         <tr >
          <td><?php echo $sl++; ?></td>
          <td><?php echo $row["pname"]; ?></td>
          <td><?php echo $row["thesis"];?></td>
          <td><?php echo $row["guide"];?></td>
          <td><?php echo $row["coguide"];?></td>
          <td><?php echo $row["status"];?></td>
          <td><?php echo $row["dop"];?></td>
          <td><?php echo $row["research"];?></td>
          <td><form action="Update_reserach_details.php" method="post">
          <input type="hidden" value="<?php echo $table;?>" name="tablename">
          <input type="hidden" value="<?php echo $row['Id'];?>" name="rowid">
          
          <button type="submit" class="btn btn-primary" name="SubmitButton">Update</button>


          </form></td>
          <td> <form action="deleterow.php" method="post">
          <?php echo $message;?>
          <input type="hidden" value="<?php echo $table;?>" name="tablename">
          <input type="hidden" value="<?php echo $row['Id'];?>" name="rowid">
         
          <button type="submit" class="btn btn-primary" name="SubmitButton">Delete</button>
       </form></td>
          
        </tr>
       <?php }while($row = mysqli_fetch_assoc($result));
             
        ?>
        </table>   
       
     <?php
             }

}

}

?>
